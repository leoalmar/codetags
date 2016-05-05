<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodetagsTagsTable
{

    public function up()
    {
        Schema::create('codetags_tags',function(Blueprint $table){

            $table->increments('id');

            $table->string('name');

            $table->integer('taggable_id')->unsigned()->index();
            $table->string('taggable_type')->index();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('codetags_tags');
    }

}