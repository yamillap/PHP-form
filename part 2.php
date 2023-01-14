<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error!</title>
</head>
<body>

    <?php
        if ((isset($_POST['first'])) && (isset($_POST['second'])))
        {
            $first = $_POST['first'];
            $second = $_POST['second'];
            
        }

        if ($first < 3 || $first > 12 || $second < 3 || $second > 12){
            echo "<br><p style='text-align: center; '> Error! One of your inputs is either less than 3 or greater than 12</p>";
            echo "<p style='text-align: center;'>Please go back and try again</p>";
        }

        else {
            echo "<h2 style= 'text-align: center;'> Multiplication Table</h2>";
            echo "<table border=\"3\" style= 'width: 200px; height: 150px; margin: auto;'>";

            
            for ($i = 1; $i <= $first; $i++){
                echo('<tr>');

                for ($j = 1; $j <= $second; $j++){
                    if ($j == 1){
                        echo ('<td>'.$i*$j. '</td>');
                    }
                    else {
                        echo ('<td>' .$i*$j. '</td>');
                        
                    }
                }
                echo "<br>";
            }
            echo("</table>");

        }

        
      
    ?>
</body>
</html>
