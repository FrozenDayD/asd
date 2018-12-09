<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Custom entries
        DB::table('movies')->insert([
            [
                'id' => 1,
                'title' => 'Venom',
                'desc' => 'Eddie Brock is a reporter—investigating people who want to go unnoticed. But after he makes a terrible discovery at the Life Foundation, he begins to transform into ‘Venom’. The Foundation has discovered creatures called symbiotes, and believes they’re the key to the next step in human evolution. Unwittingly bonded with one, Eddie discovers he has incredible new abilities—and a voice in his head that’s telling him to embrace the darkness.',
                'show' => '2018-12-21',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bURIWlkMbzT8RdpemzCmQECo2Uh.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Bohem Rapsody',
                'desc' => 'Singer Freddie Mercury, guitarist Brian May, drummer Roger Taylor and bass guitarist John Deacon take the music world by storm when they form the rock n roll band Queen in 1970. Hit songs become instant classics. When Mercurys increasingly wild lifestyle starts to spiral out of control, Queen soon faces its greatest challenge yet – finding a way to keep the band together amid the success and excess.',
                'show' => '2018-12-22',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lHu1wtNaczFPGFDTrjCSzeLPTKN.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Robin Hood',
                'desc' => 'A war-hardened Crusader and his Moorish commander mount an audacious revolt against the corrupt English crown.',
                'show' => '2018-12-23',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/AiRfixFcfTkNbn2A73qVJPlpkUo.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Fantastic Beasts: The Crimes of Grindelwald',
                'desc' => 'Gellert Grindelwald has escaped imprisonment and has begun gathering followers to his cause—elevating wizards above all non-magical beings. The only one capable of putting a stop to him is the wizard he once called his closest friend, Albus Dumbledore. However, Dumbledore will need to seek help from the wizard who had thwarted Grindelwald once before, his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.',
                'show' => '2018-12-24',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uyJgTzAsp3Za2TaPiZt2yaKYRIR.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Mission: Impossible - Fallout',
                'desc' => 'When an IMF mission ends badly, the world is faced with dire consequences. As Ethan Hunt takes it upon himself to fulfill his original briefing, the CIA begin to question his loyalty and his motives. The IMF team find themselves in a race against time, hunted by assassins while trying to prevent a global catastrophe.',
                'show' => '2018-12-25',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/AkJQpZp9WoNdj7pLYSj1L0RcMMN.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Smallfoot',
                'desc' => 'A bright young yeti finds something he thought didnt exist—a human. News of this “smallfoot” throws the simple yeti community into an uproar over what else might be out there in the big world beyond their snowy village.',
                'show' => '2018-12-26',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/zfaiO7QgpcvR8XDOMokWLRfKeTE.jpg'
            ],
            [
                'id' => 7,
                'title' => 'Ralph Breaks the Internet',
                'desc' => 'Taking place six years following the events of the first film, the story will center on Ralphs adventures in the Internet data space when a Wi-Fi router gets plugged into the arcade as he must find a replacement part to fix Sugar Rush.',
                'show' => '2018-12-27',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/m110vLaDDOCca4hfOcS5mK5cDke.jpg'
            ],
            [
                'id' => 8,
                'title' => 'The Grinch',
                'desc' => 'The Grinch hatches a scheme to ruin Christmas when the residents of Whoville plan their annual holiday celebration.',
                'show' => '2018-12-28',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lCfKAAFyANPFn04xOPqazd8jwnc.jpg'
            ],
            [
                'id' => 9,
                'title' => 'The Equalizer 2',
                'desc' => 'Robert McCall, who serves an unflinching justice for the exploited and oppressed, embarks on a relentless, globe-trotting quest for vengeance when a long-time girl friend is murdered.',
                'show' => '2018-12-29',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/cQvc9N6JiMVKqol3wcYrGshsIdZ.jpg'
            ],

        ]);

        // Delete generated images
        $files = glob('public/images/movies/generated/*.jpg');
        foreach($files as $file) {
            if(is_file($file))
            unlink($file);
        }


    }
}
