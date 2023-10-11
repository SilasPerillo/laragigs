<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Title Two',
        //     'tags' => 'Laravel',
        //     'company' => 'Acme Corp',
        //     'location' => ' Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acne.com',
        //     'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. In elementis mé pra quem é amistosis quis leo. Pellentesque nec nulla ligula. Donec gravida turpis a vulputate ultricies. Leite de capivaris, leite de mula manquis sem cabeça.'
        // ]);

        // Listing::create([
        //     'title' => 'Title One',
        //     'tags' => 'Laravel',
        //     'company' => 'Acme Corp',
        //     'location' => ' Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acne.com',
        //     'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. In elementis mé pra quem é amistosis quis leo. Pellentesque nec nulla ligula. Donec gravida turpis a vulputate ultricies. Leite de capivaris, leite de mula manquis sem cabeça.'
        // ]);
    }
}
