<!DOCTYPE html>
<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $empty = 0;

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Php Hotel</title>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <h1 class="center">Php Hotel</h1>
            <div class="contain">
                <?php foreach ($hotels as $key => $value) { ?>
                    <div class="item">
                        <h2 class="center"><?php echo $value["name"] ?></h2>
                        <div class="info">
                            <p class="center"><?php echo $value["description"] ?></p>
                            <ul>
                                <li>parking: <?php echo $value["parking"] ?></li>
                                <li>vote: <?php echo $value["vote"] ?></li>
                                <li>distance to center: <?php echo $value["distance_to_center"] ?> km</li>
                            </ul>
                        </div>
                        
                    </div>
                <?php } ?>
            </div>
        </main>
    </body>
</html>