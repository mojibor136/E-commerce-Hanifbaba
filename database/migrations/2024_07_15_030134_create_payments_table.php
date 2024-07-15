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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('paymentMethod');
            $table->integer('senderNumber');
            $table->decimal('amount', 8, 2);
            $table->string('currency', 3);
            $table->string('transactionId')->unique()->nullable();
            $table->string('paymentStatus');
            $table->timestamp('paymentDate')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
