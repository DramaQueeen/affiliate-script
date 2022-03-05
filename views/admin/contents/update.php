<?php
require_once("./controllers/adminListController.php");
if(!isset($_GET['id'])){
    header ("Location:".URL);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo NAME; ?> | Update</title>
    
    <?php include('./views/admin/modules/head.php'); ?>

</head>

<body>
    <?php include('./views/admin/modules/nav.php'); ?>
    
    <div class="ui center aligned container">
        <div class="form-wrap">
            <form class="ui form" id="form" name="form" method="post" action="<?php echo URL; ?>ajax/update.php">
            <div class="field">
                <label>ID</label>
                <div class="ui disabled input">
                    <input type="disabled" value="<?php echo $_GET['id'];?>" name="id">
                </div>
            </div>
            <div class="field">
                <label>Choose a Coin</label>
                <select class="ui fluid dropdown" name="coin" required>
                    <?php
                    foreach(COIN as $coin){
                        echo '<option value="'.$coin.'">'.$coin.'</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="field">
                <label>Name:</label>
                <input type="text" placeholder="Name" name="name" required>
            </div>            
            <div class="field">
                <label>Choose a Wallet</label>
                <select class="ui fluid dropdown" name="wallet" required>
                    <?php
                    foreach(WALLET as $wallet){
                        echo '<option value="'.$wallet.'">'.$wallet.'</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Time:</label>
                    <input type="number" placeholder="Time" name="time" required>
                </div>
                <div class="field">
                    <label>Reward:</label>
                    <input type="number" placeholder="Reward" name="reward" required>
                </div>    
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Choose a Type</label>
                    <select class="ui fluid dropdown" name="type" required>
                        <?php
                        foreach(TYPE as $type){
                            echo '<option value="'.$type.'">'.$type.'</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="field">
                    <label>Shortlink</label>
                    <select class="ui fluid dropdown" name="shortlink" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>    
            </div>
            <div class="field">
                <label>Link:</label>
                <input type="text" placeholder="Link" name="link" required>
            </div>
            <button type="submit" class="ui green button">SAVE</button>
            <div id="answer"></div>
            </form>
        </div>
    </div>

    <?php include('./views/index/modules/scripts.php'); ?>
</body>

</html>