<?php
//Start the session
session_start();

//Make the session empty
session_unset();

//Destroy the session
session_destroy();

header('location: ../index.php');