<?php

    if (isLogged() == 1){
        header('Location:index.php?page=membres');
    }

?>


<h2 class="header header-form">S'inscrire</h2>

<?php

if (isset($_POST['submit']))
{
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = sha1(htmlspecialchars(trim($_POST['password'])));
    

    if (email_taken($email) == 1)
    {
        $error_email = "L'adresse email est déjà utilisée...";
    }
    else
    {
        register($name, $email, $password);
        $_SESSION['tchat'] = $email;
        header('Location:index.php?page=membres');
    }
}

?>


<form method="POST" action="" id="regForm">

    <div class="field">
        <label for="name" class="field-label">Votre nom</label>
        <input type="text" class="field-input" name="name" id="name">
    </div>

    <div class="field">
        <label for="email" class="field-label">Votre adresse email</label>
        <input type="email" class="field-input" name="email" id="email">
    </div>

    <div class="field">
        <label for="password" class="field-label">Votre mot de passe</label>
        <input type="password" class="field-input" name="password" id="password">
    </div>

    <p class="error" style="color: #e74c3c;"><?php echo (isset($error_email)) ? $error_email : ''; ?></p>

    <button type="submit" name="submit">S'inscrire</button>

</form>