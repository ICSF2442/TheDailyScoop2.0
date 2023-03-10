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



',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'Cartier and Tiffany created AR campaigns in collaboration with Snapchat to get people to experience luxury from home. ',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414560196804608/m-socialmediaposts.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);

        $article5 = Article::create([
            'title' => 'The Benefits of Using Technology in Sport',
            'content' => 'As football lovers know, technology is becoming more and more present in the industry.

The use of technology in sports is growing rapidly. In football, for instance, new devices are used for different reasons such as to help referees in decision-making and to quantify the athletes’ performance during a game, which helps the coach to set the training program and the game strategy. These tools are helpful when working with famous football players like Cristiano Ronaldo and when checking their stats.

One of the most famous and recent technologies introduced in football, is called “goal line technology”. It is used to determine if a ball has crossed the goal line, in order to support the referee. Wearable devices that can monitor heart rate were integrated with tracking technologies that include global positioning system (GPS), accelerometer and gyroscope sensors, which are used to describe the athletes’ movement and physical demands. Therefore, these new technologies can assess the number of collisions and jumps that occur during a match.

',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'The use of technology is growing rapidly in football as there are new technologies being introduced to help coaches, referees and players.
',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414557365649459/s-sportsandai.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article6 = Article::create([
            'title' => 'The Key Trends Shaping Global Sport Ahead of 2023t',
            'content' => 'When The Sports Technology Annual Review and Power List was published this time last year, end-of-year predictions for the global sports technology market value were at $8 billion… and the actual valuation proved to be $17.9bn. This has to point to tech-led innovation’s power within the whole sports market.

The Review aims to provide readers with a one-stop resource which details the key aspects shaping the landscape and reflecting subjects that shape current conversations. Sustainability is being taken more seriously by more venues and manufacturers. Crypto’s crash is giving pause for thought in the NFT and token space but, despite this, blockchain and Web3 seem to have kept momentum as organisations prepare for widespread adoption of the metaverse.

',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'The The Sports Technology Annual Review and Power List points to tech-led innovation’s power within the whole sports market.',
            'mediaURL' => 'https://miro.medium.com/v2/resize:fit:597/1*4c_8hFaPiq6JKg9qudghtg.png',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article7 = Article::create([
            'title' => '2023: The Rise of Artificial Intelligence in Music',
            'content' => 'Music has been evolving at rocket speed with the invention of new technologies. AI has become an important part of the music industry, with its many different uses.

AI can be used to compose new music, create unique and interesting mashups, and even help create robotic performers. This can make anyone sound like their favourite artist from Ariana Grande to The Weeknd. It can also be used to analyse music and identify patterns, allowing for more personalised and targeted music recommendations. Moreover, there are new technologies being developed to produce AI-generated lyrics, which could have meaningful emotional content. The possibilities for AI technology in the music industry are endless, and it will be interesting to see where it can take us in the future.
',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'AI is becoming an important part of the music industry, with its many different uses. ',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414559643152534/m-musicandtech.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article8 = Article::create([
            'title' => 'Key Insights from TikTok in The What’s Next 2023 Trend Report',
            'content' => 'TikTok has created new genres of entertainment, shared funny inside jokes and memes that have brought communities together, and even helped other people discover new ideas. This has prompted brands of all sizes around the world to either create new types of content on TikTok to engage these communities or sponsor TikTokers who can create engaging content for them.

These shifts are documented in TikTok’s What’s Next 2023 Trend Report, the social video platform’s third annual trend forecast. It’s a resource that can help both digital advertisers and social media marketers understand how consumers’ wants and needs may change in the coming year to change their digital marketing strategies, both on and off TikTok.

The latest report not only unpacks several long-term TikTok-first cultural forces, from fun to functional, but also illustrates the underlying signals that show how each of these has shaped trends that provide a roadmap for brands to follow on the platform.

',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'TikTok’s What’s Next 2023 Trend Report shows the power that TikTok as for digital advertisers. ',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414560851103744/m-tiktok.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article9 = Article::create([
            'title' => 'Key Insights from TikTok in The What’s Next 2023 Trend Report',
            'content' => 'Are you an aspiring musician or artist? If yes, then you may know that it’s bad enough that musicians, artists, and bands are forced to do their own marketing by forever posting on social media, it’s even worse when you post, and it doesn’t reach your audience. That’s why knowing the best times to post on the various platforms is so critical. If you’re going to do all that work, you might as well maximize it.

Here are the best times to post on different social medias according to Giraffe social media.

Instagram
Days: Tuesday, Wednesday, Friday
Times: 9AM, 9:30AM, and 8PM

Facebook
Days: Monday, Wednesday, Friday
Times: 7AM, 3:15PM, 7PM

TikTok
Days: Monday, Tuesday, Friday
Times: 10AM, 8PM, 11PM

Twitter
Days: Wednesday, Thursday, Friday
Times: 8:30AM, 9:23AM, 10AM

LinkedIn
Days: Tuesday, Wednesday, Thursday
Times: 9AM, 10AM, 12PM

',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'A list of the best times to post on social media for promoting has been compiled by Giraffe social media.',
            'mediaURL' => 'https://www.ncsc.gov.uk/images/social-icons.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article10 = Article::create([
            'title' => 'AI that Makes Images',
            'content' => 'This is the year of the AI artists. Software models developed by Google, OpenAI, Midjourney, and others can now generate stunning artworks based on just a few text prompts. These artworks can recreate styles of famous artists like Picasso, Van Gogh and many more.

These AI models generate stunning imagery from simple phrases which is fun to use for many. It allows for those who don’t have the skills to make the art they aspire to create become a reality. Furthermore, AI software is evolving into a powerful creative and commercial tool. Type in a short description of pretty much anything, and you get a picture of what you asked for in seconds. Nothing will be the same again.

',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'New AI software models by Google, OpenAI, and more are now generating artworks based off text prompts.',
            'mediaURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414560851103744/m-tiktok.jpg',
            'author' => 'Maya De Marco',
            'leadStory' => false
        ]);
        $article11 = Article::create([
            'title' => 'Technology and Art in 2023: New Opportunities for Creativity',
            'content' => 'The intersection of technology and art has opened new avenues for creativity. In 2023, we can expect to see even more exciting developments in this space. Here are a few trends to watch out for:

NFTs: Non-fungible tokens are digital certificates that represent ownership of a unique piece of art. They are revolutionizing the art world by providing a new way for artists to monetize their digital creations.

Interactive Exhibits: With the help of virtual reality and augmented reality, interactive exhibits are becoming more sophisticated, creating immersive experiences for viewers.

Collaborations with AI: Artists are increasingly collaborating with AI systems to explore new creative possibilities. AI can be used to generate new ideas, analyze data, and create unique sounds and visuals.

As technology continues to evolve, we can expect to see even more exciting developments in the intersection of technology and art, opening up new opportunities for creativity and innovation.
',
            'thumbnailURL' => 'https://cdn.discordapp.com/attachments/1083391300780445709/1083414582506311822/f-design.jpg',
            'sumary' => 'The intersection of technology and creativity is reaching a new level in 2023.',
            'mediaURL' => 'https://knightfoundation.org/wp-content/uploads/2018/08/FF_KF_PROTOTYPE_FUND_Facebook.png?w=1070',
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
        $tag9 = Tag::create(['name'=> 'social media']);

        $article->tags()->attach([$tag7->id,$tag8->id]);
        $article2->tags()->attach([$tag1->id,$tag3->id]);
        $article3->tags()->attach([$tag1->id,$tag3->id]);
        $article4->tags()->attach([$tag1->id,$tag3->id]);
        $article5->tags()->attach([$tag1->id,$tag2->id]);
        $article6->tags()->attach([$tag1->id,$tag2->id]);
        $article7->tags()->attach([$tag1->id,$tag5->id]);
        $article8->tags()->attach([$tag1->id,$tag9->id]);
        $article9->tags()->attach([$tag1->id,$tag9->id,$tag5->id,$tag3->id,$tag4->id]);
        $article10->tags()->attach([$tag1->id,$tag4->id]);
        $article11->tags()->attach([$tag1->id,$tag4->id]);





    }
}
