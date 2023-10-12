<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create([
            'firstname'=>'Javakhir',
            'lastname'=>'Mamatkobilov',
            'position'=>'Hodim',
            'city'=>'Tashkent',
            'email'=>'javakhir@mail.ru',
            'address'=>'Surkhandarya',
            'phone'=>+998915754360
        ]);
    }
}
