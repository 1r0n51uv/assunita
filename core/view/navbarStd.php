<div id="navbar">

    <?php

    if($_SERVER['REQUEST_URI'] == '/login') {
        echo '<nav class="navbar navbar-ct-danger" role="navigation">';
    } else if($_SERVER['REQUEST_URI'] == '/') {
        echo ' <nav class="navbar navbar-ct-primary" role="navigation">';
    } else if($_SERVER['REQUEST_URI'] == '/home') {
        echo ' <nav class="navbar navbar-ct-primary" role="navigation">';
    } else if($_SERVER['REQUEST_URI'] == '/registration') {
        echo ' <nav class="navbar" style="background-color: #2F3042" role="navigation">';
    }

    ?>







    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#">Unita</a>

        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Idee?</a></li>

                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a></li>

                <li><a href="/about"><i class="fa fa-rss" aria-hidden="true"></i> Chi siamo?</a></li>


            </ul>

            <ul class="nav navbar-nav" style="float: right">
                <li><a href="login"><i class="fab fa-facebook-square" aria-hidden="true"></i> Accedi</a></li>

            </ul>


        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->

    </nav>

</div><!--  end navbar -->