<?php
    include_once 'main.php';
?>
<section class="signup-form">
    <form class="form form--hidden" id="createAccount" action="includes/signup.inc.php" method="post">
        <h1 class="form__title">Creat Account</h1>
        <div class="form__message form__message--error"></div>
        <!-- INPUT NAME -->
        <div class="form__input-group">
            <input type="text" name="name" class="form__input" placeholder="Enter your name">
            <div class="form__input-error-message"></div>
        </div>
        <!-- INPUT EMAIL ADDRESS -->
        <div class="form__input-group">
            <input type="text" name="email" class="form__input" placeholder="Email Address">
            <div class="form__input-error-message"></div>
        </div>
        <!-- INPUT USERNAME -->
        <div class="form__input-group">
            <input type="text" name="uid" class="form__input" placeholder="Username">
            <div class="form__input-error-message"></div>
        </div>
        <!-- INPUT PASSWORD -->
        <div class="form__input-group">
            <input type="password" name="pwd" class="form__input" placeholder="Password">
            <div class="form__input-error-message"></div>
        </div>
        <!-- REPEAT PASSWORD -->
        <div class="form__input-group">
            <input type="password" name="pwdrepeat" class="form__input" placeholder="Confirm password">
            <div class="form__input-error-message"></div>
        </div>
        <!-- CONTINUE -->
        <button class="form__button" type="submit" name="submit">Continue</button>
        <p class="form__text">
            <a class="form__link" href="./" id="linkLogin">Already have an account? Sign-in</a>
        </p>
    </form>

    <container class="error_message">
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo "<p>Semua kolom wajib diisi!</p>";
                }
                elseif ($_GET["error"] == "invalidemail") {
                    echo "<p>Gunakan email yang benar!</p>";
                }
                elseif ($_GET["error"] == "invalidusername") {
                    echo "<p>Gunakan username yang benar!</p>";
                }
                elseif ($_GET["error"] == "passwordcheck") {
                    echo "<p>Password tidak sesuai!</p>";
                }
                elseif ($_GET["error"] == "stmtfailed" || $_GET["error"] == "sqlerror") {
                    echo "<p>Ada yang tidak beres, coba lagi nanti.</p>";
                }
                elseif ($_GET["error"] == "uidoremailstaken") {
                    echo "<p>Uname atau email sudah digunakan!</p>";
                }
                elseif ($_GET["error"] == "invalidusernameoremail") {
                    echo "<p>Ada yang salah dengan uname/email anda!</p>";
                }
            }
            elseif (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") {
                    echo "<p class='false'>Anda terdaftar!</p>";
                }
            }
        ?>
    </container>
</section>
