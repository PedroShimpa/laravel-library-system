<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' =>'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$i2pxdVrDSboLhSK2mKr5e.GDtlO/ARB6To16IkcEyOqtd74QNAnIy'
        ];
      User::create($data);
    }
}
