<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_profile')->insert([
            'id' => '6',
            'address' => 'Bondowoso',
            'noHp' => '082xxxxxxx',
            'ttl' => '2021-04-08',
            'foto' => 'picture.jpg',
            'created_at' => 'tes',
            'updated_at'=> 'ad'
        ]);
               
            
    }
}
