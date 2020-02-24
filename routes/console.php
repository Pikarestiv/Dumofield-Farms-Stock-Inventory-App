<?php

use Illuminate\Foundation\Inspiring;
use Symfony\Component\Process\Process;
use Faker\Factory as Faker;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('cbapps:seedme',function() {

	$composer_path = '';
	if (file_exists(getcwd().'/composer.phar')) {
            $composer_path = '"'.PHP_BINARY.'" '.getcwd().'/composer.phar';
    }else{
    	$composer_path = 'composer';
    }        


	$this->info('CRUDBOOSTER SEED-ME TOOL');	

	$tables = CRUDBooster::listTables();
	$php_string = "";

	foreach($tables as $table) {
		if($table->TABLE_NAME == 'cms_logs' || $table->TABLE_NAME == 'migrations') continue;

		$this->info("Create seeder for table : ".$table->TABLE_NAME);
		$rows = DB::table($table->TABLE_NAME)->get();
		$data = [];
		foreach($rows as $i=>$row) {
			$data[$i] = [];
			foreach($row as $key=>$val) {
				$data[$i][$key] = $val;
			}
		}	
		if(count($data)!=0) {			
			$php_string .= 'DB::table(\''.$table->TABLE_NAME.'\')->insert('.min_var_export($data).');'."\n\t\t\t";
		}	
	}


	$seederFileTemplate = '
<?php
use Illuminate\Database\Seeder;
class DefaultSeeder extends Seeder
{
    public function run()
    {
        $this->command->info(\'Please wait updating the data...\');                
        $this->call(\'DefaultData\');        
        $this->command->info(\'Updating the data completed !\');
    }
}

class DefaultData extends Seeder {
    public function run() {        
    	'.$php_string.'
    }
}
	';

	$this->info('Create seeder file');
	file_put_contents(base_path('database/seeds/DefaultSeeder.php'), $seederFileTemplate);

	$this->info('Dumping auto loads new file seeder !');

	$process = new Process($composer_path.' dump-autoload');
    $process->setWorkingDirectory(base_path())->run();

	$this->info('Done');

})->describe('Install SSM');

Artisan::command('cbapps:install',function() {
	$this->info("CB APPS INSTALLATION");

	Schema::disableForeignKeyConstraints();

	foreach(DB::select('SHOW TABLES') as $table) {
	    $table_array = get_object_vars($table);
	    Schema::drop($table_array[key($table_array)]);
	}	

	$this->info('Migrating the tables...');	
	$this->call("migrate");
	
	$this->info('Seeding the data...');
	$this->call("db:seed",["--class"=>"DefaultData"]);

	Schema::enableForeignKeyConstraints();

	$this->info('Cache the config files...');
	$this->call('config:cache');

	Cache::forever('is_installed',1);
	$this->info("DONE");
});

Artisan::command('cbapps:fakeme',function() {
	$faker = Faker::create();

	Schema::disableForeignKeyConstraints();

	//Faker Brands
	$this->info('Faker brands...');
	DB::table('brands')->delete();
	for($i=1;$i<=50;$i++) {
		DB::table('brands')->insert([
			'created_at'=>now(),
			'name'=>$faker->word
			]);
	}

	//Faker Categories
	$this->info('Faker categories...');
	DB::table('categories')->delete();
	for($i=1;$i<=50;$i++) {
		DB::table('categories')->insert([
			'created_at'=>now(),
			'name'=>$faker->word
			]);	
	}

	//Faker Suppliers
	$this->info('Faker suppliers...');
	DB::table('suppliers')->delete();
	for($i=1;$i<=50;$i++) {
		DB::table('suppliers')->insert([
			'created_at'=>now(),
			'name'=>$faker->company,
			'address'=>$faker->address,
			'phone'=>$faker->e164PhoneNumber,
			'phone_other'=>$faker->e164PhoneNumber,
			]);	
	}

	//Faker Customers
	$this->info('Faker customers...');
	DB::table('customers')->delete();
	for($i=1;$i<=50;$i++) {
		DB::table('customers')->insert([
			'created_at'=>now(),
			'name'=>$faker->name,
			'address'=>$faker->address,
			'phone'=>$faker->e164PhoneNumber,
			'phone_other'=>$faker->e164PhoneNumber,
			]);	
	}

	//Faker Products
	$this->info('Faker products...');
	DB::table('products_stock')->delete();
	DB::table('products')->delete();
	$brands     = DB::table('brands')->pluck('id')->toArray();
	$categories = DB::table('categories')->pluck('id')->toArray();
	$suppliers  = DB::table('suppliers')->pluck('id')->toArray();
	for($i=1;$i<=50;$i++) {
		$categories_id = $faker->randomElement($categories);
		$suppliers_id = $faker->randomElement($suppliers);
		$brands_id = $faker->randomElement($brands);

		$products_id = CRUDBooster::newId('products');
		$stock = $faker->numberBetween(5,100);
		DB::table('products_stock')->insert([
			'created_at'=>now(),
			'products_id'=>$products_id,
			'cms_users_id'=>1,
			'stock_in'=>$stock,
			'description'=>'new stock'
			]);

		DB::table('products')->insert([		
			'id'=>$products_id,	
			'created_at'=>now(),
			'categories_id'=>$categories_id,
			'suppliers_id'=>$suppliers_id,
			'name'=>$faker->words(5,true),
			'description'=>$faker->paragraph,
			'weight'=>$faker->numberBetween(500,2000),
			'buy_price'=>$faker->numberBetween(100000,250000),
			'sell_price'=>$faker->numberBetween(100000,250000),
			'stock'=>$stock,
			'brands_id'=>$brands_id,
			'sku'=>str_random(6)
			]);	
	}


	$this->info("Faker orders");
	DB::table('orders_detail')->delete();
	DB::table('orders')->delete();
	$customers_id = DB::table('customers')->pluck('id')->toArray();
	$products_id = DB::table('products')->pluck('id')->toArray();
	for($i=0;$i<=100;$i++) {
		
		$created_at = $faker->dateTimeBetween('-3 months');
		
		$total = 0;

		$order_id = DB::table('orders')->insertGetId([			
			'created_at'=>$created_at,
			'customers_id'=>$faker->randomElement($customers_id),
			'order_number'=>strtoupper(str_random(5)),
			'total'=>0,
			'tax'=>0,
			'discount'=>0,
			'grand_total'=>0
			]);

		for($e=0;$e<=5;$e++) {			

			$product_id = $faker->randomElement($products_id);
			$product  = CRUDBooster::first('products',['id'=>$product_id]);

			$qty = $faker->numberBetween(1,5);
			$sub_total = $product->sell_price * $qty;
			$total += $sub_total;
			DB::table('orders_detail')->insert([
				'created_at'=>$created_at,
				'orders_id'=>$order_id,
				'products_id'=>$product_id,
				'products_name'=>$product->name,
				'products_price'=>$product->sell_price,
				'quantity'=>$qty,
				'sub_total'=>$sub_total,
				'products_sku'=>$product->sku
				]);
		}

		$tax = $total * 10/100;
		$discount = $total * 2/100;
		$grand_total = $total + $tax - $discount;

		DB::table('orders')->where('id',$order_id)->update([
			'total'=>$total,
			'tax'=>$tax,
			'discount'=>$discount,
			'grand_total'=>$grand_total
			]);
	}

	Schema::enableForeignKeyConstraints();

});
