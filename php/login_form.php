<?php
include('login.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shop!-AffordMyBaby.com</title>
    
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
   <div class="wrapper">

    <header>
        <nav>
            <a class="logo" href="../index.php">Afford My Baby</a>
            <div class="mainNav">
               <ul>
                <li><a class="navlinks" href="../pages/shop.html">Shop!</a>
                  <ul class="dropdown">
                     <li><a href="../pages/shop/clothing.html">Clothing & Acessories</a></li><br>
                     <li><a href="../pages/shop/gear.html">Baby Gear</a></li><br>
                     <li><a href="../pages/shop/diapering.html">Diapering</a></li><br>
                     <li><a href="../pages/shop/feeding.html">Feeding</a></li><br>
                     <li><a href="../pages/shop/bathing.html">Baby Bathing</a></li><br>
                     <li><a href="../pages/shop/nursery.html">Nursery</a></li><br>
                     <li><a href="../pages/shop/toys.html">Baby Toys</a></li><br>
                     <li><a href="../pages/shop/health.html">Health & Safety</a></li><br>
                  </ul>
                </li>
                <li><a class="navlinks" href="../pages/share.html">Share</a></li>
                <li><a class="navlinks" id="current" href="#">Login/Join</a></li>
                <li><a class="navlinks" href="../pages/about.html">About</a></li>
                <li><a class="navlinks" href="../pages/contact.html">Contact</a></li>
               </ul>
            </div>
        </nav>
    </header>
    <div class="main">
    <h1>Please login to view your deals!</h1>
    <div class="left">
    <section class="login">  
        <form name="login" action="" method="post" accept-charset="utf-8">
         <input type="hidden" name="submitted" id="submitted" value="1">
        <ul>  
            <li><label for="useremail">Username or Email:</label>  
            <input id="inputbx" type="email" name="useremail" placeholder="yourname@email.com" required></li>  
            <li class="pass"><label for="password">Password:</label>  
            <input id="inputbx" type="password" name="password" placeholder="password" required></li>  
            <li>  
            <input class="loginbtn" name="submit" type="submit" value="Login"></li>
        </ul>
        <p class="forgot">Forgot your <a href="">Username </a>or <a href="">Password</a>?</p>
     </form>
	<span><?php echo $error; ?></span>
    </section>
    </div>
    <div class="right">
    <aside class="search">
      <div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" id="tfq" class="tftextinput4" name="q" size="18" maxlength="120"><input type="submit" value=" " class="tfbutton4">
		</form>
		<div class="tfclear"></div>
      </div>
      <p>Search Deals!</p>
    </aside>
    
    <aside class="links">
        <h3>Not a member?</h3>
            <ul>
                <li><a href="join.html">Join Now!</a></li>
            </ul>
    </aside>
    </div>
    <div class="clear"></div>
    </div>
    <footer>
        <p>
            All Rights Reserved. Copyright 2014 Linkda Media.
        </p>
            <nav>
            <a class="logo" href="../index.html">Afford My Baby</a>
            <div class="mainNav">
                <a class="navlinks" href="../pages/shop.html">Shop!</a>
                <a class="navlinks" href="../pages/share.html">Share</a>
                <a class="navlinks" id="current" href="#">Login/Join</a>
                <a class="navlinks" href="../pages/about.html">About</a>
                <a class="navlinks" href="../pages/contact.html">Contact</a>
            </div>
        </nav>
    </footer>           
    </div> 
</body>
</html>

