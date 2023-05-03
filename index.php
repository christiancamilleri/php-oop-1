<?php

require_once './Models/Movie.php';


// creo oggetti movie
$fast_and_furios = new Movie("Fast and Furios", ["gare", "drammatico"], "ddskfykjfbuykfbkewfvbwefberwb");
$profondo_rosso = new Movie('Profondo rosso', ['horror', 'splatter'], 'fdsbddbvdbdsbffiusdbiuo');

// creo e popolo array movies
$movies[] = $fast_and_furios;
$movies[] = $profondo_rosso;


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include './Views/Partials/header.php' ?>
    <!-- prima parte esercizio -->
    <!-- <div> 
        //  // var_dump($fast_and_furios);
       // var_dump($profondo_rosso)  //
    </div> -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Genere</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Trailer</th>
                <th scope="col">Adatto ai bambini</th>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($movies as $movie) {
                ?>

                <tr>
                    <td>
                        <?php echo $movie->titolo ?>
                    </td>
                    <td>
                        <?php foreach ($movie->genere as $genere)
                            echo $genere . ' ' ?>
                        </td>
                        <td>
                        <?php echo $movie->descrizione ?>
                    </td>
                    <td> <a href="<?php echo $movie->trailer ?>">Clicca qui</a> </td>
                    <td>
                        <?php echo $movie->limiteEta ?>
                    </td>
                </tr>


                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>