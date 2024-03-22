<?php
  // Let's include any helper classes for us to use in our markup.
  include 'application/includes/helper_includes.php';
  session_start();

  // If we don't pass in an id argument then let's assume
  // were one the home page.
  if (empty($_GET['id'])) {
    $_GET['id'] = 'home';
  }
  // Set the session pagetype variable to be the id passed in
  $_SESSION['pageType'] = $_GET['id'];

  // Start of Page Markup Generation
  include("application/views/header.php");
    // Pull the id we pass to know which page to load.
    switch($_GET['id']) {
      default:
      include ('application/views/home.php');
      break;

      case "roster":
      include ('application/views/roster.php');
      break;

      case "rank":
      include ('application/views/rank.php');
      break;

      case "servers":
      include ('application/views/servers.php');
      break;

      case "laws":
      include ('application/views/laws.php');
      break;

      case "awards": 
      include ('application/views/awards.php');
      break;

	  case "wow":
      include ('application/views/wow.php');
      break;

      case "about":
      include ('application/views/about.php');
      break;
	  
	  case "ranktest":
      include ('application/views/ranktest.php');
      break;
    }
  include("application/views/footer.php");
?>
