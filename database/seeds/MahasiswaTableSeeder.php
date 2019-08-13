<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('id_ID');

        foreach (range(1, 50) as $loop) {
            DB::table('students')->insert([
                'id'      => $faker->randomDigitNotNull ,
                'nama'       => $faker->name,
                'nrp'       => $faker->randomNumber(9) ,
                'email' => Str::random(10).'@gmail.com',
                'jurusan'    => str_slug($faker->text),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
