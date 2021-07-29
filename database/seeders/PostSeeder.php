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
            'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?',
            'body'          => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?",
            'status'        => 1,
        ]);
        $p1->tags()->attach([1,2]);


        $p2 = Post::create([
            'user_id'       => 1,
            'category_id'   => 1,
            'title'         => 'Titulo del post 2',
            'slug'          => 'titulo-del-post-2',
            'subtitle'      => 'Sub titulo del post 2',
            'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?',
            'body'          => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam cum ab eligendi commodi magni, fuga non architecto! Harum eligendi officia esse praesentium reprehenderit ipsa corporis, repellendus sapiente veritatis distinctio?",
            'status'        => 1,
        ]); 
        $p2->tags()->attach([1,2,3]);
        $p3 = Post::create([
            'user_id'       => 1,
            'category_id'   => 1,
            'title'         => 'Titulo del post 3',
            'slug'          => 'titulo-del-post-3',
            'subtitle'      => 'Sub titulo del post 3',
            'extract'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, quia, voluptas quis corporis laborum minima molestias, inventore voluptate quo voluptatibus expedita exercitationem nostrum quae? Voluptatibus enim nesciunt deleniti velit minus?',
            'body'          => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, quia, voluptas quis corporis laborum minima molestias, inventore voluptate quo voluptatibus expedita exercitationem nostrum quae? Voluptatibus enim nesciunt deleniti velit minus?
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, quia, voluptas quis corporis laborum minima molestias, inventore voluptate quo voluptatibus expedita exercitationem nostrum quae? Voluptatibus enim nesciunt deleniti velit minus?",
            'status'        => 1,
        ]); 
        $p3->tags()->attach([2,3]); 
    }
}
