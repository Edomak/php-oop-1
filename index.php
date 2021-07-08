<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php  

require __DIR__ . "/classes/Movie.php";

$movie1 = new Movie ('Le Iene', 'Thriller-Poliziesco', '1992', 'Quentin Tarantino', 'USA');

$movie2 = new Movie ('Nomadland', 'Dramatic', '2021', 'Chloè Zhao', 'USA');

$movie1->setDuration(102);
$movie2->setDuration(108);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-OOP-1</title>
    </head>
    <body>
    <h1>Primo approccio con la programmazione ad oggetti</h1>

    <main>
        <div class="film">
            <h2> Film Title:
                <?php echo $movie1->title; ?>
             </h2>
            <p> <strong>Film Genre:</strong>
                <?php echo $movie1->genre; ?>
            </p>
            <p> <strong>Year:</strong>
                <?php echo $movie1->year; ?>
            </p>
            <p> <strong>Film Director:</strong>
                <?php echo $movie1->director; ?>
            </p>
            <p> <strong>Country:</strong>
                <?php echo $movie1->country; ?>
            </p>
            <small> <strong>Film Duration:</strong>
                <?php echo $movie1->duration . " Min" ?>
            </small>
        </div>
        <hr>
        <div class="film">
            <h2> Film Title:
                <?php echo $movie2->title; ?>
             </h2>
            <p> <strong>Film Genre:</strong>
                <?php echo $movie2->genre; ?>
            </p>
            <p> <strong>Year:</strong>
                <?php echo $movie2->year; ?>
            </p>
            <p> <strong>Film Director:</strong>
                <?php echo $movie2->director; ?>
            </p>
            <p> <strong>Country:</strong>
                <?php echo $movie2->country; ?>
            </p>
            <small> <strong>Film Duration:</strong>
                <?php echo $movie2->duration . " Min" ?>
            </small>
        </div>
    </main>
        
    </body>
</html>
