<?php
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Futevôlei P10");
  $pageData->setCss("<link rel='stylesheet' href='statics/style.css'>");
  // include_once "models/database.php";

  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked) {
    $controller = $_GET['page'];
  } else {
    $controller = 'home';
  }

  include_once "controllers/$controller.php";
  $pageData->setContent($header);
  $pageData->appendContent($main);
  $pageData->appendContent($footer);

  include_once "views/page.php";
  echo $page;
?>