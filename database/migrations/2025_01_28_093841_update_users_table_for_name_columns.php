<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTableForNameColumns extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add first_name and last_name columns after user_id
            $table->string('first_name')->after('user_id');
            $table->string('last_name')->after('first_name');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove first_name and last_name columns
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
        });
    }
}
