<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUNTER</title>
    <link rel="stylesheet" href="css/style2.css">
    
</head>
<body>
    <div>

        <?php
        $count = file_get_contents('count.txt')
        ?>


        <?php
            if(isset($_POST['count_button'])){
                $count = file_get_contents('count.txt');
                $count++;
                file_put_contents('count.txt', $count);
            
            }
            else $count = file_get_contents ('count.txt');
        ?>
        <div class="bg_main-button">  
            <form action="#" method="post" >
                <div class="main-button">
                    <input type="submit" name="count_button" value="click" />
                </div>
                
            </form>
        </div>
    </div>

    <div class="count-view"> Счётчик кликов: <?=$count?> </div>
    

</body>
</html>


