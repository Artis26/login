<?php

session_start();
session_unset();
session_destroy();

//back to front after logging out
header("location: ../index.php?error=none");