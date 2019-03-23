<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" target="#myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['email'])) { ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-cart"></span></a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                <?php } else { ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>