<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->default(0);
            $table->string('product_id')->default(0);
            $table->string('product_img')->default(0);
            $table->string('product_name')->default(0);
            $table->integer('product_price')->default(0);
            $table->string('product_quantity')->default(0);
            $table->integer('product_size')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
