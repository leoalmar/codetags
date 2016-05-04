<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodetagsTagsTable extends
{

    public function up()
    {
        Schema::create('codetags_tags',function($table){

            $table->increments();
            $table->string('name');
            $table->string('taggable_id');
            $table->string('taggable_type');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('codetags_tags');
    }

}