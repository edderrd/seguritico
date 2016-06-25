<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->required();
            $table->float('price')->default(0);
            $table->text('description')->nullable();
            $table->integer('insurer_id')->unsigned()->index();
            $table->foreign('insurer_id')->references('id')->on('insurers')->onDelete('cascade');
            $table->integer('policy_type_id')->unsigned()->index();
            $table->foreign('policy_type_id')->references('id')->on('policy_types')->onDelete('cascade');
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
        Schema::drop('policies');
    }
}
