<!--Pagina de Login-->
<?php
include('header\footer/header.php');
?>
        <div class="form_login">
            <div class="overlay">

            </div>

            <div class="titleDiv">
                <h1 class="title">Intra in cont</h1>
                <span class="subtitle">Bine ai revenit!</span>
            </div>

            <form action="" method="POST">
                <div class="row grid">
                    <div class="row">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Introdu emailul tau" required>
                    </div>
                    <div class="row">
                        <label for="password">Parola</label>
                        <input type="password" id="password" name="pass" placeholder="Introdu parola ta" required>
                    </div>
                    <div class="row">
                        <input type="submit" id="submitBtn" name="submit" value="Login">
                        <span class="registerLink">Nu ai cont? <a href="register.php">Creeaza-ti unul!</a></span>
                    </div>
                </div>
            </form>
        </div>
<?php
include('header\footer/footer.php');
?>

<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM accounts WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($count == 1){
        $_SESSION['loginMessage'] = '<span class="success">Welcome back!</span>';
        header('location: ' . SITEURL . 'menu.php');
        exit();
    }
    else{
        $_SESSION['notloginMessage'] = '<span class="fail">Email sau parola gresita.</span>';
        header('location: ' . SITEURL . 'home.php');
        exit();
    }
}
?>
