<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="en" />
        
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom-style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="navbar navbar-default navbar-fixed-top custom-bg-grey" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand custom-brand-color" href="#">Smart School</a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="active custom-nav-color"><a href="#">Home</a></li>
                      <li class="dropdown custom-nav-color"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<b class="caret"></b></a>
                          <ul class="dropdown-menu custom-dropdown">
                              <li><a href="#">My Class</a></li>
                              <li><a href="#">Goal settings</a></li>
                              <li><a href="#">Attendance</a></li>
                              <li><a href="#">Assignments</a></li>
                              <li><a href="#">Exam Board</a></li>
                              <li class="divider custom-divider"></li>
                              <li><a href="#">Academic Events</a></li>
                          </ul>
                      </li>
                      <li class="custom-nav-color"><a href="#">Library</a></li>
                      <li class="dropdown custom-nav-color"><a href="#" class="dropdown-toggle" data-toggle="dropdown">School<b class="caret"></b></a>
                          <ul class="dropdown-menu custom-dropdown">
                              <li><a href="#">Overview</a></li>
                              <li><a href="#">Transport</a></li>
                              <li><a href="#">Hostel</a></li>
                              <li><a href="#">Departments & Staff</a></li>
                              <li><a href="#">Fee & Finances</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Online Payments</a></li>
                          </ul>
                      </li>
                      <li class="custom-nav-color"><a href="#">Data center</a></li>
                      <li class="custom-nav-color"><a href="#">Social</a></li>
                  </ul>
              </div>
          </div>
          
      </div>
      
      <div class="container padding-top">
          <div class="row">
              <div class="col-sm-9">
                  <?php echo $content; ?>
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/bootstrap.min.js"></script>
  </body>
</html>
