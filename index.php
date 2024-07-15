<?php
  $nav = "";
  $info = "";
  include_once 'views/navigation.php';
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Futevôlei P10");
  $pageData->setCss("<link rel='stylesheet' href='style.css'>");
  $pageData->setContent($nav);
  // include_once "models/database.php";
  include_once "controllers/home.php";
  $pageData->appendContent($info);
  include_once "views/page.php";
  echo $page;
?>