<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
                'name' => 'Mr Orion',
                'email' => 'orion.collier@example.net',
                'biography' => 'Je suis un bouledogue français de 3 ans et j\'adore ronfler.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Miss Milky',
            'email' => 'milky.lait@example.net',
            'biography' => 'Je suis un chat siamois de 5 ans et j\'adore lire avec un verre de lait devant la cheminée.', 
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Kung Fu Panda',
            'email' => 'panda.superhero@example.net',
            'biography' => 'Je suis un panda assez balaise en arts martiaux : oseras-tu me défier ?', 
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Gaston la Grenouille',
            'email' => 'gaston.grenouille@example.net',
            'biography' => 'Je suis une grenouille sautillante qui adore se prélasser au soleil près de l\'étang.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Tony le Tigre',
            'email' => 'tony.tigre@example.net',
            'biography' => 'Je suis un tigre majestueux qui aime se promener dans la jungle et rugir la nuit.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Penny la Pie',
            'email' => 'penny.pie@example.net',
            'biography' => 'Je suis une pie bavarde qui aime collectionner des objets brillants et chanter à tue-tête.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Harry le Cheval',
            'email' => 'harry.cheval@example.net',
            'biography' => 'Je suis un cheval élégant qui aime galoper à travers les plaines verdoyantes.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Daisy le Dauphin',
            'email' => 'daisy.dauphin@example.net',
            'biography' => 'Je suis un dauphin joyeux qui adore sauter hors de l\'eau et jouer avec mes amis marins.',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Oscar le Poulpe',
            'email' => 'oscar.poulpe@example.net',
            'biography' => 'Je suis un poulpe astucieux avec huit bras agiles, idéal pour résoudre des énigmes sous-marines.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'A la playa',
            'content' => 'un repos bien mérité !',
            'image' => 'images/posts/U0qegB81i3VFFd0lgCNqXYLxl76KVwcijvsULE34.jpg',
            'user_id' => 66,
        ]);
        \App\Models\Post::factory()->create([
            'title' => 'Entre potes',
            'content' => 'Ce soir diner avec les amis',
            'image' => 'images/posts/4AoiWfpSQwDtDY7JwdB0OlZt2f1szwJgG1xiAphN.jpg',
            'user_id' => 66,
        ]);
        \App\Models\Post::factory()->create([
            'title' => 'Belge ?',
            'content' => 'J\'adore les frites :)',
            'image' => 'images/posts/iaYz6FROjm2sDBdup8aPDV7YypyueTEI7A47CwZK.jpg',
            'user_id' => 66,
        ]);
        \App\Models\Post::factory()->create([
            'title' => 'J-21',
            'content' => 'Je compte les jours jusque Noël',
            'image' => 'images/posts/Dsw4jbPDqOHseTGJLBqhxnbyfezrfn6waG3CJtJR.jpg',
            'user_id' => 66,
        ]);
    }
}
