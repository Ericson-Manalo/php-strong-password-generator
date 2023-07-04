<?php 


//$characters = ['qwertyuiopasdfghjklzxcvbnm', 'QWERTYUIOPASDFGHJKLZXCVBNM', '1234567890', '!"£$%&/()=?^'];
$lowerLetters = range('a', 'z');
$upperLetters = range('A', 'Z');
$numbers= range(1,9);
$specialChar = ['!', '£', '&', '%', '-', '*'];

//creo unico array dove metterò gli altri creati precedentemente
$mixedArray = [...$upperLetters, ...$lowerLetters, ...$numbers, ...$specialChar];



//var_dump($mixedArray);

$passwordLength = $_GET['pswLength'];



$newPsw = '';

for ($i=0; $i < $passwordLength; $i++) { 

    //genero numero randomico sugli elementi presente nel mio array mixedArray
    $randNum = rand(0, count($mixedArray)-1);

    //il numero randomico generato lo metto all'indice  dell'array stesso
    $randomChar = $mixedArray[$randNum];

    //i caratteri/numeri generati casualmente li salvo dentro una variabile vuota creata prima del ciclo
    $newPsw .= $randomChar;
}

//var_dump($randNum);

//var_dump($randomChar);

var_dump($newPsw);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator PHP</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-5">
            Strong Password Generator
        </h1>
        <h2 class="mb-4">
            Genera una password sicura
        </h2>

        <form action="index.php" method="get">
            <label for="psw"> Password's length </label>
            <input type="text" name="pswLength" id="pswLength">
            <input class="mb-5" type="submit" value="submit">


            <div>
                <p>
                    Consenti ripetizioni di uno o più caratteri:
                </p>
                <label for="yes">Yes</label>
                <input type="radio" name="repetition" value="yes">
                <label for="yes">No</label>
                <input type="radio" name="repetition" value="no">
            </div>
        </form>

        <div>
    <p>
        <?php 
        if($passwordLength <= 0 || !is_numeric($passwordLength)){
            echo 'Value insterted is not valid, please try again';
        }?> <br>
        The password generated is:
    </p>
    <p>
        <strong>
            <?php echo $newPsw ?>
        </strong> 
    </p>
</div>

    </div>

</body>
</html>



