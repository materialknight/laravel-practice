<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Proyecto;

class DatabaseSeeder extends Seeder
{
   // Seeds the application's database. Returns void.

   public function run()
   {
      // Proyecto::factory(10)->create();
      \App\Models\Proyecto::factory(5)->create();
   }
}
