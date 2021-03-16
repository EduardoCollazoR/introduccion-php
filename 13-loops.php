<?php include 'includes/header.php';

// while 
$i = 0; // inicializador

while ($i < 10) {
    echo $i . "<br>";
    $i++; // incremento
}

// do while
echo "<br>";
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

echo "<br>";

/** 
 * 3 imprimir fizz
 * 5 imprimir buzz
 * 3 y 5 imprimir fizz buzz
 */


// for loop
// for ($i = 1; $i < 100; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . " - fizzbuzz <br/>";
//     } else if ($i % 3 === 0) {
//         echo $i . " - fizz <br/>";
//     } else if ($i % 5 === 0) {
//         echo $i . " - buzz <br/>";
//     } else {
//         echo $i . "<br/>";
//     }
// }

include 'includes/footer.php';
