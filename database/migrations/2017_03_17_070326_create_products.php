<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('categories_id')->nullable();
            $table->integer('suppliers_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->double('weight')->default(0);
            $table->double('buy_price');
            $table->double('sell_price');
            $table->integer('stock')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
