<?php

error_reporting(E_ALL);

#DB connection
include("inc/db_conn.php");

#Left nav list of grooves
include("models/left_nav_items.php");

#Main view
include("views/master_view.php");

?>