<?php

    use Illuminate\Database\Seeder;

    class ActionsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            $evenValidator = function($digit) {
                return $digit % 5 == 0;
                };
            $faker = Faker\Factory::create();
            for ($i=0; $i < 100 ; $i++) { 
            	# code...
            	DB::table('actions')->insert([
                'name' => $faker->text(20),
                'time' =>  $faker->numberBetween($min = 5, $max = 18),
                'during_time' => $faker->valid($evenValidator)->numberBetween($min = 5, $max = 60),
                'program_id' => $faker->numberBetween($min = 1, $max = 20),
            ]);
            }
        }
    }
?>