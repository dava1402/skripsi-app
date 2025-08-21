<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Spatie\Permission\Models\Role;
class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::create([
            'name' => 'admin'
        ]);
            $lenderRole = Role::create([
            'name' => 'lender'
        ]);
            $agentRole = Role::create([
            'name' => 'agent'
        ]);
            $customerRole = Role::create([
            'name' => 'customer'
        ]);
            $user = User::create([
            'name' => 'Dava',
            'email' => 'mahardhikadava12@gmail.com',
            'phone' => '081319858736',
            'photo' => 'dava.png',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($adminRole);
    }
}