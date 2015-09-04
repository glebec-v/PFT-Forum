<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {

            $table->integer('roles_id')->unsigned()->nullable();
            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');

            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('roles_users', function(Blueprint $table){
            $table->dropForeign('roles_users_roles_id_foreign');
            $table->dropForeign('roles_users_users_id_foreign');
        });
    }
}
