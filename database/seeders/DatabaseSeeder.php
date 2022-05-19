<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CommentaryPost;
use App\Models\ParticipationPost;
use App\Models\Post;
use App\Models\User;
use Database\Factories\CommentaryPostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*User::truncate();
        Category::truncate();
        Post::truncate();*/

        Post::factory(5)->create();
        CommentaryPost::factory(5)->create();
        ParticipationPost::factory(5)->create();


        /*$user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Excerpt for my personal Post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue augue, hendrerit et neque ut, aliquam convallis nisi. Ut auctor odio quis augue eleifend, et dignissim lectus luctus. Pellentesque tincidunt et mauris ut aliquam. Fusce porta tincidunt neque. Donec nec euismod diam, ac semper ex. Quisque semper eleifend bibendum. Curabitur hendrerit rhoncus suscipit. Phasellus neque sem, tempus non porta ut, dapibus in nulla. Aenean sollicitudin cursus ante, auctor suscipit sapien ullamcorper malesuada. Phasellus luctus dui et nisl auctor, consequat sagittis risus ultrices. Aenean euismod dapibus magna, id dignissim libero condimentum vel. Suspendisse cursus cursus nulla at venenatis. Nunc nec mollis justo, in blandit libero. Curabitur mauris est, suscipit eget sollicitudin id, dapibus sed justo.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Excerpt for my work Post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue augue, hendrerit et neque ut, aliquam convallis nisi. Ut auctor odio quis augue eleifend, et dignissim lectus luctus. Pellentesque tincidunt et mauris ut aliquam. Fusce porta tincidunt neque. Donec nec euismod diam, ac semper ex. Quisque semper eleifend bibendum. Curabitur hendrerit rhoncus suscipit. Phasellus neque sem, tempus non porta ut, dapibus in nulla. Aenean sollicitudin cursus ante, auctor suscipit sapien ullamcorper malesuada. Phasellus luctus dui et nisl auctor, consequat sagittis risus ultrices. Aenean euismod dapibus magna, id dignissim libero condimentum vel. Suspendisse cursus cursus nulla at venenatis. Nunc nec mollis justo, in blandit libero. Curabitur mauris est, suscipit eget sollicitudin id, dapibus sed justo.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My hobbies post',
            'slug' => 'my-hobbies-post',
            'excerpt' => 'Excerpt for my hobbies Post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue augue, hendrerit et neque ut, aliquam convallis nisi. Ut auctor odio quis augue eleifend, et dignissim lectus luctus. Pellentesque tincidunt et mauris ut aliquam. Fusce porta tincidunt neque. Donec nec euismod diam, ac semper ex. Quisque semper eleifend bibendum. Curabitur hendrerit rhoncus suscipit. Phasellus neque sem, tempus non porta ut, dapibus in nulla. Aenean sollicitudin cursus ante, auctor suscipit sapien ullamcorper malesuada. Phasellus luctus dui et nisl auctor, consequat sagittis risus ultrices. Aenean euismod dapibus magna, id dignissim libero condimentum vel. Suspendisse cursus cursus nulla at venenatis. Nunc nec mollis justo, in blandit libero. Curabitur mauris est, suscipit eget sollicitudin id, dapibus sed justo.'
        ]);*/
    }
}
