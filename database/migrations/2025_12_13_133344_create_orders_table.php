<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20)->nullable();
            $table->decimal('amount',15,2);
            $table->text('address');
            $table->string('status')->default('Pending');
            $table->string('currency')->default('BDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
