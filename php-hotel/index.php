<?php
    include_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>PHP Hotel</title>
</head>
<body>

    <header>
        <form action="./index.php" method="GET">
            <div class="input-group">
                <span class="input-group-text">Parking:</span>
                <select class="form-select" name="parking">
                    <option value="0">Show every hotel</option>
                    <option value="1">Show only hotels with parking</option>
                    <option value="2">Show only hotels without parking</option>
                </select>
            </div>

            <div class="input-group">
                <span class="input-group-text">Hotel rating filter:</span>
                <select class="form-select" name="vote">
                    <option value="1">One star rating</option>
                    <option value="2">Two stars rating</option>
                    <option value="3">Three stars rating</option>
                    <option value="4">Four stars rating</option>
                    <option value="5">Five stars rating</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </header>

    <?php

        $selectedHotels = $hotelsList;

        if (isset($_GET['parking'])){
            if ($_GET['parking'] === '1' ||  $_GET['parking'] === '2'){
                $parkingValueToCheck = ($_GET['parking'] === '1') ? true : false;

                $selectedHotels = array_filter($selectedHotels,
                    fn ($hotel) =>  $hotel['parking'] === $parkingValueToCheck);
                }
        }


        $vote = intval($_GET['vote']);

        if (isset($vote) && ($vote >= 1) &&$vote <= 5 ){

            $selectedHotels = array_filter($selectedHotels,
                fn ($hotel) => $hotel['vote'] >= $vote);
        }

    ?>


    <main>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Downtown Distance</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr> -->


                <?php

                    foreach ($selectedHotels as $hotel) {
                        echo '<tr class="hotel-element">';
                            foreach ($hotel as $key => $value) {
                                $value = ($value === false) ? '0' : $value;
                                echo "<td class=\"hotel-${key}\"> {$value} </td>";
                            }
                        echo '</tr>';
                    }

                    // foreach ($hotelsList as $hotel) {
                    //     echo '<tr class="hotel-element">';
                    //         echo "<th scope=\"row\"> {$hotel['name']} </th>";
                    //         echo "<td> {$hotel['description']} </td>";
                    //         echo "<td> {$hotel['parking']} </td>";
                    //         echo "<td> {$hotel['vote']} </td>";
                    //         echo "<td> {$hotel['distance_to_center']} </td>";
                    //     echo '</tr>';
                    // }
                ?>

            </tbody>
        </table>

            <!-- visualizzare esclusivamente i dati dei singoli hotel-->

    </main>

</body>
</html>