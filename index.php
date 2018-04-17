<?php require "load.php";?>
<html>
 <head>
 <title>Search Engine</title>
 <link rel="stylesheet" type="text/css" href="css/logo.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="favicon.png">
 <?php head("", array("index"));?>
 </head>
 <body>
  <?php// headerElem();?>
 
   <div style="position:absolute;left:39%;top:20%;">
<span class="vetri-logo">
    <span class="vetri-V">M</span><span class="vetri-e">y</span><span class="vetri-t">S</span><span class="vetri-r">e</span><span class="vetri-i">a</span><span class="vetri-t">r</span><span class="vetri-r">c</span><span class="vetri-e">h</span>
    </span></div>
    
    <form class="searchForm" action="search.php" method="GET">
     <div id="w">
		<section id="sform">
                    <div style="position: absolute;left: 20%;top: 41%;"><input type="text" autocomplete="off" id="s" autofocus class="sfield" name="q" placeholder="Enter a search tag..."></div>
        <div style="position: absolute;left: 50%;top: 60%;"><input type="submit" name="submit" value="Search" class="submit"></div>
       </section>
		
	</div>
     
    </form>
   
  
   </body>
</html>
