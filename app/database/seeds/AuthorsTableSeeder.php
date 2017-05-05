<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder {

	public function run()
	{

		//kosongkan database
		DB::table('authors')->delete();
		//buat array untuk diinput
		$authors=[
		['id'=>1,'name'=>'rtfmpliz','created_at'=>'2014-05-05 11:11:11','updated_at'=>'2014-05-05 11:11:11'],
		['id'=>2,'name'=>'rtfmpliz','created_at'=>'2014-05-05 11:11:11','updated_at'=>'2014-05-05 11:11:11'],
		['id'=>3,'name'=>'rtfmpliz','created_at'=>'2014-05-05 11:11:11','updated_at'=>'2014-05-05 11:11:11'],
		['id'=>4,'name'=>'rtfmpliz','created_at'=>'2014-05-05 11:11:11','updated_at'=>'2014-05-05 11:11:11'],];
		//insert data ke database
		DB::table('authors')->insert($authors);

		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Author::create([

		// 	]);
		// }
	}

}