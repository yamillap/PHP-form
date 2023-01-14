<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lab08.css">
    <title>PHP Form</title>
    
</head>

<body>
    <div class="problem">
        <div>
            <h3>Problem 1</h3>
            <?php
            date_default_timezone_set('America/Toronto');
            $curr_time = date("H");

            if ($curr_time < "12"){
                echo "<img src= morning.jpg height= 370 width= 300px>";
                echo "<figcaption style= 'position: absolute; top: 62%; left: 50%; text-align: center; color: white; font-size: 1.8em; font-family: Times New Roman';>Good morning</figcaption>";

            }
            else if ($curr_time >= "12" && $curr_time < "16"){
                echo "<img src=afternoon.jpg height= 370 width= 300px>";
                echo "<figcaption style= 'position: absolute; top: 62%; left: 50%; text-align: center; color: white; font-size: 1.8em; font-family: Times New Roman';>Good afternoon</figcaption>";

            }
            else if ($curr_time >= "16" && $curr_time < "21"){
                echo "<img src= evening.jpg height= 370px width= 300px>";
                echo "<figcaption style= 'position: absolute; top: 62%; left: 50%; text-align: center; color: white; font-size: 1.8em; font-family: Times New Roman';>Good evening</figcaption>";
            }
            else if ($curr_time >= "21"){
                echo "<img src= night.jpg height= 370px width= 300px >";
                echo "<figcaption style= 'position: absolute; top: 62%; left: 51%; text-align: center; color: white; font-size: 1.8em; font-family: Times New Roman';>Good night</figcaption>";
            }
        
            ?>
        </div>   
    </div>
    
    <div class="problem">
        <div class="form">
            <form id="form1" method="post" action="lab08b.php" target="_blank">
                <h3>Problem 2</h3>

                <div style="padding: 5px 10px; ">
                    <label>Enter the first integer (must be between 3-12)</label> 
                    <input type="number" name="first" required>
                </div>
        
                <div style="padding: 5px 10px;">
                    <label>Enter the second integer (must be between 3-12)</label>
                    <input type="number" name="second" required>
                </div>
                
                <button type="submit" value="Click">Submit</button>
            </form>
        </div>
    </div>

    <div class="main-left">
        <?php 
        if (!isset($_COOKIE['count']))
        {
            $cookie = 1;
            setcookie("count", $cookie);
        }
        else
        {
            $cookie = ++$_COOKIE['count'];
            setcookie("count", $cookie);
            echo "<p style= 'font-size: 1.2em; font-family: Times New Roman;'>Total times you visted this page: " .$_COOKIE['count']; 
        }
        ?> 
        
    </div>

    <div style="position: absolute; top: 0; right: 10px; width: 250px;" class="block">
        <p style="font-size: 15px; font-family: Times New Roman;">Pick a gif to add to the query string: ghost3.gif, moonwitch.gif, jacklantern.gif</p>
        <?php
        $file = substr($_SERVER['QUERY_STRING'],6);
            if ($file){
                echo "<p style='font-size: 12px; font-family: Times New Roman;'>Halloween image is</p> " . $file;
                echo "<img style='opacity: 0.7; width: 250px; height: 250px;' src='$file'>";
            }
        ?>
    </div>


    
        
    
</body>
</html>
