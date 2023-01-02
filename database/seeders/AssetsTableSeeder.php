<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hash = Hash::make('um-hash-qualquer');
        DB::table('assets')->insert([
            'code' => 'ABEV3',
            'name' => 'AMBEV S.A.',
            'description' => $hash,
            'created_at' => now()
        ]);
        DB::table('assets')->insert([
            'code' => 'ALUP11',
            'name' => 'ALUPAR INVESTIMENTO S/A.',
            'description' => $hash,
            'created_at' => now()
        ]);
        DB::table('assets')->insert([
            'code' => 'BTLG11',
            'name' => ' BTG PACTUAL LOGISTICA FDO INV IMOB - FII',
            'description' => $hash,
            'created_at' => now()
        ]);
        DB::table('assets')->insert([
            'code' => 'HSLG11',
            'name' => 'HSI LOGÍSTICA FUNDO DE INVESTIMENTO IMOBILIÁRIO - FII',
            'description' => $hash,
            'created_at' => now()
        ]);
    }
}
