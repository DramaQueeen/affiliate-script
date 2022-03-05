<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo NAME; ?></title>

    <?php include ('./views/index/modules/head.php');?>

</head>

<body>

<?php include ('./views/index/modules/nav.php');?>

    <div class="ui center aligned container">
        <div class="form-wrap">
            <form class="ui form" id="form" name="form" method="post" action="<?php echo URL; ?>ajax/signin.php">
                <div class="field">
                    <label>Username:</label>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="field">
                    <label>Password:</label>
                    <input type="password" placeholder="Password" name="password">
                </div>            
                <button class="ui primary button" class="button" type="submit">SIGN IN</button>
            </form>
            <div id="answer"></div>
        </div>
    </div>

<?php include('./views/index/modules/scripts.php'); ?>

</body>


</html>