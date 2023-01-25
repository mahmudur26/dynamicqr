<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->date('email_verified_at')->nullable();
            $table->string('email_verification_token')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->string('organization')->nullable();
            $table->string('designation')->nullable();
            $table->date('registered_on')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('password_recovery_token')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
