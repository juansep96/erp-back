<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    public function run(): void
    {
        Person::factory()->create([
            'name' => 'Juan',
            'lastname' => 'Sepulveda'
        ]);
    }
}
