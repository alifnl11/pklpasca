<?php

use Illuminate\Database\Seeder;
use App\Proses;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Proses::create([
            'id_proses'           =>       '2019',
            'nrp'                 =>       'G64160001',
            'email'               =>      'hanifahizzaty16@gmail.com',
            'status'              =>       'Pending',
            'estimasi'            =>       '2019-08-08'
            ]);

            
    }
}
