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

    $newArray = [];

   var_dump($_GET["parking"]);
/*
    if($_GET["parking"] === on){
        foreach ($hotels as $key => $value) {
            var_dump($value);
        }
    }
    else{
        $newArray = $hotels;
    }
*/
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Php Hotel</title>
    </head>
    <body>
        <main>
        <h1 class="center">Php Hotel</h1>
        <div class="contain">
            <form class="flex" action="./index.php" method="get">
                <label for="park">Parking</label>
                <input type="checkbox" name="parking" id="parking">

                <label for="stars">Hotel with stars</label>
                <input type="text" name="stars" id="stars">

                <input type="submit" value="Search">
            </form>
        </div>
        
            <div class="contain flex">
                <?php foreach ($hotels as $key => $value) { ?>
                    <div class="item">
                        <h2 class="center"><?php echo $value["name"] ?></h2>
                        <div class="info">
                            <p class="center"><?php echo $value["description"] ?></p>
                            <ul>
                                <li>parking: 
                                    <?php if(!empty($value["parking"])){
                                        echo $value["parking"];
                                    }else{
                                        echo $empty;
                                    }
                                    ?>
                                </li>
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