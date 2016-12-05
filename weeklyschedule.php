<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : Weekly Schedule
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nfl-ot1/games/2016/reg/7/schedule.json?api_key=794xyx4vedg34tvcjdsshke5');


// convert the string to a json object
$jfo = json_decode($json_file);


// exit(json_encode($json_file));


// exit(print_r($zero_p = $jfo->week->games));


// Games
$zero_g = $jfo->week->games;

exit(json_encode($zero_g));

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <title>NFL Application</title> -->
   
</head>

<body>
    <div class="container">

        <div class="header">
  
        <div class="content" style="margin-top:20px;">

           <h1 class="main_title">Week 7</h1>

            <table class="table table-bordered table-striped">

            <?php

            foreach ($zero_g as $post) {

                if ($post->home->alias == 'ARI') {
                    
                    $post->home->alias = 'ARZ';

                }elseif ($post->away->alias == 'ARI') {
                    
                    $post->away->alias = 'ARZ';

                }elseif ($post->home->alias == 'LA') {
                    
                    $post->home->alias = 'LAR';

                }elseif ($post->away->alias == 'LA') {
                    
                    $post->away->alias = 'LAR';
                }


            ?>
                <thead>

                    <tr>
                        <th>Away</th>
                        <th>Home</th>
                        <th>Venue</th>
                        <th>Network</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                    <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->away->alias.".png alt='".$post->away->alias."' style='width:90px;height:75px;'> ";?><?php echo $post->away->name; ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->home->alias.".png alt='".$post->home->alias."' style='width:90px;height:75px;'> ";?><?php echo $post->home->name; ?></td>
                        <td><?php echo $post->venue->name; ?><br/><?php echo $post->venue->city; ?><br/><?php echo $post->venue->state; ?><br/><?php echo $post->venue->zip; ?></td>
                        <td><?php echo $post->broadcast->network; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
            <br/>
        </div>

        
        </div><!-- content -->

        <div class="footer">
        <a href="#"></a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>