<?php
require_once("./controllers/listController.php");

$list = new listController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo NAME;?></title>

    <?php include ('./views/index/modules/head.php');?>

</head>
<body>

    <?php include ('./views/index/modules/nav.php');?>
    
    <div class="ui center aligned container">
        <div class="ui segment">
            <h2 class="ui blue center aligned header">The largest list to collect your favorite coins quickly and easily</h2>
            <h3 class="ui blue center aligned header">
                An easy way to earn from faucets, ptc and sl-wall to your account of: 
            </h3>
            <div class="ui list center aligned">
                <div class="item">
                    <i></i>
                    <div class="content">
                        <a href="https://expresscrypto.io/" target="_blank">Express Crypto,</a>
                    </div>
                </div>
                <div class="item">
                    <i></i>
                    <div class="content">
                        <a href="https://faucetpay.io/" target="_blank">FaucetPay, </a>
                    </div>
                </div>
                <div class="item">
                    <i></i>
                    <div class="content">
                        <a href="https://kswallet.net/" target="_blank">KSWallet, </a>
                    </div>
                </div>
                <div class="item">
                    <i></i>
                    <div class="content">
                        <a href="#" target="_blank">And Direct Payments</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui segment">
            <div class="ad-leaderboard"><?php echo AD;?></div>
        </div>
        <div class="ui segment">
            <div class="ui icon info message">
              <i class="smile icon"></i>
              <div class="content">
                <div class="header">
                  Message
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
          </div>
      </div>
  </div>
  <div class="ui segment">
    <form class="ui form" id="form" name="form" method="post" action="<?php echo URL;?>ajax/list.php">
        <div class="four fields">
            <div class="field">
                <label>Choose a Wallet</label>
                <select class="ui fluid dropdown" name="wallet">
                    <?php
                    foreach(WALLET as $wallet){
                        echo '<option value="'.$wallet.'">'.$wallet.'</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="field">
                <label>Choose a Coin</label>
                <select class="ui fluid dropdown" name="coin">
                    <?php
                    foreach(COIN as $coin){
                        echo '<option value="'.$coin.'">'.$coin.'</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="field">
                <label>Choose a Type</label>
                <select class="ui fluid dropdown" name="type">
                    <?php
                    foreach(TYPE as $type){
                        echo '<option value="'.$type.'">'.$type.'</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="field">
                <div class="btn">
                    <button type="submit" class="ui primary button">Search!</button>
                </div>
            </div>
        </div>
    </form>
    <div id="answer"></div>
</div>
<div class="ui segment">
    <div class="ad">
        <div class="ad-normal"></div>
        <div class="ad-normal"></div>
    </div>
</div>
<div class="ui segment">
    <h2 class="ui blue center aligned header">Top List</h2>
    <?php $list->list_top_controller();?>
</div>
<div class="ui segment">
    <div class="ad">
        <div class="ad-square"></div>
        <div class="ad-square"></div>
    </div>
</div>
</div>
<footer>
    <p>Some footer text</p>
    <a href="#">Powered by someone</a>
</footer>
<?php include ('./views/index/modules/scripts.php');?>

<script>
    $("table").dataTable();
</script>

</body>
</html>