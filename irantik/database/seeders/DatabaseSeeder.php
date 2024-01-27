<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chair;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('00000000')
        ]);

        for ($i=0; $i < 50; $i++) { 
            Chair::create([
                'place' => 'A'
            ]);
        }

        for ($i=0; $i < 50; $i++) { 
            Chair::create([
                'place' => 'B'
            ]);
        }

        for ($i=0; $i < 50; $i++) { 
            Chair::create([
                'place' => 'C'
            ]);
        }
    }
}
