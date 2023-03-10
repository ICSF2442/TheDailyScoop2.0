<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Article;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $article = Article::create([
            'title' => 'Welcome to ecoal23',
            'content' => '<h1>Hello from ecoal</h1><p>Nice to see you in <strong>Lens</strong>. Enjoy !</p>',
            'thumbnailURL' => '/ecoal.jpg',
            'sumary' => 'ECOAL23',
            'mediaType' => 'image',
            'mediaURL' => '/ecoal.jpg',
            'author' => 'Mister Audemard',
            'leadStory' => false
        ]);
        $article2 = Article::create([
            'title' => 'The Future of Fashion: How Tech is Reshaping the Industry',
            'content' => 'Robots that sew and cut fabric, AI algorithms that predict style trends, clothes to be worn in virtual reality — an array of innovations show how technology is automating, personalizing, and speeding up the fashion space. Now anyone can play the role of Donatella Versace and Virgil Abloh.

Seizing the opportunity to open more revenue streams and business models, fashion companies are partnering with technology providers, snapping up startups, and even building their own tech.

To read more about the different technologies being used click here:
https://www.cbinsights.com/research/report/fashion-tech-future-trends/
',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'Robots that sew and cut fabric, AI algorithms that predict style trends, clothes to be worn in virtual reality – changing the fashion space.',
            'mediaType' => 'image',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);

        $article3 = Article::create([
            'title' => 'Fashion Collabs Embracing Technology in 2023 ',
            'content' => 'Robots that sew and cut fabric, AI algorithms that predict style trends, clothes to be worn in virtual reality — an array of innovations show how technology is automating, personalizing, and speeding up the fashion space. Now anyone can play the role of Donatella Versace and Virgil Abloh.

Seizing the opportunity to open more revenue streams and business models, fashion companies are partnering with technology providers, snapping up startups, and even building their own tech.

To read more about the different technologies being used click here:
https://www.cbinsights.com/research/report/fashion-tech-future-trends/
',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'Digital technologies such AR, AI and NFT offer new opportunities for luxury fashion brands.',
            'mediaType' => 'image',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414583538094190/a-artandai.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);

        $article4 = Article::create([
            'title' => 'Cartier and Tiffany are Using Snapchat AR to Sell Luxury to Gen Z',
            'content' => 'I recently tried on a Cartier Tank watch and a slew of Tiffany bracelets, watching the metal and diamonds shine in the dim light. I wasn’t at a store, though; I was in my bed, barefoot and in sweatpants, using an AR experience on Snap that let me see how the jewelry looked on my wrist.

The Cartier and Tiffany AR campaigns are the latest in a series of collaborations Snap is making with brands to get Gen Z to invest in luxury using virtual try-on experiences. (The Cartier Tank watch starts at $2,790; the cheapest Tiffany Lock bracelet is priced at $6,900.)

"Brands are tapping into Snapchat’s largely Gen Z community to make the world a bit more interactive and a bit more fun,” says Geoffrey Perez, head of luxury at Snap.

To learn more about how brands are using Snapchat for interactive advertising click here:
https://www.technologyreview.com/2023/03/07/1069414/cartier-tiffany-ar-luxury-gen-z/
',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'Cartier and Tiffany created AR campaigns in collaboration with Snapchat to get people to experience luxury from home. ',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414560196804608/m-socialmediaposts.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);


        $tag1 = Tag::create(['name' => 'technology']);
        $tag2 = Tag::create(['name' => 'sport']);
        $tag3 = Tag::create(['name' => 'fashion']);
        $tag4 = Tag::create(['name' => 'art']);
        $tag5 = Tag::create(['name' => 'music']);
        $tag6 = Tag::create(['name' => 'motorsport']);
        $tag7 = Tag::create(['name'=> 'ecoal']);
        $tag8 = Tag::create(['name'=> 'react']);

        $article->tags()->attach([$tag7->id, $tag8->id]);
        $article2->tags()->attach([$tag1->id, $tag3->id]);
        $article3->tags()->attach([$tag1->id,$tag3->id]);
        $article4->tags()->attach([$tag1->id,$tag3->id]);

    }
}
