<?php
session_start();

require "./partials/functions.php";

if(isset($_GET['pw-length'])){
    $_SESSION["userpw"] = generatePassWord($_GET['pw-length']);
    header('Location: ./form_output.php');
}

require "./partials/head.php";
?>



    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <form action="">
            <label for="pw-length">How long should your password be?</label>
            <input type="number" name="pw-length" id="pw-length">
            <button type="submit" class="btn btn-outline-light">Confirm</button>
        </form>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require "./partials/foot.php";
?>