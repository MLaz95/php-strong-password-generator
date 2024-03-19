<?php
session_start();
require "./partials/head.php";
?>

<div class="container d-flex flex-column vh-100 vw-100 justify-content-center align-items-center text-break">
    <h1 class="text-center">
        Your password is: <br>
        <?php
        echo $_SESSION['userpw']
        ?>
    </h1>

    <a href="index.php">Back</a>

</div>
    
<?php
require "./partials/foot.php";
?>