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
            'kd_barang'=> $faker->numberBetween(100-120),
            'nm_barang'=> $faker->name,
            'harga' =>$faker->numberBetween(1000,2000),
            'id_kategori' =>$faker->numberBetween(1-2),

        ]);
    }
}
}
