<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Team::create([
             'title' => 'team 1',
             'description' => 'lorem ipsum 1',
         ]);
         Team::create([
             'title' => 'team 2',
             'description' => 'lorem ipsum 2',
         ]);
         Team::create([
             'title' => 'team 3',
             'description' => 'lorem ipsum 3',
         ]);
         Team::create([
             'title' => 'team 4',
             'description' => 'lorem ipsum 4',
         ]);
         Team::create([
             'title' => 'team 5',
             'description' => 'lorem ipsum 5',
         ]);
         Team::create([
             'title' => 'team 6',
             'description' => 'lorem ipsum 6',
         ]);
         Team::create([
             'title' => 'team 7',
             'description' => 'lorem ipsum 7',
         ]);
         Team::create([
             'title' => 'team 8',
             'description' => 'lorem ipsum 8',
         ]);
         Team::create([
             'title' => 'team 9',
             'description' => 'lorem ipsum 9',
         ]);
         Team::create([
             'title' => 'team 10',
             'description' => 'lorem ipsum 10',
         ]);
    }
}
