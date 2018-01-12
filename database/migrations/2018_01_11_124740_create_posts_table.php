<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title', 100);//varchar
                        $table->text('body');//сама статья
                        $table->string('slug', 200);//varchar URL ЧПУ
                        $table->boolean('enabled');// true/false 
                        //- выводить статью да-нет
			$table->timestamps();//создадутся 2 поля: 
                        //1) дата занесения записи 2) дата изменения записи
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
