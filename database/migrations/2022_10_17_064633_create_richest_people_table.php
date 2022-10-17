<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('richest_people', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name');
            $table->string('Networth');
            $table->tinyInteger('MyAge');
            $table->string('Company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('richest_people');
    }
};

