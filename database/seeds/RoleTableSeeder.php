<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = [

              [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Manajemen Data Master'
              ],

              [
                'name' => 'pamong',
                'display_name' => 'Satuan Pengasuhan',
                'description' => 'Mengakses Dashboard Pengasuhan'
              ],

              [
                'name' => 'mahasiswa',
                'display_name' => 'Mahasiswa',
                'description' => 'Mengakses Dashboard Mahasiswa'
              ]
            ];


            foreach ($role as $key => $value) {
              Role::create($value);
            }
    }
}
