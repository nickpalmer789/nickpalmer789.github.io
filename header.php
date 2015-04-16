<?
$con = mysql_connect("localhost","nickpalm","C0l0rad012345!") or die(mysql_error());
mysql_select_db("nickpalm_contentData") or die(mysql_error());
$filename = basename($_SERVER['PHP_SELF']);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nick Palmer Design</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Roboto Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <div class="navbar navbar-inverse navbar-static-top" role="navigation"> 
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Nick Palmer Design</a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
              <!-- Determine which tab on the nav bar sould be active. -->
              <li <?
                if($filename == "index.php") {
                  echo "class=\"active\"";
                }
                ?>><a href="index.php">Home</a></li>
              <li <?
                if($filename == "portfolio.php") {
                  echo "class=\"active\"";
                }
                ?>><a href="portfolio.php">Portfolio</a></li>
              <li <?
                if($filename == "blog.php" || $filename == "blogpost.php") {
                  echo "class=\"active\"";
                }
                ?>><a href="blog.php">Blog</a></li>
              <li <?
                if($filename == "archive.php") {
                  echo "class=\"active\"";
                }
                ?>><a href="archive.php">Archive</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Social Media</li>
                  <li><a href="https://twitter.com/nickpalmer789" target="_blank">Twitter</a></li>
                  <li><a href="https://github.com/nickpalmer789" target="_blank">Github</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>