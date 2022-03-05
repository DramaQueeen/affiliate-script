    <table class="ui blue celled table" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Coin</th>
                <th>Name</th>
                <th>Wallet</th>
                <th>Time</th>
                <th>Reward</th>
                <th>Type</th>
                <th>Shortlink</th>
                <th>Date</th>
                <th>Link</th>
                <th>Update</th> 
                <th>Delete</th>                    
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $r):?>
            <tr>
                <td><?php echo $r['id'];?></td>
                <td><?php echo $r['coin'];?></td>
                <td><?php echo $r['name'];?></td>
                <td><?php echo $r['wallet'];?></td>
                <td><?php echo $r['time'];?></td>
                <td><?php echo $r['reward'];?></td>
                <td><?php echo $r['type'];?></td>
                <td><?php echo $r['sl'];?></td>
                <td><?php echo $r['date'];?></td>
                <td><button class="ui primary button" onclick="window.open('<?php echo $r['link'];?>', '_blank');"> <i class="external alternate icon"></i></button></td>
                <td><a href="<?php echo URL;?>update/<?php echo $r['id'];?>" class="ui orange button"> <i class="pencil alternate icon"></i></a></td>
                <td><a href="<?php echo URL;?>delete/<?php echo $r['id'];?>" class="delete ui red button"> <i class="close icon"></i></a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>