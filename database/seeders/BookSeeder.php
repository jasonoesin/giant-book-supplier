<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_details = [
            [
                "title"=>"The Hunger Games",
                "image"=>"assets/book/1.jpg",
                "synopsis"=>"In what was once North America, the Capitol of Panem maintains its hold on its 12 districts by forcing them each to select a boy and a girl, called Tributes, to compete in a nationally televised event called the Hunger Games. Every citizen must watch as the youths fight to the death until only one remains. District 12 Tribute Katniss Everdeen (Jennifer Lawrence) has little to rely on, other than her hunting skills and sharp instincts, in an arena where she must weigh survival against love."
            ],
            [
                "title"=>"Timezone J",
                "image"=>"assets/book/2.jpg",
                "synopsis"=>"Doucet (Dirty Plotte) returns to autobio comics after departing the scene to focus on fine art and poetry (“I had vowed never ever to draw myself again” she reflects in the opening pages) with this brave and playful graphic memoir that lands as a full-bore visual assault. Free-flowing recollections, based on Doucet’s diary entries, gradually develop into the story of her long-distance relationship with a French soldier she calls “the hussar” and their eventual meeting in Paris."
            ],
            [
                "title"=>"123 Scream!",
                "image"=>"assets/book/3.jpg",
                "synopsis"=>"Get ready to scream with this collection of hillarifying—hilariously terrifying—tales, fully-illustrated and perfect for scary story lovers who are looking for a side of humor to go with their helpings of horror."
            ],
            [
                "title"=>"The Pallbearers Club",
                "image"=>"assets/book/4.jpg",
                "synopsis"=>"A cleverly voiced psychological thriller about an unforgettable—and unsettling—friendship, with blood-chilling twists, crackling wit, and a thrumming pulse in its veins, from the nationally bestselling author of The Cabin at the End of the World and Survivor Song."
            ],
            [
                "title"=>"Runaway",
                "image"=>"assets/book/5.jpg",
                "synopsis"=>"Runaway is a book of extraordinary stories about love and its infinite betrayals and surprises, from the title story about a young woman who, though she thinks she wants to, is incapable of leaving her husband, to three stories about a woman named Juliet and the emotions that complicate the luster of her intimate."
            ],
            [
                "title"=>"Goliath",
                "image"=>"assets/book/6.jpg",
                "synopsis"=>"Billy Mcbride is going through a rough patch. He has been fired from the law firm he helped build, his wife has left him, and he's now a down on his luck ambulance chaser. A lady (Patty) approaches him to represent her in a wrongful death case. After reluctantly accepting to take on the case, a series of strange events befall Billy. Through death threats, harassment, and trumped up arrests, Billy embarks on obtaining justice, and it is one hell of a ride. Additional unique cases eventually come Billy and Patty's way, making the ride even more entertaining."
            ],
            [
                "title"=>"Madem",
                "image"=>"assets/book/7.jpg",
                "synopsis"=>"A wealthy American couple prepare a luxurious dinner at their Parisian manor house. To avoid an unlucky number, they ask their loyal maid to masquerade as a wealthy Spanish heiress."
            ],
            [
                "title"=>"A Map for The Missing",
                "image"=>"assets/book/8.jpg",
                "synopsis"=>"Though they have been estranged for years, Yitian promises to come home. When Yitian attempts to piece together what may have happened, he struggles to navigate China's impenetrable bureaucracy as an outsider, and his mother's evasiveness only deepens the mystery."
            ],
            [
                "title"=>"In the Mouth of the Wolf",
                "image"=>"assets/book/9.jpg",
                "synopsis"=>"A true story of two brothers and the war that changed everything. Michael Morpurgo's wonderful storytelling and Barroux's stunning artwork combine to tell the true story of Michael's uncles against the epic backdrop of World War Two. Francis and Pieter are brothers."
            ],
            [
                "title"=>"Dinosaurs",
                "image"=>"assets/book/10.jpg",
                "synopsis"=>"Dinosaurs is the story of a man named Gil who walks from New York to Arizona to recover from a failed love. After he arrives, new neighbors move into the glass-walled house next door and his life begins to mesh with theirs."
            ],
        ];

        foreach($book_details as $bd){
            Book::factory()->create(
                [
                    "title"=> $bd['title'],
                    "image"=> $bd['image'],
                    "synopsis"=> $bd['synopsis'],
                ]
            );
        }
    }
}
