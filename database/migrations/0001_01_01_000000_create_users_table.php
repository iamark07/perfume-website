<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('sl_no');  // Auto increment primary key
            $table->string('user_id')->unique();  // Unique user_id
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->enum('role', ['user', 'admin', 'super_admin']);  // Example roles
            $table->timestamp('email_verified_at')->nullable();  // For email verification
            $table->rememberToken();  // For 'remember me' functionality
            $table->timestamps();  // created_at, updated_at
            $table->string('forgot_password_token')->nullable();  // For forgot password functionality
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
