
<?php
use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Please wait updating the data...');                
        $this->call('DefaultData');        
        $this->command->info('Updating the data completed !');
    }
}

class DefaultData extends Seeder {
    public function run() {        
    	DB::table('brands')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 11:07:26',
    'updated_at' => NULL,
    'deleted_at' => NULL,
    'name' => 'Adidas',
  ),
));
DB::table('categories')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 09:35:44',
    'updated_at' => NULL,
    'name' => 'Bag',
  ),
));
DB::table('cms_apicustom')->insert(array (
));
DB::table('cms_apikey')->insert(array (
));
DB::table('cms_dashboard')->insert(array (
));
DB::table('cms_email_queues')->insert(array (
));
DB::table('cms_email_templates')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Email Template Forgot Password Backend',
    'slug' => 'forgot_password_backend',
    'subject' => NULL,
    'content' => '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>',
    'description' => '[password]',
    'from_name' => 'System',
    'from_email' => 'system@crudbooster.com',
    'cc_email' => NULL,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Email Template Forgot Password Backend',
    'slug' => 'forgot_password_backend',
    'subject' => NULL,
    'content' => '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>',
    'description' => '[password]',
    'from_name' => 'System',
    'from_email' => 'system@crudbooster.com',
    'cc_email' => NULL,
    'created_at' => '2017-03-18 17:10:00',
    'updated_at' => NULL,
  ),
));
DB::table('cms_logs')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:58:47',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@crudbooster.com login with IP Address ::1',
    'id_cms_users' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 09:35:44',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/categories/add-save',
    'description' => 'Add New Data Bag at Categories',
    'id_cms_users' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2017-03-17 09:36:08',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Adidas at Brands',
    'id_cms_users' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2017-03-17 09:37:50',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Tidog at Brands',
    'id_cms_users' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2017-03-17 09:37:55',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Catenzo at Brands',
    'id_cms_users' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2017-03-17 09:38:01',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Inficlo at Brands',
    'id_cms_users' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2017-03-17 09:38:06',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Raindoz at Brands',
    'id_cms_users' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2017-03-17 09:38:14',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Blackkelly at Brands',
    'id_cms_users' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2017-03-17 09:38:18',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Sammons at Brands',
    'id_cms_users' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'created_at' => '2017-03-17 09:38:42',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/customers/add-save',
    'description' => 'Add New Data Ferry at Customers',
    'id_cms_users' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'created_at' => '2017-03-17 09:38:56',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/customers/add-save',
    'description' => 'Add New Data Rizka at Customers',
    'id_cms_users' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'created_at' => '2017-03-17 09:39:27',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/suppliers/add-save',
    'description' => 'Add New Data Bag Supplier at Suppliers',
    'id_cms_users' => 1,
  ),
  12 => 
  array (
    'id' => 13,
    'created_at' => '2017-03-17 09:42:59',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/add-save',
    'description' => 'Add New Data Tas Ransel Laptop ADIDAS ADS-130 RED at Products',
    'id_cms_users' => 1,
  ),
  13 => 
  array (
    'id' => 14,
    'created_at' => '2017-03-17 09:44:36',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/add-save',
    'description' => 'Add New Data Tas Neo Waist Belt Running Hiking Bag Tas Pinggang HP at Products',
    'id_cms_users' => 1,
  ),
  14 => 
  array (
    'id' => 15,
    'created_at' => '2017-03-17 09:45:28',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/add-save',
    'description' => 'Add New Data Adidas Essentials Backpack - Collegiate Burgundy-Collegiate Navy at Products',
    'id_cms_users' => 1,
  ),
  15 => 
  array (
    'id' => 16,
    'created_at' => '2017-03-17 10:18:17',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/action-selected',
    'description' => 'Delete data 3,2,1 at Products',
    'id_cms_users' => 1,
  ),
  16 => 
  array (
    'id' => 17,
    'created_at' => '2017-03-17 11:07:26',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/brands/add-save',
    'description' => 'Add New Data Adidas at Brands',
    'id_cms_users' => 1,
  ),
  17 => 
  array (
    'id' => 18,
    'created_at' => '2017-03-17 13:47:18',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/6',
    'description' => 'Update data Tas Ransel Laptop ADIDAS ADS-130 RED at Products',
    'id_cms_users' => 1,
  ),
  18 => 
  array (
    'id' => 19,
    'created_at' => '2017-03-17 13:47:24',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/5',
    'description' => 'Update data Tas Neo Waist Belt Running Hiking Bag Tas Pinggang HP at Products',
    'id_cms_users' => 1,
  ),
  19 => 
  array (
    'id' => 20,
    'created_at' => '2017-03-17 13:47:31',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/4',
    'description' => 'Update data Adidas Essentials Backpack - Collegiate Burgundy-Collegiate Navy at Products',
    'id_cms_users' => 1,
  ),
  20 => 
  array (
    'id' => 21,
    'created_at' => '2017-03-17 13:51:00',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/6',
    'description' => 'Update data Tas Ransel Laptop ADIDAS ADS-130 RED at Products',
    'id_cms_users' => 1,
  ),
  21 => 
  array (
    'id' => 22,
    'created_at' => '2017-03-17 13:51:08',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/5',
    'description' => 'Update data Tas Neo Waist Belt Running Hiking Bag Tas Pinggang HP at Products',
    'id_cms_users' => 1,
  ),
  22 => 
  array (
    'id' => 23,
    'created_at' => '2017-03-17 13:51:14',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products/edit-save/4',
    'description' => 'Update data Adidas Essentials Backpack - Collegiate Burgundy-Collegiate Navy at Products',
    'id_cms_users' => 1,
  ),
  23 => 
  array (
    'id' => 24,
    'created_at' => '2017-03-17 14:09:33',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products_stock/add-save',
    'description' => 'Add New Data 1 at Products Stock',
    'id_cms_users' => 1,
  ),
  24 => 
  array (
    'id' => 25,
    'created_at' => '2017-03-17 14:14:53',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/products_stock/add-save',
    'description' => 'Add New Data 2 at Products Stock',
    'id_cms_users' => 1,
  ),
  25 => 
  array (
    'id' => 26,
    'created_at' => '2017-03-17 14:24:22',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Orders at Menu Management',
    'id_cms_users' => 1,
  ),
  26 => 
  array (
    'id' => 27,
    'created_at' => '2017-03-17 14:24:49',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data History Orders at Menu Management',
    'id_cms_users' => 1,
  ),
  27 => 
  array (
    'id' => 28,
    'created_at' => '2017-03-17 14:25:55',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Add New Order at Menu Management',
    'id_cms_users' => 1,
  ),
  28 => 
  array (
    'id' => 29,
    'created_at' => '2017-03-17 14:27:34',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/edit-save/8',
    'description' => 'Update data Add New Order at Menu Management',
    'id_cms_users' => 1,
  ),
  29 => 
  array (
    'id' => 30,
    'created_at' => '2017-03-17 15:05:48',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/orders/add-save',
    'description' => 'Add New Data 1 at History Orders',
    'id_cms_users' => 1,
  ),
  30 => 
  array (
    'id' => 31,
    'created_at' => '2017-03-17 15:12:15',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/delete/15',
    'description' => 'Delete data Brands at Menu Management',
    'id_cms_users' => 1,
  ),
  31 => 
  array (
    'id' => 32,
    'created_at' => '2017-03-17 15:16:18',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Orders at Menu Management',
    'id_cms_users' => 1,
  ),
  32 => 
  array (
    'id' => 33,
    'created_at' => '2017-03-17 15:16:53',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Add New Order at Menu Management',
    'id_cms_users' => 1,
  ),
  33 => 
  array (
    'id' => 34,
    'created_at' => '2017-03-17 15:17:29',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/delete/28',
    'description' => 'Delete data Users at Menu Management',
    'id_cms_users' => 1,
  ),
  34 => 
  array (
    'id' => 35,
    'created_at' => '2017-03-17 15:18:45',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/users/add-save',
    'description' => 'Add New Data Admin at Users',
    'id_cms_users' => 1,
  ),
  35 => 
  array (
    'id' => 36,
    'created_at' => '2017-03-17 15:18:59',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/users/edit-save/1',
    'description' => 'Update data Super Admin at Users',
    'id_cms_users' => 1,
  ),
  36 => 
  array (
    'id' => 37,
    'created_at' => '2017-03-17 15:19:08',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/logout',
    'description' => 'admin@crudbooster.com logout',
    'id_cms_users' => 1,
  ),
  37 => 
  array (
    'id' => 38,
    'created_at' => '2017-03-17 15:19:16',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@simplestockmanager.com login with IP Address ::1',
    'id_cms_users' => 2,
  ),
  38 => 
  array (
    'id' => 39,
    'created_at' => '2017-03-17 15:21:56',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/logout',
    'description' => 'admin@simplestockmanager.com logout',
    'id_cms_users' => 2,
  ),
  39 => 
  array (
    'id' => 40,
    'created_at' => '2017-03-17 15:22:07',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@crudbooster.com login with IP Address ::1',
    'id_cms_users' => 1,
  ),
  40 => 
  array (
    'id' => 41,
    'created_at' => '2017-03-17 15:23:45',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/statistic_builder/add-save',
    'description' => 'Add New Data Dashboard at Statistic Builder',
    'id_cms_users' => 1,
  ),
  41 => 
  array (
    'id' => 42,
    'created_at' => '2017-03-17 15:34:40',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Dashboard at Menu Management',
    'id_cms_users' => 1,
  ),
  42 => 
  array (
    'id' => 43,
    'created_at' => '2017-03-17 15:34:50',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/edit-save/31',
    'description' => 'Update data Dashboard at Menu Management',
    'id_cms_users' => 1,
  ),
  43 => 
  array (
    'id' => 44,
    'created_at' => '2017-03-17 15:35:09',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/menu_management/add-save',
    'description' => 'Add New Data Dashboard at Menu Management',
    'id_cms_users' => 1,
  ),
  44 => 
  array (
    'id' => 45,
    'created_at' => '2017-03-17 16:11:36',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/logout',
    'description' => 'admin@crudbooster.com logout',
    'id_cms_users' => 1,
  ),
  45 => 
  array (
    'id' => 46,
    'created_at' => '2017-03-18 07:09:46',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@crudbooster.com login with IP Address ::1',
    'id_cms_users' => 1,
  ),
  46 => 
  array (
    'id' => 47,
    'created_at' => '2017-03-18 07:13:50',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/logout',
    'description' => 'admin@crudbooster.com logout',
    'id_cms_users' => 1,
  ),
  47 => 
  array (
    'id' => 48,
    'created_at' => '2017-03-18 07:13:53',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@crudbooster.com login with IP Address ::1',
    'id_cms_users' => 1,
  ),
  48 => 
  array (
    'id' => 49,
    'created_at' => '2017-03-18 15:29:18',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/login',
    'description' => 'admin@crudbooster.com login with IP Address ::1',
    'id_cms_users' => 1,
  ),
  49 => 
  array (
    'id' => 50,
    'created_at' => '2017-03-18 15:46:01',
    'updated_at' => NULL,
    'ipaddress' => '::1',
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'url' => 'http://localhost/crudbooster/simple_stock_manager/public/admin/logout',
    'description' => 'admin@crudbooster.com logout',
    'id_cms_users' => 1,
  ),
));
DB::table('cms_menus')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Categories',
    'type' => 'Route',
    'path' => 'AdminCategoriesControllerGetIndex',
    'color' => NULL,
    'icon' => 'fa fa-tags',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 2,
    'created_at' => '2017-03-17 08:37:11',
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Brands',
    'type' => 'Route',
    'path' => 'AdminBrandsControllerGetIndex',
    'color' => NULL,
    'icon' => 'fa fa-bars',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 3,
    'created_at' => '2017-03-17 09:26:56',
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Customers',
    'type' => 'Route',
    'path' => 'AdminCustomersControllerGetIndex',
    'color' => NULL,
    'icon' => 'fa fa-users',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 4,
    'created_at' => '2017-03-17 09:27:47',
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Suppliers',
    'type' => 'Route',
    'path' => 'AdminSuppliersControllerGetIndex',
    'color' => NULL,
    'icon' => 'fa fa-users',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 5,
    'created_at' => '2017-03-17 09:29:31',
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Products',
    'type' => 'Route',
    'path' => 'AdminProductsControllerGetIndex',
    'color' => NULL,
    'icon' => 'fa fa-cubes',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 6,
    'created_at' => '2017-03-17 09:32:22',
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'Orders',
    'type' => 'URL',
    'path' => '#',
    'color' => 'normal',
    'icon' => 'fa fa-shopping-bag',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 1,
    'created_at' => '2017-03-17 14:24:22',
    'updated_at' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'name' => 'History Orders',
    'type' => 'Module',
    'path' => 'orders',
    'color' => 'normal',
    'icon' => 'fa fa-shopping-bag',
    'parent_id' => 6,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 2,
    'created_at' => '2017-03-17 14:24:49',
    'updated_at' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'name' => 'Add New Order',
    'type' => 'Route',
    'path' => 'AdminOrdersControllerGetAdd',
    'color' => 'normal',
    'icon' => 'fa fa-users',
    'parent_id' => 6,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 1,
    'sorting' => 1,
    'created_at' => '2017-03-17 14:25:55',
    'updated_at' => '2017-03-17 14:27:34',
  ),
  8 => 
  array (
    'id' => 22,
    'name' => 'Brands',
    'type' => 'Route',
    'path' => 'AdminBrandsControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-bars',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 4,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  9 => 
  array (
    'id' => 23,
    'name' => 'Categories',
    'type' => 'Route',
    'path' => 'AdminCategoriesControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-tags',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 5,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  10 => 
  array (
    'id' => 24,
    'name' => 'Customers',
    'type' => 'Route',
    'path' => 'AdminCustomersControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-users',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 3,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  11 => 
  array (
    'id' => 25,
    'name' => 'History Orders',
    'type' => 'Route',
    'path' => 'AdminOrdersControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-shopping-bag',
    'parent_id' => 29,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 2,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  12 => 
  array (
    'id' => 26,
    'name' => 'Products',
    'type' => 'Route',
    'path' => 'AdminProductsControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-cubes',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 2,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  13 => 
  array (
    'id' => 27,
    'name' => 'Suppliers',
    'type' => 'Route',
    'path' => 'AdminSuppliersControllerGetIndex',
    'color' => 'normal',
    'icon' => 'fa fa-users',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 6,
    'created_at' => '2017-03-17 15:15:39',
    'updated_at' => NULL,
  ),
  14 => 
  array (
    'id' => 29,
    'name' => 'Orders',
    'type' => 'URL',
    'path' => '#',
    'color' => 'normal',
    'icon' => 'fa fa-shopping-bag',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 1,
    'created_at' => '2017-03-17 15:16:18',
    'updated_at' => NULL,
  ),
  15 => 
  array (
    'id' => 30,
    'name' => 'Add New Order',
    'type' => 'Route',
    'path' => 'AdminOrdersControllerGetAdd',
    'color' => 'green',
    'icon' => 'fa fa-plus-circle',
    'parent_id' => 29,
    'is_active' => 1,
    'is_dashboard' => 0,
    'id_cms_privileges' => 2,
    'sorting' => 1,
    'created_at' => '2017-03-17 15:16:53',
    'updated_at' => NULL,
  ),
  16 => 
  array (
    'id' => 31,
    'name' => 'Dashboard',
    'type' => 'Statistic',
    'path' => 'statistic_builder/show/dashboard',
    'color' => 'normal',
    'icon' => 'fa fa-dashboard',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 1,
    'id_cms_privileges' => 1,
    'sorting' => NULL,
    'created_at' => '2017-03-17 15:34:40',
    'updated_at' => '2017-03-17 15:34:50',
  ),
  17 => 
  array (
    'id' => 32,
    'name' => 'Dashboard',
    'type' => 'Statistic',
    'path' => 'statistic_builder/show/dashboard',
    'color' => 'normal',
    'icon' => 'fa fa-dashboard',
    'parent_id' => 0,
    'is_active' => 1,
    'is_dashboard' => 1,
    'id_cms_privileges' => 2,
    'sorting' => NULL,
    'created_at' => '2017-03-17 15:35:09',
    'updated_at' => NULL,
  ),
));
DB::table('cms_moduls')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Notifications',
    'icon' => 'fa fa-cog',
    'path' => 'notifications',
    'table_name' => 'cms_notifications',
    'controller' => 'NotificationsController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Privileges',
    'icon' => 'fa fa-cog',
    'path' => 'privileges',
    'table_name' => 'cms_privileges',
    'controller' => 'PrivilegesController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Privileges Roles',
    'icon' => 'fa fa-cog',
    'path' => 'privileges_roles',
    'table_name' => 'cms_privileges_roles',
    'controller' => 'PrivilegesRolesController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Users',
    'icon' => 'fa fa-users',
    'path' => 'users',
    'table_name' => 'cms_users',
    'controller' => 'AdminCmsUsersController',
    'is_protected' => 0,
    'is_active' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Settings',
    'icon' => 'fa fa-cog',
    'path' => 'settings',
    'table_name' => 'cms_settings',
    'controller' => 'SettingsController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Module Generator',
    'icon' => 'fa fa-database',
    'path' => 'module_generator',
    'table_name' => 'cms_moduls',
    'controller' => 'ModulsController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Menu Management',
    'icon' => 'fa fa-bars',
    'path' => 'menu_management',
    'table_name' => 'cms_menus',
    'controller' => 'MenusController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Email Template',
    'icon' => 'fa fa-envelope-o',
    'path' => 'email_templates',
    'table_name' => 'cms_email_templates',
    'controller' => 'EmailTemplatesController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Statistic Builder',
    'icon' => 'fa fa-dashboard',
    'path' => 'statistic_builder',
    'table_name' => 'cms_statistics',
    'controller' => 'StatisticBuilderController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'API Generator',
    'icon' => 'fa fa-cloud-download',
    'path' => 'api_generator',
    'table_name' => '',
    'controller' => 'ApiCustomController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Logs',
    'icon' => 'fa fa-flag-o',
    'path' => 'logs',
    'table_name' => 'cms_logs',
    'controller' => 'LogsController',
    'is_protected' => 1,
    'is_active' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'created_at' => '2017-03-17 08:37:11',
    'updated_at' => NULL,
    'name' => 'Categories',
    'icon' => 'fa fa-tags',
    'path' => 'categories',
    'table_name' => 'categories',
    'controller' => 'AdminCategoriesController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  12 => 
  array (
    'id' => 13,
    'created_at' => '2017-03-17 09:26:56',
    'updated_at' => NULL,
    'name' => 'Brands',
    'icon' => 'fa fa-bars',
    'path' => 'brands',
    'table_name' => 'brands',
    'controller' => 'AdminBrandsController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  13 => 
  array (
    'id' => 14,
    'created_at' => '2017-03-17 09:27:47',
    'updated_at' => NULL,
    'name' => 'Customers',
    'icon' => 'fa fa-users',
    'path' => 'customers',
    'table_name' => 'customers',
    'controller' => 'AdminCustomersController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  14 => 
  array (
    'id' => 15,
    'created_at' => '2017-03-17 09:29:31',
    'updated_at' => NULL,
    'name' => 'Suppliers',
    'icon' => 'fa fa-users',
    'path' => 'suppliers',
    'table_name' => 'suppliers',
    'controller' => 'AdminSuppliersController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  15 => 
  array (
    'id' => 16,
    'created_at' => '2017-03-17 09:32:21',
    'updated_at' => NULL,
    'name' => 'Products',
    'icon' => 'fa fa-cubes',
    'path' => 'products',
    'table_name' => 'products',
    'controller' => 'AdminProductsController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  16 => 
  array (
    'id' => 17,
    'created_at' => '2017-03-17 13:55:38',
    'updated_at' => NULL,
    'name' => 'Products Stock',
    'icon' => 'fa fa-cube',
    'path' => 'products_stock',
    'table_name' => 'products_stock',
    'controller' => 'AdminProductsStockController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
  17 => 
  array (
    'id' => 18,
    'created_at' => '2017-03-17 14:17:02',
    'updated_at' => NULL,
    'name' => 'History Orders',
    'icon' => 'fa fa-shopping-bag',
    'path' => 'orders',
    'table_name' => 'orders',
    'controller' => 'AdminOrdersController',
    'is_protected' => 0,
    'is_active' => 0,
  ),
));
DB::table('cms_notifications')->insert(array (
));
DB::table('cms_privileges')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'Super Administrator',
    'is_superadmin' => 1,
    'theme_color' => 'skin-red',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
    'name' => 'Admin',
    'is_superadmin' => 0,
    'theme_color' => 'skin-blue',
  ),
));
DB::table('cms_privileges_roles')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 0,
    'is_read' => 0,
    'is_edit' => 0,
    'is_delete' => 0,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 2,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 0,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 3,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 4,
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 5,
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 6,
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 7,
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 8,
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 9,
  ),
  9 => 
  array (
    'id' => 10,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 10,
  ),
  10 => 
  array (
    'id' => 11,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 0,
    'is_read' => 1,
    'is_edit' => 0,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 11,
  ),
  11 => 
  array (
    'id' => 12,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 12,
  ),
  12 => 
  array (
    'id' => 13,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 13,
  ),
  13 => 
  array (
    'id' => 14,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 14,
  ),
  14 => 
  array (
    'id' => 15,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 15,
  ),
  15 => 
  array (
    'id' => 16,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 16,
  ),
  16 => 
  array (
    'id' => 17,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 17,
  ),
  17 => 
  array (
    'id' => 18,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 1,
    'id_cms_moduls' => 18,
  ),
  18 => 
  array (
    'id' => 19,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 13,
  ),
  19 => 
  array (
    'id' => 20,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 12,
  ),
  20 => 
  array (
    'id' => 21,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 14,
  ),
  21 => 
  array (
    'id' => 22,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 18,
  ),
  22 => 
  array (
    'id' => 23,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 16,
  ),
  23 => 
  array (
    'id' => 24,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 0,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 17,
  ),
  24 => 
  array (
    'id' => 25,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 15,
  ),
  25 => 
  array (
    'id' => 26,
    'created_at' => NULL,
    'updated_at' => NULL,
    'is_visible' => 1,
    'is_create' => 1,
    'is_read' => 1,
    'is_edit' => 1,
    'is_delete' => 1,
    'id_cms_privileges' => 2,
    'id_cms_moduls' => 4,
  ),
));
DB::table('cms_settings')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'login_background_color',
    'content' => NULL,
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => 'Input hexacode',
    'group_setting' => 'Login Register Style',
    'label' => 'Login Background Color',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'login_font_color',
    'content' => NULL,
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => 'Input hexacode',
    'group_setting' => 'Login Register Style',
    'label' => 'Login Font Color',
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'login_background_image',
    'content' => NULL,
    'content_input_type' => 'upload_image',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Login Register Style',
    'label' => 'Login Background Image',
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'email_sender',
    'content' => 'support@crudbooster.com',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Email Setting',
    'label' => 'Email Sender',
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'smtp_driver',
    'content' => 'mail',
    'content_input_type' => 'select',
    'dataenum' => 'smtp,mail,sendmail',
    'helper' => NULL,
    'group_setting' => 'Email Setting',
    'label' => 'Mail Driver',
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'smtp_host',
    'content' => '',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Email Setting',
    'label' => 'SMTP Host',
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'smtp_port',
    'content' => '25',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => 'default 25',
    'group_setting' => 'Email Setting',
    'label' => 'SMTP Port',
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'smtp_username',
    'content' => '',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Email Setting',
    'label' => 'SMTP Username',
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'smtp_password',
    'content' => '',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Email Setting',
    'label' => 'SMTP Password',
  ),
  9 => 
  array (
    'id' => 10,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'appname',
    'content' => 'Simple Stock Manager',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'Application Name',
  ),
  10 => 
  array (
    'id' => 11,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'default_paper_size',
    'content' => 'Legal',
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => 'Paper size, ex : A4, Legal, etc',
    'group_setting' => 'Application Setting',
    'label' => 'Default Paper Print Size',
  ),
  11 => 
  array (
    'id' => 12,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'logo',
    'content' => NULL,
    'content_input_type' => 'upload_image',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'Logo',
  ),
  12 => 
  array (
    'id' => 13,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'favicon',
    'content' => NULL,
    'content_input_type' => 'upload_image',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'Favicon',
  ),
  13 => 
  array (
    'id' => 14,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'api_debug_mode',
    'content' => 'true',
    'content_input_type' => 'select',
    'dataenum' => 'true,false',
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'API Debug Mode',
  ),
  14 => 
  array (
    'id' => 15,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'google_api_key',
    'content' => NULL,
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'Google API Key',
  ),
  15 => 
  array (
    'id' => 16,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => NULL,
    'name' => 'google_fcm_key',
    'content' => NULL,
    'content_input_type' => 'text',
    'dataenum' => NULL,
    'helper' => NULL,
    'group_setting' => 'Application Setting',
    'label' => 'Google FCM Key',
  ),
));
DB::table('cms_statistic_components')->insert(array (
  0 => 
  array (
    'id' => 1,
    'id_cms_statistics' => 1,
    'componentID' => '17620f3b0259d8bb0527a828a46ce27b',
    'component_name' => 'smallbox',
    'area_name' => 'area1',
    'sorting' => 0,
    'name' => NULL,
    'config' => '{"name":"Total Orders","icon":"ion-bag","color":"bg-green","link":"#","sql":"select count(id) from `orders` where deleted_at is null"}',
    'created_at' => '2017-03-17 15:23:55',
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'id_cms_statistics' => 1,
    'componentID' => 'dc9bf1879b58e69402c7c906ba4414b1',
    'component_name' => 'smallbox',
    'area_name' => 'area2',
    'sorting' => 0,
    'name' => NULL,
    'config' => '{"name":"Total Orders Amount","icon":"ion-cash","color":"bg-green","link":"#","sql":"select IFNULL(sum(grand_total),0) from `orders` where deleted_at is null"}',
    'created_at' => '2017-03-17 15:25:54',
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'id_cms_statistics' => 1,
    'componentID' => 'ef86ce0883e86bdec1f49ead38443305',
    'component_name' => 'smallbox',
    'area_name' => 'area3',
    'sorting' => 0,
    'name' => NULL,
    'config' => '{"name":"Today Orders Amount","icon":"ion-cash","color":"bg-red","link":"#","sql":"select IFNULL(SUM(grand_total),0) from `orders` where DATE(created_at) = CURDATE()"}',
    'created_at' => '2017-03-17 15:27:39',
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'id_cms_statistics' => 1,
    'componentID' => 'c5f1401d2c5f2528efacf5e2601481af',
    'component_name' => 'smallbox',
    'area_name' => 'area4',
    'sorting' => 0,
    'name' => NULL,
    'config' => '{"name":"Today Total Orders","icon":"ion-bag","color":"bg-red","link":"#","sql":"select count(id) from `orders` where DATE(created_at) = CURDATE()"}',
    'created_at' => '2017-03-17 15:29:07',
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'id_cms_statistics' => 1,
    'componentID' => '6b8643480ea7e4763a8a9279496808a1',
    'component_name' => 'chartline',
    'area_name' => 'area5',
    'sorting' => 0,
    'name' => NULL,
    'config' => '{"name":"Orders Chart This Year","sql":"select date(created_at) as label, count(id) as value from `orders` where year(created_at) = YEAR(CURDATE()) group by label","area_name":"Total Order","goals":null}',
    'created_at' => '2017-03-17 15:30:18',
    'updated_at' => NULL,
  ),
));
DB::table('cms_statistics')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Dashboard',
    'slug' => 'dashboard',
    'created_at' => '2017-03-17 15:23:45',
    'updated_at' => NULL,
  ),
));
DB::table('cms_users')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 05:49:12',
    'updated_at' => '2017-03-17 15:18:59',
    'name' => 'Super Admin',
    'photo' => 'uploads/2017-03/2899def051e29bedebfd29aafa4a2837.png',
    'email' => 'admin@crudbooster.com',
    'password' => '$2y$10$ASFxz27ibHCNz/2UvyHP8.FatCqjCkTwBDtN7ebaZhsuf5iLDsJJW',
    'id_cms_privileges' => 1,
    'status' => 'Active',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 15:18:45',
    'updated_at' => NULL,
    'name' => 'Admin',
    'photo' => 'uploads/2017-03/166cd8e28eabee0fdf94f2918f4809eb.png',
    'email' => 'admin@simplestockmanager.com',
    'password' => '$2y$10$XRMoe3ogR96iZQYLMs33/.WEn3grQGkcZvR05qR38Lsuf0rhqqbG6',
    'id_cms_privileges' => 2,
    'status' => NULL,
  ),
));
DB::table('customers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 09:38:42',
    'updated_at' => NULL,
    'deleted_at' => NULL,
    'name' => 'Ferry',
    'address' => '',
    'phone' => '085729734239',
    'phone_other' => '0',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 09:38:56',
    'updated_at' => NULL,
    'deleted_at' => NULL,
    'name' => 'Rizka',
    'address' => '',
    'phone' => '08564105753',
    'phone_other' => '0',
  ),
));
DB::table('migrations')->insert(array (
  0 => 
  array (
    'id' => 1,
    'migration' => '2016_08_07_145904_add_table_cms_apicustom',
    'batch' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'migration' => '2016_08_07_150834_add_table_cms_dashboard',
    'batch' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'migration' => '2016_08_07_151210_add_table_cms_logs',
    'batch' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'migration' => '2016_08_07_152014_add_table_cms_privileges',
    'batch' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'migration' => '2016_08_07_152214_add_table_cms_privileges_roles',
    'batch' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'migration' => '2016_08_07_152320_add_table_cms_settings',
    'batch' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'migration' => '2016_08_07_152421_add_table_cms_users',
    'batch' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'migration' => '2016_08_07_154624_add_table_cms_moduls',
    'batch' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'migration' => '2016_08_17_225409_add_status_cms_users',
    'batch' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'migration' => '2016_08_20_125418_add_table_cms_notifications',
    'batch' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'migration' => '2016_09_04_033706_add_table_cms_email_queues',
    'batch' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'migration' => '2016_09_16_035347_add_group_setting',
    'batch' => 1,
  ),
  12 => 
  array (
    'id' => 13,
    'migration' => '2016_09_16_045425_add_label_setting',
    'batch' => 1,
  ),
  13 => 
  array (
    'id' => 14,
    'migration' => '2016_09_17_104728_create_nullable_cms_apicustom',
    'batch' => 1,
  ),
  14 => 
  array (
    'id' => 15,
    'migration' => '2016_10_01_141740_add_method_type_apicustom',
    'batch' => 1,
  ),
  15 => 
  array (
    'id' => 16,
    'migration' => '2016_10_01_141846_add_parameters_apicustom',
    'batch' => 1,
  ),
  16 => 
  array (
    'id' => 17,
    'migration' => '2016_10_01_141934_add_responses_apicustom',
    'batch' => 1,
  ),
  17 => 
  array (
    'id' => 18,
    'migration' => '2016_10_01_144826_add_table_apikey',
    'batch' => 1,
  ),
  18 => 
  array (
    'id' => 19,
    'migration' => '2016_11_14_141657_create_cms_menus',
    'batch' => 1,
  ),
  19 => 
  array (
    'id' => 20,
    'migration' => '2016_11_15_132350_create_cms_email_templates',
    'batch' => 1,
  ),
  20 => 
  array (
    'id' => 21,
    'migration' => '2016_11_15_190410_create_cms_statistics',
    'batch' => 1,
  ),
  21 => 
  array (
    'id' => 22,
    'migration' => '2016_11_17_102740_create_cms_statistic_components',
    'batch' => 1,
  ),
  22 => 
  array (
    'id' => 23,
    'migration' => '2017_03_17_061205_create_categories',
    'batch' => 2,
  ),
  23 => 
  array (
    'id' => 24,
    'migration' => '2017_03_17_070326_create_products',
    'batch' => 2,
  ),
  24 => 
  array (
    'id' => 25,
    'migration' => '2017_03_17_070433_create_customers',
    'batch' => 2,
  ),
  25 => 
  array (
    'id' => 26,
    'migration' => '2017_03_17_070509_create_suppliers',
    'batch' => 2,
  ),
  26 => 
  array (
    'id' => 30,
    'migration' => '2017_03_17_072724_create_brands',
    'batch' => 3,
  ),
  27 => 
  array (
    'id' => 31,
    'migration' => '2017_03_17_085044_create_orders',
    'batch' => 3,
  ),
  28 => 
  array (
    'id' => 33,
    'migration' => '2017_03_17_085104_create_orders_detail',
    'batch' => 4,
  ),
  29 => 
  array (
    'id' => 34,
    'migration' => '2017_03_17_103826_craete_products_stock',
    'batch' => 5,
  ),
  30 => 
  array (
    'id' => 35,
    'migration' => '2017_03_17_134426_add_brands_id_to_products',
    'batch' => 6,
  ),
  31 => 
  array (
    'id' => 37,
    'migration' => '2017_03_17_134848_add_sku_to_products',
    'batch' => 7,
  ),
  32 => 
  array (
    'id' => 39,
    'migration' => '2017_03_17_145653_add_sku_to_orders_detail',
    'batch' => 8,
  ),
));
DB::table('orders')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 15:05:48',
    'updated_at' => NULL,
    'deleted_at' => NULL,
    'customers_id' => 1,
    'order_number' => '00001',
    'total' => 650000,
    'tax' => 6500,
    'discount' => 5000,
    'grand_total' => 651500,
  ),
));
DB::table('orders_detail')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
    'orders_id' => 1,
    'products_id' => 5,
    'products_name' => NULL,
    'products_price' => 150000,
    'quantity' => 2,
    'sub_total' => 300000,
    'products_sku' => 'H234234',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
    'orders_id' => 1,
    'products_id' => 6,
    'products_name' => NULL,
    'products_price' => 70000,
    'quantity' => 5,
    'sub_total' => 350000,
    'products_sku' => 'A130RED',
  ),
));
DB::table('products')->insert(array (
  0 => 
  array (
    'id' => 4,
    'created_at' => '2017-03-17 10:34:11',
    'updated_at' => '2017-03-17 13:51:14',
    'deleted_at' => NULL,
    'categories_id' => 1,
    'suppliers_id' => 1,
    'name' => 'Adidas Essentials Backpack - Collegiate Burgundy-Collegiate Navy',
    'description' => 'Adidas Essentials Backpack - Collegiate Burgundy-Collegiate Navy',
    'weight' => 0,
    'buy_price' => 409000,
    'sell_price' => 500000,
    'stock' => 0,
    'brands_id' => 1,
    'sku' => 'F324324',
  ),
  1 => 
  array (
    'id' => 5,
    'created_at' => '2017-03-17 10:34:11',
    'updated_at' => '2017-03-17 13:51:08',
    'deleted_at' => NULL,
    'categories_id' => 1,
    'suppliers_id' => 1,
    'name' => 'Tas Neo Waist Belt Running Hiking Bag Tas Pinggang HP',
    'description' => 'Tas Neo Waist Belt Running Hiking Bag Tas Pinggang HP',
    'weight' => 0,
    'buy_price' => 127500,
    'sell_price' => 150000,
    'stock' => 100,
    'brands_id' => 1,
    'sku' => 'H234234',
  ),
  2 => 
  array (
    'id' => 6,
    'created_at' => '2017-03-17 10:34:11',
    'updated_at' => '2017-03-17 13:51:00',
    'deleted_at' => NULL,
    'categories_id' => 1,
    'suppliers_id' => 1,
    'name' => 'Tas Ransel Laptop ADIDAS ADS-130 RED',
    'description' => 'Tas Ransel Laptop ADIDAS ADS-130 RED',
    'weight' => 0,
    'buy_price' => 60000,
    'sell_price' => 70000,
    'stock' => 20,
    'brands_id' => 1,
    'sku' => 'A130RED',
  ),
));
DB::table('products_stock')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 14:09:33',
    'updated_at' => NULL,
    'products_id' => 6,
    'cms_users_id' => 1,
    'stock_in' => 20,
    'stock_out' => 0,
    'description' => 'new stock',
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2017-03-17 14:14:53',
    'updated_at' => NULL,
    'products_id' => 5,
    'cms_users_id' => 1,
    'stock_in' => 100,
    'stock_out' => 0,
    'description' => 'add stock',
  ),
));
DB::table('suppliers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2017-03-17 09:39:27',
    'updated_at' => NULL,
    'deleted_at' => NULL,
    'name' => 'Bag Supplier',
    'address' => '',
    'phone' => '890890890',
    'phone_other' => '889089',
  ),
));

    }
}
	