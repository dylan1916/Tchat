<?php

    include 'functions/main-functions.php';

    $pages = scandir('pages/');
 
    if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages))
    {
        $page = $_GET['page'];
    }
    else
    {   
        $page = 'home';
    }
    // echo $page;


    $pages_functions = scandir('functions/');

    if (in_array($page.'.func.php', $pages_functions))
    {
        include 'functions/'.$page.'.func.php';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Application weeb de tchat</title>
</head>
<body>

    <?php
        include 'body/topbar.php';
    ?>

    <div class="container">
        <?php
            include 'pages/'.$page.'.php';
        ?>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <?php
            $pages_js = scandir('js/');
            if (in_array($page.'.func.js', $pages_js))
            {
                ?>
                    <script src="js/<?php echo $page ?>.func.js"></script>
                <?php
            }
        ?>
</body>
</html>