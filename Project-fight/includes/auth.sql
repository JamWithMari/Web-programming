    CREATE database gameStore;
    USE gameStore;
    CREATE table siteUsers(
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        isAdmin INT NOT NULL DEFAULT 0 -- 0 for false, 1 for true
    );


    create table games(
        game_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        details varchar(300),
        price DECIMAL(5,2),
        image VARCHAR(50),
        rating DECIMAL(2,1)
    );
    -- shopping cart will be used to show what users have in their cart since we got the dont actually have the user checking out so in this case a orders tlabe would not be needed
    create table shoppingCart(
        cart_id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        game_id INT,
        FOREIGN KEY (user_id) REFERENCES siteUsers(user_id),
        FOREIGN KEY (game_id) REFERENCES games(game_id)
    );
    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Brawlhalla',
        "An epic platform fighter for up to 8 players online or local. Try casual free-for-alls, ranked matches, or invite friends to a private room. And it's free! Play cross-platform with millions of players on PlayStation, Xbox, Nintendo Switch, iOS, Android & Steam! Frequent updates. Over sixty Legends.",
        0.00,
        '../images/Brawlhalla.jpg',
        4.0
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Castle Crashers',
        'Hack, slash, and smash your way to victory in this award winning 2D arcade adventure from The Behemoth!',
        16.99,
        '../images/Castle-crashers.jpg',
        4.8
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Capcom Fighting Collection 2',
        "Capcom\'s new fighting collection hits the stage! Choose from fan-favorite games like Capcom vs. SNK 2: Mark of the Millennium 2001 and Project Justice to 3D action games like Power Stone and Power Stone 2 in this collection of eight classic fighting games!",
        54.99,
        '../images/Collection2.jpg',
        4.3
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Dragon Ball FighterZ',
        'DRAGON BALL FighterZ is born from what makes the DRAGON BALL series so loved and famous: endless spectacular fights with its all-powerful fighters.',
        79.99,
        '../images/DBZF.jpg',
        4.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Dragon Ball Sparking! ZERO',
        'DRAGON BALL: Sparking! ZERO takes the legendary gameplay of the Budokai Tenkaichi series and raises it to whole new levels. Make yours the destructive power of the strongest fighters ever to appear in Dragon Ball!',
        93.49,
        '../images/DBZ0.jpg',
        4.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Divekick',
        'Divekick is the world’s first two-button fighting game. It distills the essence of the fighting game genre into just two buttons with no d-pad directional movement. Includes two extra playable characters: Fencer from Nidhogg and Johnny Gat from Saints Row!',
        5.49,
        '../images/Divekick.jpg',
        4.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Dead Or Alive 6',
        'DEAD OR ALIVE 6 is fast-paced 3D fighting game, produced by Koei Tecmo Games, featuring stunning graphics and multi-tiered stages that create a truly entertaining competitive experience.',
        77.99,
        '../images/DOA6.jpg',
        4.1
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Double Dragon Gaiden: Rise Of The Dragons',
        'The Double Dragon brothers return in this fresh addition to the iconic franchise. With roguelite elements, every playthrough is a chance at new action. Tag in with 2 of 4 starter characters or unlock 12 additional characters, each with their own special moves and playstyles. Online & Local Co-op.',
        32.89,
        '../images/Dub-dragons.jpg',
        4.2
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        "Them's Fightin' Herds",
        "Them’s Fightin’ Herds is a 2D fighting game featuring a cast of adorable animals designed by acclaimed cartoon producer Lauren Faust. Beneath the cute and cuddly surface, a serious fighter awaits!",
        22.79,
        '../images/Fight-herd.jpg',
        4.2
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Granblue Fantasy Versus: Rising',
        'Rise to the challenge in Granblue Fantasy Versus: Rising! This powered up, revamped sequel to GBVS is more enjoyable and accessible than ever before. With simplified input options, even newcomers can engage in thrilling and strategic matches!',
        66.99,
        '../images/Grand-blue.jpg',
        4.1
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'GUILTY GEAR STRIVE',
        'The cutting-edge 2D/3D hybrid graphics pioneered in the Guilty Gear series have been raised to the next level in “GUILTY GEAR -STRIVE-“. The new artistic direction and improved character animations will go beyond anything you’ve seen before in a fighting game!',
        52.99,
        '../images/Guilty-strive.jpg',
        4.4
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Injustice 2',
        'Build and power up the ultimate version of your favourite DC legends in INJUSTICE 2. This is your Legend. Your Journey. Your Injustice.',
        69.99,
        '../images/Injustice2.jpg',
        4.3
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Killer Instinct',
        'The legendary fighting franchise is back with over-the-top action, a wild cast of combatants, rocking reactive music, and C-C-C-COMBO BREAKERS!!! Choose your ultimate combatants each with fluid animations, unique combat tactics, and enthralling special attacks.',
        39.99,
        '../images/killer-instinct.jpg',
        4.4
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'THE KING OF FIGHTERS XV',
        'SHATTER ALL EXPECTATIONS! Transcend beyond your limits with KOF XV!',
        39.99,
        '../images/KOF-XV.jpg',
        4.1
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Lethal League Blaze',
        'Banging beats and mad style, Lethal League Blaze is the most intense ball game you can play online with up to 4 players.',
        22.79,
        '../images/Lethal-blaze.jpg',
        4.9
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        "My Hero One's Justice 2",
        "MY HERO ONE'S JUSTICE 2, the over-the-top follow-up to the smash hit 3D arena fighter MY HERO ONE'S JUSTICE, makes its heroic debut! Make full use of characters' Quirks as you clash head-to-head in epic battles across huge arenas!",
        53.49,
        '../images/MHA2.jpg',
        4.4
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Mortal Kombat 1',
        'Discover a reborn Mortal Kombat™ Universe created by the Fire God Liu Kang. Mortal Kombat™ 1 ushers in a new era of the iconic franchise with a new fighting system, game modes, and fatalities!',
        69.99,
        '../images/MK1.jpg',
        3.6
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'MARVEL vs. CAPCOM Fighting Collection: Arcade Classics',
        "The legendary crossover hits are back! The action-packed lineup consisting of seven unique titles, is full of heavy hitters like X-MEN VS. STREET FIGHTER, and MARVEL vs. CAPCOM 2 New Age of Heroes. The collection also includes the rare beat 'em up game, THE PUNISHER.",
        67.99,
        '../images/MvC2.jpg',
        4.7
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4',
        'The latest opus in the acclaimed STORM series is taking you on a colourful and breathtaking ride. Take advantage of the totally revamped battle system and prepare to dive into the most epic fights you’ve ever seen !',
        26.99,
        '../images/Ninja4.jpg',
        4.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Streets of Rage 4',
        'Amongst the best beat’em up series ever created, jammin’ ‘90s beats and over the top street fighting, the iconic series Streets of Rage comes back with a masterful tribute to and revitalization of the classic action fans adore.',
        28.99,
        '../images/Rage4.jpg',
        4.6
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Rivals of Aether II',
        'Rivals of Aether II is the sequel to the hit indie fighting game, Rivals of Aether. Play as both new and returning elemental fighters in the next generation of platform fighters.',
        38.99,
        '../images/RivalsII.jpg',
        4.1
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'SAMURAI SHODOWN',
        'SAMURAI REBOOT! A brand new SAMURAI SHODOWN game takes aim for the world stage!',
        56.10,
        '../images/Samurai.jpg',
        4.0
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Ultra Street Fighter IV',
        'The world’s greatest fighting game evolves to a whole new level with Ultra Street Fighter IV.',
        32.99,
        '../images/Sf4.jpg',
        4.6
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Street Fighter 6',
        'Here comes Capcom’s newest challenger! Street Fighter™ 6 launches worldwide on June 2nd, 2023 and represents the next evolution of the Street Fighter™ series! Street Fighter 6 spans three distinct game modes, including World Tour, Fighting Ground and Battle Hub.',
        79.99,
        '../images/Sf6.jpg',
        4.2
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Skullgirls 2nd Encore',
        'Main Stage Game at Evo 2022!-- The ultimate Skullgirls experience: Featuring 14 hand-animated characters, fully voiced story mode, countless palettes, and unparalleled GGPO-based multiplayer netcode.',
        28.99,
        '../images/Skullgirls.jpg',
        4.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'SNK VS. CAPCOM SVC CHAOS',
        'SNK and CAPCOM legends clash in this star-studded crossover fighting game! The 2003 arcade hit SVC CHAOS is back and better than ever!',
        25.99,
        '../images/SVC-chaos.jpg',
        4.3
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Tekken 7',
        'Discover the epic conclusion of the long-time clan warfare between members of the Mishima family. Powered by Unreal Engine 4, the legendary fighting game franchise fights back with stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals.',
        53.49,
        '../images/Tekken7.jpg',
        4.1
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Tekken 8',
        'Get ready for the next chapter in the legendary fighting game franchise, TEKKEN 8.',
        93.49,
        '../images/Tekken8.jpg',
        3.5
    );

    INSERT INTO games (name, details, price, image, rating)
    VALUES (
        'Teenage Mutant Ninja Turtles: The Cowabunga Collection',
        'Teenage Mutant Ninja Turtles: The Cowabunga Collection contains thirteen prior released classic games. This collection is a great place for gamers to experience these popular titles on Steam.',
        49.99,
        '../images/TMNT.jpg',
        4.4
    );
