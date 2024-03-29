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
        Schema::create('companyes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->string('username')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('cname');
            $table->string('city');
            $table->string('designation');
            $table->string('department');
            $table->string('adminemail');
            $table->string('reportingaddress');
            $table->string('vehicalcategory');
            $table->string('journeytype');
            $table->string('state');
            $table->date('reportingdate');
            $table->string('reportingtime');
            // $table->enum('status',['pending','active'])->default('pending');
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companyes');
    }
};
