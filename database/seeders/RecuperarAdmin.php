<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RecuperarAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('Recuperando admin...');
        # User
        $this->command->info('Reiniciando pass de Super Admin...');
        $password = Hash::make('123456');

        $cms_users = DB::table('cms_users')->updateOrInsert(
            ['name' => 'Super Admin','email' => 'admin@crudbooster.com'],
            ['password' => $password]
        );


        $this->command->info("Proceso completado users completed pass: ". $password);
        # User End
    }
}
