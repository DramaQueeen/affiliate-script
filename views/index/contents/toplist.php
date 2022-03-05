    <table class="ui blue celled table" id="table">
        <thead>
            <tr>
                <th>Coin</th>
                <th>Name</th>
                <th>Wallet</th>
                <th>Time</th>
                <th>Reward</th>
                <th>Type</th>
                <th>Shortlink</th>
                <th>Link</th>                   
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $r):?>
            <tr>
                <td><?php echo $r['coin'];?></td>
                <td><?php echo $r['name'];?></td>
                <td><?php echo $r['wallet'];?></td>
                <td><?php echo $r['time'];?></td>
                <td><?php echo $r['reward'];?></td>
                <td><?php echo $r['type'];?></td>
                <td><?php echo $r['sl'];?></td>
                <td><button class="ui primary button" onclick="window.open('<?php echo $r['link'];?>', '_blank');"><i class="external alternate icon"></i></button></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>