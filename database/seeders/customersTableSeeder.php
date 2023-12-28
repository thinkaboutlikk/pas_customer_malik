<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customers::create([
            'kode'=>'1',
            'nama'=>'minuman_ringan',
            'telepon'=>'089516845254',
            'alamat'=>'bogor'
        ]);
    }
}
