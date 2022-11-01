<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Alvyn Papalia',
        //     'email' => 'alvynp07@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'alvynpapalia61@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'My Story',
            'slug' => 'my-story',
        ]);
        Category::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial',
        ]);

        Blog::factory(25)->create();

        // Blog::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati corrupti dignissimos libero, similique laborum doloremque vitae, accusantium eius. Reiciendis neque quae sequi provident! Corporis amet sequi, doloribus beatae consequatur reiciendis, quaerat possimus quo eius molestias architecto iure quas suscipit quos dicta. Quasi, dolorum, quos exercitationem beatae inventore qui magni repudiandae error corrupti iste praesentium sapiente sint dignissimos. Eveniet explicabo unde odit officia a, officiis hic cumque sed doloremque! Repudiandae explicabo voluptate earum, laboriosam illo dolore error molestiae quam ullam numquam at provident, accusamus similique sapiente. Vitae?
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Blog::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati corrupti dignissimos libero, similique laborum doloremque vitae, accusantium eius. Reiciendis neque quae sequi provident! Corporis amet sequi, doloribus beatae consequatur reiciendis, quaerat possimus quo eius molestias architecto iure quas suscipit quos dicta. Quasi, dolorum, quos exercitationem beatae inventore qui magni repudiandae error corrupti iste praesentium sapiente sint dignissimos. Eveniet explicabo unde odit officia a, officiis hic cumque sed doloremque! Repudiandae explicabo voluptate earum, laboriosam illo dolore error molestiae quam ullam numquam at provident, accusamus similique sapiente. Vitae?
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Blog::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati corrupti dignissimos libero, similique laborum doloremque vitae, accusantium eius. Reiciendis neque quae sequi provident! Corporis amet sequi, doloribus beatae consequatur reiciendis, quaerat possimus quo eius molestias architecto iure quas suscipit quos dicta. Quasi, dolorum, quos exercitationem beatae inventore qui magni repudiandae error corrupti iste praesentium sapiente sint dignissimos. Eveniet explicabo unde odit officia a, officiis hic cumque sed doloremque! Repudiandae explicabo voluptate earum, laboriosam illo dolore error molestiae quam ullam numquam at provident, accusamus similique sapiente. Vitae?
        //     ',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Blog::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim quo, error minus veniam rem libero culpa. Eveniet doloribus laboriosam nobis at. Obcaecati itaque assumenda id vero voluptas cum porro? Alias nisi laudantium ad accusamus deserunt temporibus ut corrupti harum hic, eaque nemo cumque? Dolores, voluptatum ab. In, itaque, a nemo voluptatem debitis hic alias dolor earum recusandae quae veniam, iste ipsum pariatur dolorem nam rem labore eos rerum asperiores? Minima illo doloribus obcaecati corrupti dignissimos libero, similique laborum doloremque vitae, accusantium eius. Reiciendis neque quae sequi provident! Corporis amet sequi, doloribus beatae consequatur reiciendis, quaerat possimus quo eius molestias architecto iure quas suscipit quos dicta. Quasi, dolorum, quos exercitationem beatae inventore qui magni repudiandae error corrupti iste praesentium sapiente sint dignissimos. Eveniet explicabo unde odit officia a, officiis hic cumque sed doloremque! Repudiandae explicabo voluptate earum, laboriosam illo dolore error molestiae quam ullam numquam at provident, accusamus similique sapiente. Vitae?
        //     ',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
