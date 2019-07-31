<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username'         =>       'admin',
            'id_proses'        =>        null,
            'jenis_admin'      =>       'Admin Loket',
            'status_admin'     =>       'online',
            'nama'             =>       'Basyirun',
            'email'            =>       'admin@admin.com',
            'password'         =>       Hash::make('admin'),
            'remember_token'   =>       str_random(10),
        ]);
    }
}
