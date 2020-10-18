<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
        
        DB::table('tb_pelanggan')->insert([
            'idpelanggan'=> $faker->numberBetween(001-100),
            'nama'=> $faker->name,
            'alamat'=>$faker->address

        ]);

    }
}
}
