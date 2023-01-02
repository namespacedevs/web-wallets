<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WalletsAssetsPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets_assets')->insert([
            'wallet_id' => 1,
            'asset_id' => 1,
            'created_at' => now()
        ]);
        DB::table('wallets_assets')->insert([
            'wallet_id' => 1,
            'asset_id' => 2,
            'created_at' => now()
        ]);
        DB::table('wallets_assets')->insert([
            'wallet_id' => 1,
            'asset_id' => 3,
            'created_at' => now()
        ]);
        DB::table('wallets_assets')->insert([
            'wallet_id' => 1,
            'asset_id' => 4,
            'created_at' => now()
        ]);
    }
}
