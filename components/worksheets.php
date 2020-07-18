<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stylesheets/worksheets.css">
    
</head> -->

<body>
    <div class="wrapper">
        <div class="money assignCol">
            <h3>Money</h3>
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

        <div class="budgeting assignCol">
            <h3>Budgeting</h3>
            <ul>
                <li>Budget Planner    <i class="fa fa-download downloadButton"></i>​</li>
                <li>Ask your Parents​​    <i class="fa fa-download downloadButton"></i></li>
            </ul>
        </div>

        <div class="saving assignCol">
            <h3>Saving</h3>
            <div>
                ABC
            </div>
        </div>
        <div class="investment assignCol">
            <h3>Investment</h3>
            <div>
                ABC
            </div>
        </div>

        <div class="taxes assignCol">
            <h3>Taxes</h3>
            <div>
                ABC
            </div>
        </div>

        <div class="banking assignCol">
            <h3>Banking</h3>
            <div>
                ABC
            </div>
        </div>

        <div class="digitalFinance assignCol">
            <h3>Digital Finance</h3>
            <div>
                ABC
            </div>
        </div>
        <div class="moneyFrauds assignCol">
            <h3>Money Frauds</h3>
            <div>
                ABC
            </div>
        </div>
    </div>
<!-- 

</body>

</html> -->