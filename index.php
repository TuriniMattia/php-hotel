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

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>HOTEL</title>
</head>
<body >
    <header>
        <div class="container">
            <div class="row">
                
                <div class="d-flex align-items-center justify-content-around ">

                    <img class="w-25" src="./img/cropped-14.2.png" alt="">
                    <h1 class="text-primary">HOTEL REVIEW</h1>
                    
                </div>
            </div>

        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <table class="table  bg-primary bg-gradient text-white">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Parcheggio</th>
                            <th>Voto</th>
                            <th>Distanza centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($hotels as $hotel){
                                // var_dump($hotel);
                                
                                ?>
                                <tr>
                                    <td><?php echo $hotel['name']   ?></td>
                                    <td><?php echo $hotel['parking'] === true ? 'SI' : 'NO';  ?></td>
                                    <td><?php echo $hotel['vote']   ?></td>
                                    <td><?php echo $hotel['distance_to_center']   ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>