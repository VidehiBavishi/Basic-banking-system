<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view-customer.css">
</head>
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1"><h1>Transfer History</h1></span>
</nav><br>
<body>
    <?php
        require_once("conn.php");
        $sql = "select tr_sender, tr_receiver, amount, message, date, time from transfers";
        $res = mysqli_query($conn, $sql);
        $temp = mysqli_fetch_all($res, MYSQLI_NUM);
        $arr = array_reverse($temp);
    ?>
    <div class="main-content">
        <table class="table   table-striped table-hover table-bordered ">
        <thead class="thead">
            <tr>
            <th scope="col"><h5>Sender</h5></th>
            <th scope="col"><h5>Receiver</h5></th>
            <th scope="col"><h5>Date</h5></th>
            <th scope="col"><h5>Time</h5></th>
            <th scope="col"><h5>Message</h5></th>
            <th scope="col"><h5>Amount</h5></th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($arr as $element){
        ?>
            <tr>
                <td><?php echo $element[0];?></td>
                <td><?php echo $element[1];?></td>
                <td><?php echo $element[4];?></td>
                <td><?php echo $element[5];?></td>
                <td><?php echo $element[3];?></td>
                <td><?php echo $element[2];?></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>
<body>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <a href="index.php"><li>Home page</li></a>
                            <a href="viewcustomers.php"><li>View customers</li></a>
                            <a href="transfermoney.php"><li>Transfer Money</li></a>
                            <a href="transactionhistory.php"><li>Transaction history</li></a>
                        </ul>
                    </div>
                    
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contact</h3>
                        <ul>
                            <li><i class="fa fa-home"></i> Pune</li>
                            <li><i class="fa fa-phone"></i>  7276083110</li>
                            <li><i class="fa fa-envelope"></i> videhi.bavishi19@vit.edu</li>
                        </ul>
                    </div>

                    <div class="col-md-6 item text">
                        <h3>About</h3>
                        <p>A Web Application used to transfer money between multiple users (Project contains 10 dummy users). A dummy user can also be created.</p>
                    </div>
                </div>
                <p class="copyright">Videhi Bavishi © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>