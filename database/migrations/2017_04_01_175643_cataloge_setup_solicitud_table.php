<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogeSetupSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        // Create table for storing roles
        Schema::create('cataloges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code')->unique();
            $table->string('product_name');
            $table->string('description')->nullable();
            $table->integer('created_by')->unsigned();
             $table->double('monto');
            $table->integer('plazo_to_pay');
            $table->timestamps();
        });

        // Create table for storing permissions
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastnames');
            $table->string('CIN')->unique();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        // Create table for associating catalogue to solicitud (Many-to-Many)
        Schema::create('cataloge_solicitud', function (Blueprint $table) {
            $table->integer('cataloge_id')->unsigned();
            $table->integer('solicitud_id')->unsigned();

            $table->foreign('cataloge_id')->references('id')->on('cataloges')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solicitud_id')->references('id')->on('solicituds')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['cataloge_id', 'solicitud_id']);
        });

       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('cataloge');
        Schema::drop('solicitud');
        Schema::drop('cataloge_solicitud');
        
    }
}

