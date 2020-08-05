<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrationMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('registration_member')) {
            Schema::create('registration_member', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('parent_id');
                $table->string('name')->nullable();
                $table->string('age',10)->nullable();
                $table->string('gender',20)->nullable();
                $table->tinyInteger('status')->default(1);
                $table->dateTime('created_at')->useCurrent();
                $table->dateTime('updated_at')->useCurrent();
                $table->integer('created_by');
                $table->integer('updated_by');

            });
        }  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
