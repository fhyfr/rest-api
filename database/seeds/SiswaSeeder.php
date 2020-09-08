<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Set country to ID or Indonesia
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            // insert data siswa using faker
            DB::table('siswas')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address
            ]);
        }
    }
}
