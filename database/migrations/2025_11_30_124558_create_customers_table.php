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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_num', 20)->nullable();
            $table->string('password', 255);
            $table->string('city')->nullable();
            $table->string('street_addr')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('company')->nullable();
            $table->string('profile_imge')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
