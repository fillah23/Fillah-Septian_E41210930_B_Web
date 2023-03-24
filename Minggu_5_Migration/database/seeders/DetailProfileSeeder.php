<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data pegawai
        DB::table('detail_profile')->insert([
            'addres'=> 'jember',
            'nomor_tlp' => '08xxxxx',
            'ttl' => '2002-11-14',
            'foto' => 'picture.png'
        ]);
    }
}
