<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::insert([
            // Vendedor : ver_produto
            [
                'role_id' => 1,
                'permission_id' => 3
            ],
            // Vendedor : realizar_venda
            [
                'role_id' => 1,
                'permission_id' => 6
            ],
            // Estoquista: cadastrar_produto
            [
                'role_id' => 2,
                'permission_id' => 1
            ],
            // Estoquista: ver_produto
            [
                'role_id' => 2,
                'permission_id' => 3
            ],
            // Estoquista: alterar_estoque
            [
                'role_id' => 2,
                'permission_id' => 5
            ],
            [
                'role_id' => 3,
                'permission_id' => 1
            ],
            [
                'role_id' => 3,
                'permission_id' => 2
            ],
            [
                'role_id' => 3,
                'permission_id' => 3
            ],
            [
                'role_id' => 3,
                'permission_id' => 4
            ],
            [
                'role_id' => 3,
                'permission_id' => 5
            ],
            [
                'role_id' => 3,
                'permission_id' => 6
            ]
        ]);
    }
}
