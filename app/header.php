<?php
    require_once 'include/database.php';
    require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JOELDALTON.RU</title>
    <!--ShortCut Icon-->
    <link rel="shortcut icon" href="/public/img/favicon.ico" type="image/x-icon">
    <!-- Styles -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
              <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                     <span class="sr-only">Открыть навигацию</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a href="/" class="navbar-brand">JOEL DALTON BLOG</a>
              </div>
              <div class="collapse navbar-collapse" id="responsive-menu">
<!-- КАТЕГОРИИ С БД   <ul class="nav navbar-nav">
                      <?php
                        $categories = get_categories($link);
                      ?>
                      <?php if(count($categories) === 0): ?>
                      <li><a href="#">I♥VAPE</a></li>
                      <?php else: ?>
                      <?php
                      //$i = 0;
                      //  while($i <= 6971) {
                      //      echo '<li><a href="#">Я ЕБУСЬ В СРАКОТАН</a></li>';
                      //      $i++;
                      //  }
                      //   for($i =0; $i <= 4; $i++) {
                      //      echo '<li><a href="#">Я ЕБУСЬ В СРАКОТАН</a></li>';
                      //   }
                      //
                      ?>
                      <?php foreach ($categories as $category): ?>
                             
                      <li><a href="/category.php?id=<?=$category[id]?>"><?=$category[title]?></a></li>
                         
                      <?php endforeach; ?>
                      
                      <?php endif; ?>
                  </ul> -->
                  <ul class="nav navbar-nav">
                      <li><a href="blog">BLOG</a></li>
                      <li><a href="art">ART</a></li>
                      <li><a href="contact">CONTACT</a></li>
                  </ul>
            </div>
        </div>
    </div>