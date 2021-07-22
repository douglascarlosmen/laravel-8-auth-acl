<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name' => 'cadastrar_produto' // id 1
            ],
            [
                'name' => 'editar_produto' // id 2
            ],
            [
                'name' => 'ver_produto' // id 3
            ],
            [
                'name' => 'excluir_produto' // id 4
            ],
            [
                'name' => 'alterar_estoque' // id 5
            ],
            [
                'name' => 'realizar_venda' // id 6
            ],
        ]);
    }
}
