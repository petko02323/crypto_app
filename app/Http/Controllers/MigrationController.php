<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationController extends Controller
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        /*Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('filename');
            $table->timestamps();
        });*/

        /*Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();


        });*/

        Schema::create('articles_images', function (Blueprint $table) {
            $table->integer('article_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');

            $table->primary(['article_id','image_id']);
        });

        return redirect('/');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($tablename)
    {
        Schema::dropIfExists($tablename);
    }



}
