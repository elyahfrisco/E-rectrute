<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::insert([
            
                'id' => 1,
                'mission' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis deserunt! Iste, Accusamus ratione cupiditate veritatis deserunt! Iste,',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis deserunt! Accusamus ratione cupiditate veritatis deserunt! Iste,',
                'consulting' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis Accusamus ratione cupiditate veritatis deserunt! Iste,',
                'support' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis des Accusamus ratione cupiditate veritatis deserunt!,fri',
            
            
        ]);
    }
}
