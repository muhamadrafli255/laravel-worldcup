<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create(
            [
                'id'        =>  1,
                'title'     =>  'Regragui Wants More',
                'slug'      =>  'regragui-wants-more',
                'subject'   =>  'Canada 1 - 2 Morocco',
                'body'      =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at dolor rutrum, viverra tortor a, ornare neque. Pellentesque a nisl feugiat, aliquet velit eget, semper urna. Vivamus id nibh diam. In hac habitasse platea dictumst. Sed quis tincidunt sem. Quisque eget erat vel est bibendum porta. Donec et ligula nec nunc feugiat dapibus et sed odio. Curabitur volutpat ac turpis ut scelerisque. Donec non cursus nulla, vel congue mauris. Aenean at diam at nulla luctus placerat.',
                'image'     =>  'regragui.jpg'
            ]
            );
    }
}
