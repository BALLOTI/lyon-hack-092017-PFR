<?php

require "vendor/autoload.php";
use api\Autoload;

$user = 'fantasiag';

$request = new Autoload($user);
$newuser = $request->infoUsers();
$newrepo = $request->infoRepos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>GitHub Snippet</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="blue-grey darken-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.html">Return home</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="index.html">Home</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center blue-grey-text">GitHub Portfolio</h1>
        <div class="row center">
            <h5 class="header col s12 light">Your personnal informations :</h5>
        </div>
        <div class="row center">
            <h4><?php echo $newuser->login?></h4>
        </div>
        <div class="row center">
            <img src="<?php echo $newuser->avatar_url; ?>">
        </div>
        <div class="row center">
            <h5 class="header col s12 light">Last repositories :</h5>
            <ul>
                    <?php

                    for($i = 0; $i <= 2; $i++){
                        echo "<li>" . "<a href=\"";
                        echo $newrepo[$i]->html_url;
                        echo "\">";
                        echo $newrepo[$i]->name . "</a>";
                        echo "</li>";
                    }
                    ?>
            </ul>
        </div>
        <div class="row center">
            <a href="<?php echo $newuser->html_url; ?>" id="download-button" class="btn-large waves-effect waves-light blue-grey darken-1">My Github</a>
        </div>
        <br><br>

    </div>
</div>



<footer class="page-footer blue-grey">
    <div class="container">
        <div class="row">
            <div class="col l12 s12">
                <h5 class="white-text">About</h5>
                <p class="grey-text text-lighten-4">We are a team of developers students working on this project for a hackathon, like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>