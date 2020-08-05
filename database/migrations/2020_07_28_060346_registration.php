<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::disableForeignKeyConstraints();
        
        if (!Schema::hasTable('registration')) {
            Schema::create('registration', function (Blueprint $table) {
                $table->increments('id');
                $table->string('fullname',100)->nullable();
                $table->string('address');
                $table->string('email',50);
                $table->string('mobile',50);
                $table->date('reg_date');
                $table->string('slot',100);
                $table->string('id_proof_type',50);
                $table->string('id_proof_attach');
                $table->integer('members');
                $table->string('uid',50);
                $table->string('source',50);
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
