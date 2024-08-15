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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('firstname', length: 50);
            $table->string('lastname', length: 50);
            $table->integer('date_of_birth');
            $table->String('nic_number');
            $table->integer('join_date');
            $table->string('gender', length: 10);
            $table->string('district', length: 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
