<?php

require "vendor/autoload.php";
use api\Autoload;

$user = 'fantasiag';

$request = new Autoload($user);
$newuser = $request->infoUsers();
$newrepo = $request->infoRepos();
?>

/*$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/users/fantasiag', [
'auth' => ['fantasiag', 'c2u8knrt']
]);

echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'*/

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $newuser->avatar_url; ?>"
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <h3><?php echo $newuser->login; ?></h3>
                </div>
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
                <div class="card-action">
                    <a href="<?php echo $newuser->html_url; ?>">Github</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>