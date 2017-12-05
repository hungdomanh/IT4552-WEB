<?php

    use Illuminate\Database\Seeder;

    class MyProgramsTableSeeder extends Seeder
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
            for ($i=0; $i < 50 ; $i++) { 
            	# code...
            	DB::table('my_programs')->insert([
                'program_id' => $faker->numberBetween($min = 1, $max = 20),
                'user_id' =>  $faker->numberBetween($min = 1, $max = 10),
            ]);
            }
        }
    }
?>