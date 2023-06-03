<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
                'id' => 1,
                'name' => 'freelance',
                
            ],
            [
                'id' => 2,
                'name' => 'client',
                
            ],
            [
                'id' => 3,
                'name' => 'admin',
            ],
        
    ]);
    }
}
