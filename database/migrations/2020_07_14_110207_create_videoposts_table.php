<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideopostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
            $table->date('date')->nullable();
            $table->string('author')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status')->default(0);
            $table->integer('views')->default(0);
            $table->integer('is_featured')->default(0);
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
        Schema::dropIfExists('videoposts');
    }
}
