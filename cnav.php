<!DOCTYPE html>
<html lang="en">
<head> 
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home_page</title>
</head>
<body>
    <div class="navbar navbar-inverse invbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">MarketForSure</a>
            </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a> </li>
                    <li><a href="#">About Us</a>></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
                <div class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" typr="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                        </div>
                    </div>
                </div>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.html"><span></span></a></li>
                <!-- <li><a href="login.html"><span>Login</span></a></li> -->
                <?php
                    $row = $_SESSION['username'];
                    echo '<li style="color: white; margin-right: 4px; margin-top:13px;">'.$row[1]."</li>";
                    echo '<li style="background-color: # 648078; margin-right: 4px; margin-top:13px;"><form action="logout.php" method="POST"><input type="submit" value="LogOut"></form></li>';
                ?>
                
             </ul>
        </div>
    </div>
</body>
</html>