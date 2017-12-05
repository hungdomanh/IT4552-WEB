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

            $faker = Faker\Factory::create();
            for ($i=0; $i < 100 ; $i++) { 
            	# code...
            	DB::table('actions')->insert([
                'name' => $faker->text(20),
                'time' =>  $faker->time($format = 'H:i:s', $max = '23:59:59') ,
                'during_time' => $faker->time($format = 'H:i:s', $max = '5:59:59') ,
                'program_id' => $faker->numberBetween($min = 1, $max = 20),
            ]);
            }
        }
    }
?>