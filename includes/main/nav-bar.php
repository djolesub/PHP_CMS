<!-- Navbar -->
<?php $user = "D";?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Arhives</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <!-- Search Bar -->
                    <div class="col-sm-3 col-md-12">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> SignUp</a></li>
                <?php if($user){
                        echo ' <li><a href="logout.php"><span class="glyphicon glyphicon-of"></span> Logout</a></li>';
                    }else {
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
                    }
                ?>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-cog"></span> Your Account</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Create Post</a></li>

                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
