<!--Pagina de Register a new account-->
<?php
include('header\footer/header.php');
?>
    <div class="form_login">
        <div class="overlay">

        </div>

        <div class="titleDiv">
            <h1 class="title">Creeaza-ti contul</h1>
            <span class="subtitle">Multumim ca ne-ai ales pe noi!</span>
        </div>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="first_name">Nume</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Introdu numele tau" required>
                </div>
                <div class="row">
                    <label for="last_name">Prenume</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Introdu prenumele tau" required>
                </div>
                <div class="row">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Introdu emailul tau" required>
                </div>
                <div class="row">
                    <label for="password">Parola</label>
                    <input type="password" id="password" name="pass" placeholder="Introdu parola ta" required>
                </div>
                <div class="row">
                    <label for="phone">Telefon</label>
                    <input type="text" id="phone" name="phone" placeholder="Introdu numarul de telefon" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Creeaza cont">
                    <span class="registerLink">Ai deja cont? <a href="home.php">Intra in cont</a></span>
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
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO accounts SET
    email = '$email',
    pass = '$pass',
    first_name = '$fName',
    last_name = '$lName',
    phone = '$phone'

    ";

    $res = mysqli_query($conn, $sql);
    if($res==true){
        $_SESSION['accountCreated'] = '<span class="success">Cont creat cu succes!</span>';
        header('location' . SITEURL . 'home.php');
        exit();
    }

    else{
        $_SESSION['unSuccessful'] = '<span class="fail">Contul nu a fost creat</span>';
        header('location' . SITEURL . 'register.php');
        exit();
    }
}
?>
