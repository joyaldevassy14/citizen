<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Portfolio</title>
<meta charset="utf-8">
<link rel="icon" href="us/images/favicon.ico">
<link rel="shortcut icon" href="us/images/favicon.ico">
<link rel="stylesheet" href="us/css/style.css">
<link rel="stylesheet" href="us/css/prettyPhoto.css">
<script src="us/js/jquery.js"></script>
<script src="us/js/jquery-migrate-1.1.1.js"></script>
<script src="us/js/superfish.js"></script>
<script src="us/js/jquery.easing.1.3.js"></script>
<script src="us/js/sForm.js"></script>
<script src="us/js/jquery.prettyPhoto.js"></script>
<script>
$(document).ready(function () {
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="header.php"><img src="us/images/dimg/logo1.png" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li><a href="header.php">Home</a></li>
             
               <li class="current"><a href="portfolio.php">Portfolio</a></li>
              <li><a href="contacts.php">Contacts</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h2>Portfolio</h2>
      </div>
      <div class="clear"></div>
      <div class="portfolio">
        <div class="grid_6"><a href="us/images/dimg/endo.jpeg" data-gal="prettyPhoto[1]"><span></span><img src="us/images/dimg/endo.jpeg" alt=""></a></div>
        <div class="grid_6"><a href="us/images/dimg/ortho.jpeg" data-gal="prettyPhoto[1]"><span></span><img src="us/images/dimg/ortho.jpeg" alt=""></a></div>
        <div class="grid_6"><a href="us/images/dimg/pros.jpeg" data-gal="prettyPhoto[1]"><span></span><img src="us/images/dimg/pros.jpeg" alt=""></a></div>
        <div class="grid_6"><a href="us/images/dimg/period.jpeg" data-gal="prettyPhoto[1]"><span></span><img src="us/images/dimg/period.jpeg" alt=""></a></div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              
              <li><a href="contacts.php">Contacts</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
  
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>