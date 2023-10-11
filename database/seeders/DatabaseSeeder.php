<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',

        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);

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
