<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('slots')) {
            Schema::create('slots', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',100)->nullable();
                $table->integer('priority');
                $table->string('start_time',50);
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
