<?php

    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
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
            for ($i=0; $i < 10 ; $i++) { 
            	# code...
            	DB::table('users')->insert([
                'fullname' => $faker->name,
                'email' =>  $faker->unique()->email,
                'password' => "123456",
                'username' => $faker->unique()->userName,
                'birthday' => $faker->date,
                'address' => $faker->address,
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 40, $max = 120) ,
                'height' => $faker->numberBetween($min = 100, $max = 230),
                'job' => $faker->text(20),
                'purpose' => $faker->numberBetween($min = 1, $max = 3),
            ]);
            }
        }
    }
?>