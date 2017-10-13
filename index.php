<?php

require "vendor/autoload.php";
use api\Autoload;

$user = 'BALLOTI';

$request = new Autoload($user);
$newuser = $request->infoUsers();
$newrepo = $request->infoRepos();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <form>
                <div class="input-field">

                         <h3><?php echo $newuser->login?></h3></div></i>
                </div>
            </form>
        </div>
    </nav>

    <div class="container">
        <h1>Informations sur un profil GitHub</h1>
           <div class="row">
               <div class="card-image col s12 l6">
                    <img src="<?php echo $newuser->avatar_url; ?>">
                    <span class="card-title"></span>
               </div>
               <div class="card-image col s12 l6">
                   <ul>
                        <a href=""></a>
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

                <div class="card-action col s4">
                    <a href="<?php echo $newuser->html_url; ?>">Go in my github</a>
                </div>
           </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
<footer>

        <div class="container white black-text">
            © 2017 Copyright Text.
        </div>

</footer>
</html>
