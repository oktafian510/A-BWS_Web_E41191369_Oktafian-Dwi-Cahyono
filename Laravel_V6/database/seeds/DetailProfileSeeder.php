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
            'address' => 'Bondowoso',
            'noHp' => '082xxx',
            'ttl' => '2021-04-08',
            'foto' => 'picture.jpg',
        ]);
               
            
    }
}
