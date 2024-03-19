<?php

require "./partials/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">

    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <form action="">
            <label for="pw-length">How long should your password be?</label>
            <input type="number" name="pw-length" id="pw-length">
            <button type="submit" class="btn btn-outline-light">Confirm</button>
        </form>
    
        <div>
            Your new password is: 
            <?php
                if(isset($_GET['pw-length'])){
                    echo generatePassWord($_GET['pw-length']);
                }
            ?>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>