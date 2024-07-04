<?php
session_start();

	if (!(isset($_SESSION['login1']) && $_SESSION['login1'] != '')) {

                    header ("Location: login.php");
                    
                    }

?>