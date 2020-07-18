<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assign.css">
    <title></title>
</head> -->

<!-- <body> -->
<div class="wrapper">
    <div class="digiAge assignCol">
        <h3>Finance in Digital Age</h3>
        <ul>
            <?php
                    require 'connection.php';
                    $list = "";
                    $i="";
                    $query = "SELECT * FROM `pdf`";
                    $data = mysqli_query($conn, $query);
                    $row= mysqli_num_rows($data);

                    for($i=1 ; $i <= $row ; $i++){
                        $query = "SELECT * FROM `pdf` WHERE id=$i"; 
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_fetch_assoc($data);                                                           
                            echo "<li><a style='text-decoration: none; color: white;' download href=";
                            echo $result['location'];
                            echo ">";
                            echo $result['name'];
                            echo "<i class='fa fa-download downloadButton'></i>​​</a></li>";                                       
                    }
                ?>
        </ul>
    </div>

    <div class="moneyMgmt assignCol">
        <h3>Money Management</h3>
        <ul>
            <li>S6.a. xxxxxx​    <i class="fa fa-download downloadButton"></i></li>
            <li>S7.a. xxxxxx    <i class="fa fa-download downloadButton"></i>​</li>
        </ul>
    </div>

    <div class="practFinance assignCol">
        <h3>Practical Finance</h3>
        <div>
            ABC
        </div>
    </div>

    <div class="valueMoney assignCol">
        <h3>Value for Money</h3>
        <div>
            ABC
        </div>
    </div>

    <div class="sit assignCol">
        <h3>S, I and T</h3>
        <div>
            ABC
        </div>
    </div>

    <div class="futureFinance assignCol">
        <h3>Future in Finance</h3>
        <div>
            ABC
        </div>
    </div>
</div>

<!-- 
</body>

</html> -->