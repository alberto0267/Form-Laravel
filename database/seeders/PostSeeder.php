<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
$post =  new Post();

$post->title='prueba 1';
$post->content='prueba 1';
$post->categorias='prueba1';

$post->save();

    }
}
