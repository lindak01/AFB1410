<?php
include('session.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Deasls-AffordMyBaby.com</title>
    
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
   <div class="wrapper">

    <header>
        <nav>
            <a class="logo" href="../index.html">Afford My Baby</a>
            <div class="mainNav">
                <a class="navlinks" href="shop.html">Shop!</a>
                <a class="navlinks" href="share.html">Share</a>
                <a class="navlinks" id="current" href="mydeals.html">My Deals!</a>
                <a class="navlinks" href="about.html">About</a>
                <a class="navlinks" href="contact.html">Contact</a>
            </div>
        </nav>
    </header>
    <div class="main">
    <h1>My Deals! Welcome: <i><?php echo $login_session; ?></i></h1>
    <div class="left">
    <article>
      <div class="date">
         <span class="month">Oct</span><br>
         <span class="day">12</span>
      </div>
        <h2>Baby Activity Mat</h2>
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
tincidunt ut laoreet dolore magna aliquam erat volutpat</h3>
               <img class="item" width="200" height="200">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim t, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat null</p>
    </article>
    
          <article>
      <div class="date">
         <span class="month">Oct</span><br>
         <span class="day">12</span>
      </div>
        <h2>Baby Activity Mat</h2>
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
tincidunt ut laoreet dolore magna aliquam erat volutpat</h3>
               <img class="item" width="200" height="200">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim t, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat null</p>
    </article>
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
        <h3>My Links</h3>
            <ul>
                <li><a href="share.html">Share</a></li><br>
                <li><a href="myaccount.html">My Account</a></li><br>
                <li><a href="logout.php">Logout</a></li>
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
                <a class="navlinks" href="shop.html">Shop!</a>
                <a class="navlinks" href="share.html">Share</a>
                <a class="navlinks" id="current" href="mydeals.html">My Deals!</a>
                <a class="navlinks" href="about.html">About</a>
                <a class="navlinks" href="contact.html">Contact</a>
            </div>
        </nav>
    </footer>           
    </div> 
</body>
</html>
