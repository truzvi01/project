<?php 


  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/patternfly/3.24.0/css/patternfly.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/patternfly/3.24.0/css/patternfly-additions.min.css" />
        <link rel="stylesheet" href="css/user.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>NHS User Management</title>
    </head>
    <body>
        <!--Start of Nav-Bar Header -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h1 class="nhs-header">NHS User Management </h1>
                </div>
                <!--End of Nav-Bar Header -->
                <!-- Start of Commonlinks -->
                <div id="commonlinks">
                    <ul class="nav navbar-nav navbar-right fixed-top">
                        <li class="active"><a href="login.php"><span
                                    class="glyphicon glyphicon-user"></span> Logout </a></li>
                    </ul>
                </div>
                <!-- End of Commonlinks -->
                <!-- Start of Page-Heading, Nhs-Logo and Navigation-Icons -->
            </div>
        </nav>
        <!-- End of Start of Commonlinks -->