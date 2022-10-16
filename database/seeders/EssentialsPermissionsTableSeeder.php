<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;;

use Spatie\Permission\Models\Permission;

class EssentialsPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users']);
        Permission::create(['name' => 'clients']);
        Permission::create(['name' => 'books']);
        Permission::create(['name' => 'ticket']);
        Permission::create(['name' => 'attendance']);

        $user = User::where('name', 'admin')->first();
        $user->givePermissionTo(['users', 'clients', 'books','ticket', 'attendance']);
    }
}
