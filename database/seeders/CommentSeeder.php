<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        //get all usersp


        Comment::factory(25)->create();

        Comment::factory(25)->create([
            "commentable_id" => Video::all()->random()->id,
            "commentable_type"=> 'App\Models\Video'
        ]);





    }
}
