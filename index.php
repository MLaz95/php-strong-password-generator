<?php
session_start();

require "./partials/functions.php";

if(isset($_GET['pw-length'])){
    $_SESSION["userpw"] = generatePassWord($_GET['pw-length'], $_GET['letters'], $_GET['numbers'], $_GET['symbols'], $_GET['norepeat']);
    header('Location: ./form_output.php');
}

require "./partials/head.php";

?>


    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <form action="index.php" class="d-flex flex-column gap-2">
            <div>
                <label for="pw-length">How long should your password be?</label>
                <input type="number" name="pw-length" id="pw-length">
                <button type="submit" class="btn btn-outline-light">Confirm</button>
            </div>

            <div class="d-flex justify-content-center align-items-center gap-4">
                <div>
                    <label for="letters">Letters</label>
                    <input type="checkbox" name="letters" id="letters">                    
                </div>
                <div>
                    <label for="numbers">Numbers</label>
                    <input type="checkbox" name="numbers" id="numbers">                    
                </div>
                <div>
                    <label for="symbols">Symbols</label>
                    <input type="checkbox" name="symbols" id="symbols">                    
                </div>
                <div>
                    <label for="norepeat">No Repeats</label>
                    <input type="checkbox" name="norepeat" id="norepeat">                    
                </div>
            </div>
        </form>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require "./partials/foot.php";
?>