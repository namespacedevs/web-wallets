<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passwordHash = Hash::make('um_hash_qualquer');
        DB::table('wallets')->insert([
            'name' => 'Renda Variavel',
            'description' => $passwordHash,
            'user_id' => 1,
            'created_at' => now()
        ]);
        DB::table('wallets')->insert([
            'name' => 'Renda Fixa',
            'description' => $passwordHash,
            'user_id' => 1,
            'created_at' => now()
        ]);
        DB::table('wallets')->insert([
            'name' => 'Renda Passiva',
            'description' => $passwordHash,
            'user_id' => 1,
            'created_at' => now()
        ]);
    }
}
