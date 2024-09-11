<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">    
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/script.js"></script>
	<script src="search/search.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!--==============================header=================================-->
    <header>
    	<div class="main">
        	<div class="head-box1">
            <h1><a class="logo" href="index.html">logo</a></h1>
            <div class="head-box2">
            <form id="search" action="search.php" method="GET">
                <input type="text" name="s">                               
						<a onClick="document.getElementById('search').submit()" class="search-button"></a>
                  <div class="clear"></div>
            </form>
            <div class="clear"></div>
             <nav>
                <ul class="sf-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index-1.html">Company</a></li>
                    <li><a href="index-2.html">Services</a>
                    	<ul>
                            <li><a href="more.html">Services List</a></li>
                            <li><a href="more.html">Overview</a>
                            	<ul>
                                    <li><a href="more.html">Analysis</a></li>
                                    <li><a href="more.html">Development</a></li>
                                    <li><a href="more.html">Maintaining</a></li>
                                    <li><a href="more.html">Support</a></li>
                                </ul>
                            </li>
                            <li><a href="more.html">How It Works</a></li>
                            <li><a href="more.html">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a href="index-3.html">Blog</a></li>
                    <li class="last2"><a href="index-4.html">Contacts</a></li>
                </ul>
            </nav>
            </div>
            <div class="clear"></div>
            </div>           
        </div>
      </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container_12">
            	<div class="wrapper">
                	<article class="grid_12">
                    <h3>Search result:</h3>
                    <div id="search-results"></div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="foot-page1">
            	Doing Biz&nbsp; &copy; 2012 <a href="index-5.html">Privacy Policy</a>  
            </div>
            <a class="soc-link" href="more.html"></a>
            <div class="clear"></div>        	
        </div>
    </footer>
</body>
</html>