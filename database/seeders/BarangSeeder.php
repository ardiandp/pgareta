<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++)
        {
        DB::table('tb_barang')->insert([
            'kd_barang'=> $faker->numberBetween($min=100001, $max=190000),
            'nm_barang'=> $faker->name,
            'harga' =>$faker->numberBetween($min=1000,$max=9000),
            'id_kategori' =>$faker->numberBetween($min=1, $max=5),

        ]);
    }
}
}
