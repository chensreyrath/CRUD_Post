<?php

namespace Database\Seeders;
use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Posts::truncate(); 
           $posts = [ 
            [ 
                'author' => 'rath',
                'image' => 'pic1.jpg',
                'title' => 'My Title 1',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'rath',
                'image' => 'pic2.jpg',
                'title' => 'My Title 2',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'srey rath',
                'image' => 'pic3.jpg',
                'title' => 'My Title 3',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'srey rath',
                'image' => 'pic4.jpg',
                'title' => 'My Title 4',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will,The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. the experience most certainly changes your perspective.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'Admin',
                'image' => 'pic5.jpg',
                'title' => 'My Title 5',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will,The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us. the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.'
            ],
            [ 
                'author' => 'Admin',
                'image' => 'pic6.jpg',
                'title' => 'My Title 6',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'rath',
                'image' => 'pic7.jpg',
                'title' => 'My Title 7',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'rath',
                'image' => 'pic8.jpg',
                'title' => 'My Title 8',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            [ 
                'author' => 'srey rath',
                'image' => 'pic9.jpg',
                'title' => 'My Title 9',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.'
            ],
            [ 
                'author' => 'srey rath',
                'image' => 'pic10.jpg',
                'title' => 'My Title 10',
                'content1' => 'Science cuts two ways, of course; its products can be used for both good and evil.',
                'content2' => 'The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten. For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.'
            ],
            
          ];

          foreach($posts as $post)
          {
            Posts::create([
               'author' => $post['author'],
               'image' => $post['image'],
               'title' => $post['title'],
               'content1' => $post['content1'],
               'content2' => $post['content2']
             ]);
           }

    }
}
