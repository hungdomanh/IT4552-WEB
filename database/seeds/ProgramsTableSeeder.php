<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();
        for ($i=0; $i < 20 ; $i++) { 
        	# code...
        	DB::table('programs')->insert([
            'name' => $faker->text(20),
            'level' =>  $faker->numberBetween($min = 0, $max = 3),
            'content' => $faker->text(1000) ,
            'instructor' => $faker->name, 
            'information' => $faker->address,
            'image' => 'http://wikiclipart.com/wp-content/uploads/2016/11/Hello-kitty-clip-art-images-cartoon-4.png',
        ]);
        }
    }
}
?>