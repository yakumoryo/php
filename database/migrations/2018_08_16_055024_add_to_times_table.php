<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('times', function (Blueprint $table) {
            
            $table->string('phptimelesson2')->default(0)->nullable();
            $table->string('phptimelesson3')->default(0)->nullable();
            $table->string('phptimelesson4')->default(0)->nullable();
            $table->string('phptimelesson5')->default(0)->nullable();
            $table->string('phptimelesson6')->default(0)->nullable();
            $table->string('phptimelesson7')->default(0)->nullable();
            $table->string('phptimelesson8')->default(0)->nullable();
            $table->string('phptimelesson9')->default(0)->nullable();
            $table->string('phptimelesson10')->default(0)->nullable();
            $table->string('phptimelesson11')->default(0)->nullable();
            $table->string('phptimelesson12')->default(0)->nullable();
            $table->string('phptimelesson13')->default(0)->nullable();
            $table->string('phptimelesson14')->default(0)->nullable();
            
            $table->string('phpstatuslesson1')->default(0)->nullable()->change();
            
            $table->string('phpstatuslesson0')->default(0)->nullable();
            $table->string('phpstatuslesson2')->default(0)->nullable();
            $table->string('phpstatuslesson3')->default(0)->nullable();
            $table->string('phpstatuslesson4')->default(0)->nullable();
            $table->string('phpstatuslesson5')->default(0)->nullable();
            $table->string('phpstatuslesson6')->default(0)->nullable();
            $table->string('phpstatuslesson7')->default(0)->nullable();
            $table->string('phpstatuslesson8')->default(0)->nullable();
            $table->string('phpstatuslesson9')->default(0)->nullable();
            $table->string('phpstatuslesson10')->default(0)->nullable();
            $table->string('phpstatuslesson11')->default(0)->nullable();
            $table->string('phpstatuslesson12')->default(0)->nullable();
            $table->string('phpstatuslesson13')->default(0)->nullable();
            $table->string('phpstatuslesson14')->default(0)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('times', function (Blueprint $table) {
            //
        });
    }
}
