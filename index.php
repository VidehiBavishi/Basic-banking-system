<!DOCTYPE html>
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
    <title>Banking System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1" ><h1>Basic Banking system</h1></span>

</nav>
<body>
    <div class="row activity text-center">

        <div class="col-md act">
            <br><br>
            <img src="img/user1.jpg" class="img-fluid">
            <br><br>
            <button class="app-button viewcustomers btn btn-dark">View all Users</button>
        </div>
        <div class="col-md act">
            <br><br>
            <img src="img/transfer_money.jpg" class="img-fluid">
            <br><br>
            <button class="app-button transfermoney btn btn-dark">Transfer Money</button>
        </div>
        <div class="col-md act">
            <br><br>
            <img src="img/history.jpg" class="img-fluid">
            <br><br>
            <button  class="app-button transactionhistory btn btn-dark">View Transfer History</button>
        </div>
    </div>
</div>
<br>
<script>
    document.getElementsByClassName('viewcustomers')[0].addEventListener("click", () => {
        window.location.href = "viewcustomers.php"
    })
    document.getElementsByClassName('transfermoney')[0].addEventListener("click", () => {
        window.location.href = "transfermoney.php"
    })
    document.getElementsByClassName('transactionhistory')[0].addEventListener("click", () => {
        window.location.href = "transactionhistory.php"
    })
</script>
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