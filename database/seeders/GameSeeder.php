<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [

            [
                "id" => "1",
                "game_name" => "Counter Strike: Global Offensive",
                "game_detail" => "Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).",
                "game_price" => 0,
                "game_image" => "storage/images/csgo.png",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "2",
                "game_name" => "PUBG: BATTLEGROUNDS",
                "game_detail" => "Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.",
                "game_price" => 0,
                "game_image" => "storage/images/pubg.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "3",
                "game_name" => "EA SPORTS™FIFA 23",
                "game_detail" => "Experience the excitement of the biggest tournament in football with EA SPORTS™ FIFA 23 and the men’s FIFA World Cup™ update, available on November 9 at no additional cost!.",
                "game_price" => 510000,
                "game_image" => "storage/images/fifa23.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "4",
                "game_name" => "Red Dead Redemption 2",
                "game_detail" => "Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the shared living world of Red Dead Online.",
                "game_price" => 430000,
                "game_image" => "storage/images/rdr2.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "5",
                "game_name" => "Hogwarts Legacy",
                "game_detail" => "Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.",
                "game_price" => 500000,
                "game_image" => "storage/images/hogwartslegacy.png",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "6",
                "game_name" => "Apex Legends™",
                "game_detail" => "Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.",
                "game_price" => 0,
                "game_image" => "storage/images/apexlegends.png",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "7",
                "game_name" => "Grand Theft Auto V",
                "game_detail" => "Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.",
                "game_price" => 270000,
                "game_image" => "storage/images/gtav.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "8",
                "game_name" => "Call of Duty®: Modern Warfare® II",
                "game_detail" => "Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.",
                "game_price" => 690000,
                "game_image" => "storage/images/codmw2.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "9",
                "game_name" => "NARAKA: BLADEPOINT",
                "game_detail" => "NARAKA: BLADEPOINT is an up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities - inspired by the legends of the Far East.",
                "game_price" => 150000,
                "game_image" => "storage/images/narakabladepoint.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],
            [
                "id" => "10",
                "game_name" => "Cyberpunk 2077",
                "game_detail" => "Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.",
                "game_price" => 470000,
                "game_image" => "storage/images/cyberpunk2077.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "1"
            ],

            [
                "id" => "11",
                "game_name" => "Destiny 2",
                "game_detail" => "Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.",
                "game_price" => 0,
                "game_image" => "storage/images/destiny2.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "12",
                "game_name" => "War Thunder",
                "game_detail" => "War Thunder is the most comprehensive free-to-play, cross-platform, MMO military game dedicated to aviation, armoured vehicles, and naval craft, from the early 20th century to the most advanced modern combat units. Join now and take part in major battles on land, in the air, and at sea.",
                "game_price" => 0,
                "game_image" => "storage/images/warthunder.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "13",
                "game_name" => "The Sims 4",
                "game_detail" => "Play with life and discover the possibilities. Unleash your imagination and create a world of Sims thats wholly unique. Explore and customize every detail from Sims to homes and much more.",
                "game_price" => 0,
                "game_image" => "storage/images/sims4.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "14",
                "game_name" => "Forza Horizon 5",
                "game_detail" => "Your Ultimate Horizon Adventure awaits! Explore the vibrant open world landscapes of Mexico with limitless, fun driving action in the worlds greatest cars. Blast off to Hot Wheels Park and experience the most extreme tracks ever devised. Requires Forza Horizon 5 game, expansion sold separately.",
                "game_price" => 470000,
                "game_image" => "storage/images/fh5.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "15",
                "game_name" => "Forspoken",
                "game_detail" => "Forspoken follows the journey of Frey, a young New Yorker transported to the beautiful and cruel land of Athia. In search of a way home, Frey must use her newfound magical abilities to traverse sprawling landscapes and battle monstrous creatures.",
                "game_price" => 680000,
                "game_image" => "storage/images/forspoken.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "16",
                "game_name" => "ELDEN RING",
                "game_detail" => "THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.",
                "game_price" => 249900,
                "game_image" => "storage/images/eldenring.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "17",
                "game_name" => "Grand Theft Auto: San Andreas - The Definitive Edition",
                "game_detail" => "Grand Theft Auto: San Andreas: Its the early 90s. After a couple of cops frame him for homicide, Carl Johnson is forced on a journey that takes him across the entire state of San Andreas, to save his family and to take control of the streets.",
                "game_price" => 139900,
                "game_image" => "storage/images/gtasa.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "18",
                "game_name" => "Kena: Bridge of Spirits",
                "game_detail" => "A story-driven, action adventure combining exploration with fast-paced combat. Untangle the past as Kena, a young Spirit Guide in search of the sacred Mountain Shrine. Help free the spirits trapped in a forgotten village with the help of the Rot, her adorable (yet powerful) spirit companions.",
                "game_price" => 50000,
                "game_image" => "storage/images/kena.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "19",
                "game_name" => "The Witcher® 3: Wild Hunt",
                "game_detail" => "You are Geralt of Rivia, mercenary monster slayer. Before you stands a war-torn, monster-infested continent you can explore at will. Your current contract? Tracking down Ciri — the Child of Prophecy, a living weapon that can alter the shape of the world.",
                "game_price" => 93900,
                "game_image" => "storage/images/thewitcher3.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],
            [
                "id" => "20",
                "game_name" => "Titanfall® 2",
                "game_detail" => "Respawn Entertainment gives you the most advanced titan technology in its new, single player campaign & multiplayer experience. Combine & conquer with new titans & pilots, deadlier weapons, & customization and progression systems that help you and your titan flow as one unstoppable killing force.",
                "game_price" => 65000,
                "game_image" => "storage/images/titanfall2.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "2"
            ],

            [
                "id" => "21",
                "game_name" => "It Takes Two",
                "game_detail" => "UEmbark on the craziest journey of your life in It Takes Two. Invite a friend to join for free with Friends Pass and work together across a huge variety of gleefully disruptive gameplay challenges. Winner of GAME OF THE YEAR at the Game Awards 2021.",
                "game_price" => 310000,
                "game_image" => "storage/images/ittakes2.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "22",
                "game_name" => "Rust",
                "game_detail" => "The only aim in Rust is to survive. Everything wants you to die - the islands wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.",
                "game_price" => 190000,
                "game_image" => "storage/images/rust.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "23",
                "game_name" => "Tom Clancy's Rainbow Six® Siege",
                "game_detail" => "Tom Clancy's Rainbow Six Siege is the latest installment of the acclaimed first-person shooter franchise developed by the renowned Ubisoft Montreal studio.",
                "game_price" => 130000,
                "game_image" => "storage/images/r6siege.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "24",
                "game_name" => "Dead Space",
                "game_detail" => "The sci-fi survival-horror classic returns, completely rebuilt to offer an even more immersive experience — including visual, audio, and gameplay improvements — while staying faithful to the original games thrilling vision.",
                "game_price" => 430000,
                "game_image" => "storage/images/deadspace.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "25",
                "game_name" => "Warframe",
                "game_detail" => "Awaken as an unstoppable warrior and battle alongside your friends in this story-driven free-to-play online action game",
                "game_price" => 0,
                "game_image" => "storage/images/warframe.png",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "26",
                "game_name" => "God of War",
                "game_detail" => "His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same.",
                "game_price" => 480000,
                "game_image" => "storage/images/godofwar.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "27",
                "game_name" => "Horizon Zero Dawn™ Complete Edition",
                "game_detail" => "Experience Aloys legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!",
                "game_price" => 480000,
                "game_image" => "storage/images/horizonzerodawn.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "28",
                "game_name" => "Persona 5 Royal",
                "game_detail" => "Don the mask and join the Phantom Thieves of Hearts as they stage grand heists, infiltrate the minds of the corrupt, and make them change their ways!",
                "game_price" => 530000,
                "game_image" => "storage/images/p5royal.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "29",
                "game_name" => "Hunt: Showdown",
                "game_detail" => "Hunt: Showdown is a high-stakes, tactical PvPvE first-person shooter. Hunt for bounties in the infested Bayou, kill nightmarish monsters and outwit competing hunters - alone or in a group - with your glory, gear, and gold on the line.",
                "game_price" => 210000,
                "game_image" => "storage/images/huntshowdown.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],
            [
                "id" => "30",
                "game_name" => "Muse Dash",
                "game_detail" => "Paradise of parkour & rhythm game ★★★ — Muse Dash!!",
                "game_price" => 20000,
                "game_image" => "storage/images/musedash.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "3"
            ],

            [
                "id" => "31",
                "game_name" => "Muse Dash - Just as planned",
                "game_detail" => "This content requires the base game Muse Dash on Steam in order to play.",
                "game_price" => 280000,
                "game_image" => "storage/images/muse-justasplanned.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "4"
            ],
            [
                "id" => "32",
                "game_name" => "Deep Rock Galactic",
                "game_detail" => "Deep Rock Galactic is a 1-4 player co-op FPS featuring badass space Dwarves, 100% destructible environments, procedurally-generated caves, and endless hordes of alien monsters.",
                "game_price" => 90000,
                "game_image" => "storage/images/deeprockgalactic.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "4"
            ],
            [
                "id" => "33",
                "game_name" => "NBA 2K23",
                "game_detail" => "Rise to the occasion in NBA 2K23. Showcase your talent in MyCAREER. Pair All-Stars with timeless legends in MyTEAM. Build your own dynasty in MyGM, or guide the NBA in a new direction with MyLEAGUE. Take on NBA or WNBA teams in PLAY NOW and feel true-to-life gameplay.",
                "game_price" => 730000,
                "game_image" => "storage/images/nba2k23.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "4"
            ],
            [
                "id" => "34",
                "game_name" => "DayZ",
                "game_detail" => "How long can you survive a post-apocalyptic world? A land overrun with an infected zombie population, where you compete with other survivors for limited resources. Will you team up with strangers and stay strong together? Or play as a lone wolf to avoid betrayal? This is DayZ, this is your story.",
                "game_price" => 220000,
                "game_image" => "storage/images/dayz.jpeg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "4"
            ],
            [
                "id" => "35",
                "game_name" => "Battlefield™ V",
                "game_detail" => "This is the ultimate Battlefield V experience. Enter mankind’s greatest conflict with the complete arsenal of weapons, vehicles, and gadgets plus the best customization content of Year 1 and 2.",
                "game_price" => 380000,
                "game_image" => "storage/images/bf5.jpg",
                "game_pegi_rating" => 18,
                "game_genre_id" => "4"
            ],
        ];

        foreach ($games as $game) {
            Game::insert($game);
        }
    }
}
