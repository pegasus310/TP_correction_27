<?php
$password = "1234";
$msg = "";

if (isset($_POST['p'])) {
    if ($_POST['p'] === $password) {
        $msg = "Correct !";
    } else {
        $msg = "Incorrect !";
    }
}
?>

<form method="POST">
    Mot de passe : <input type="password" name="p">
    <button type="submit">Valider</button>
</form>

<?= $msg; ?>