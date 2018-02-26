<?php
if (isset($_SESSION['userID']) || isset($_SESSION['user'])) {
    include_once VIEW_DIR . "navbarLogged.php";

} else {

    include_once VIEW_DIR . "navbarStd.php";

}