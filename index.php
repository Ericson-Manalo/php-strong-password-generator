<?php ?>

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
        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>

        <form action="" method="get">
            <label for="psw"> Password's length </label>
            <input type="text" name="pswLength" id="pswLength">
        </form>
    </div>

</body>
</html>

<?php 

$characters = ['qwertyuiopasdfghjklzxcvbnm', 'QWERTYUIOPASDFGHJKLZXCVBNM', '1234567890', '!"£$%&/()=?^'];
var_dump($characters);



?>
