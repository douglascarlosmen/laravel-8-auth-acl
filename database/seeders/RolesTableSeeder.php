<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'Vendedor' // id 1
            ],
            [
                'name' => 'Estoquista' // id 2
            ],
            [
                'name' => 'Gerente' // id 3
            ],
        ]);
    }
}
