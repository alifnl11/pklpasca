<?php

use Illuminate\Database\Seeder;
use App\LoginAdmin;

class Login_adminsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LoginAdmin::create([
            'id_admin'         =>       'IDPASCA1',
            'jenis_admin'      =>       'Admin Loket',
            'password'         =>       Hash::make('password'),
            'remember_token'   =>       str_random(10),
        ]);
    }
}
