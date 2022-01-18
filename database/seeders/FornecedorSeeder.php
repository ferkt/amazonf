<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedor')->insert([
            'nome'=>'Fernando Coelho',
            'endereco'=>'Rua B',
            'num'=>180,
            'bairro'=>'Alfabeto',
            'cep'=>'01000-010',
            'contato'=>'contatoferxz@gmail.com',
            'cnpj'=>'010101010101010',
            'insc'=>'101',
            'tel'=>'(88) 9224-6983'
        ]);
    }
}
