<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Tag;
use App\Category;
use App\User;



class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('posts');
        Post::truncate();
        Category::truncate();
        Tag::truncate();
        User::truncate();
        DB::table('post_tag')->truncate();

        	$Category1 = Category::create([
            'name' => "Laravel",
            'created_at' => Carbon::now()
            ]);

            $Category2 = Category::create([
            'name' => "Html",
            'created_at' => Carbon::now()
            ]);

            $Tag1 = Tag::create([
            'name' => "php",
            'created_at' => Carbon::now()
            ]);

            $Tag2 = Tag::create([
            'name' => "web",
            'created_at' => Carbon::now()
            ]);

            $Tag3 = Tag::create([
            'name' => "programación",
            'created_at' => Carbon::now()
            ]);





    	for ($i=1; $i <5 ; $i++) { 
    		$post[$i] = Post::create([
    			'title' => "Mi Post numero {$i}",
    			'excerpt' => "Extracto de mi Post numero {$i}",
    			'body' => "Cuerpo de mi Post numero {$i}",
            	'category_id'=> 1,
            	'published_at'=> Carbon::now()->subDays(11)->addDays($i),
            	'created_at'=> Carbon::now()->subDays(11)->addDays($i+1),
                'user_id' => 1
            ]);
            $post[$i]->tags()->save($Tag1);
            $post[$i]->tags()->save($Tag2);
            $post[$i]->tags()->save($Tag3);
    	}

    	for ($i=5; $i <9 ; $i++) { 
    		$post[$i] = Post::create([
    			'title' => "Mi Post numero {$i}",
    			'excerpt' => "Extracto de mi Post numero {$i}",
    			'body' => "Cuerpo de mi Post numero {$i}",
            	'category_id'=> 2,
            	'published_at'=> Carbon::now()->subDays(11)->addDays($i),
            	'created_at'=> Carbon::now()->subDays(11)->addDays($i+1),
                'user_id' => 1
            ]);
         	$post[$i]->tags()->save($Tag2);
    	}

        $u = new App\User;
        $u->name = "Cristian Gonzalez";
        $u->email = "cristiangt9@gmail.com";
        $u->password = bcrypt('123456');
        $u->save(); 
    }
}
