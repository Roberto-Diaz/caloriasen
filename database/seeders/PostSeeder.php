<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder; 

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Post::create([
            'user_id'       => 1,
            'category_id'   => 1,
            'title'         => 'Titulo del post',
            'slug'          => 'titulo-del-post',
            'subtitle'      => 'Sub titulo del post',
            'extract'       => 'contenido del extracto',
            'body'          => "contenido del body",
            'status'        => 1,
        ]);
        $p1->tags()->attach([1,2]);


        $p2 = Post::create([
            'user_id'       => 1,
            'category_id'   => 1,
            'title'         => 'Titulo del post 2',
            'slug'          => 'titulo-del-post-2',
            'subtitle'      => 'Sub titulo del post 2',
            'extract'       => 'contenido del extracto 2',
            'body'          => "contenido del body 2",
            'status'        => 1,
        ]); 
        $p2->tags()->attach([1,2,3]);
        $p3 = Post::create([
            'user_id'       => 1,
            'category_id'   => 1,
            'title'         => 'Titulo del post 3',
            'slug'          => 'titulo-del-post-3',
            'subtitle'      => 'Sub titulo del post 3',
            'extract'       => 'contenido del extracto 3',
            'body'          => "contenido del body 3",
            'status'        => 1,
        ]); 
        $p3->tags()->attach([2,3]); 
    }
}
