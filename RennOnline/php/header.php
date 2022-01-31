<link rel="stylesheet" type="text/css" href="'php/imagine/fix.css">

<style>

.dropdown {
  position: relative;
 
  display: inline-block;
  
}

.dropbtn {
  background-color: #01001c;
  color: white;
  font-weight:bold;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #bacff5;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius:5px;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
 font-size:15px;
}


.dropdown-content a:hover {
background-color:#a9c8f5;
}


.dropdown:hover .dropdown-content {display: block;}


.dropdown:hover .dropbtn {;
text-shadow:1px 1px 1px white;}

.navbar {
	allign-text:justify;
	list-style: none; /* Bara sus*/
	float:left;
	padding: 0;
	margin: 0;
	position: relative;
	width:103%;
	height:75px;
	margin-top:-1px;
	left:-1%;
	background:#01001c;
	border-radius:5px;
	 overflow:hiddeen;
	 border-top:1px solid black;
	
	
display:flex;}

	
	.element { /* element din lista*/
     margin:0 auto;
	 padding:0;
	 color:white;
	 font-size:28px;
	 text-decoration:none;
	 font-weight:bold;
	 font-family:sans-serif;
	}
	
	.element a { /* link eelement din lista */
	text-decoration:none;
	color:inherit !important ;
	
	
	}
	
	 a:hover{ /* hover link */
	 color:white;
	 text-shadow:1px 1px 1px white;
	 
	 }
	
	.patrat {
	float:right;
	
	position: relative;
	padding: 0;
	margin: 0;
	left:2%;
	width:103%;
	margin-top:-1%;
	
	height:40px;
	background: url("php/imagine/1.jpg"); 
	background-size:contain;
	 
	;
	
	
}
	
.logo{
	height:140px;
	width:240px;
	border-radius:50%;
	position:relative;
	left:40%;
	margin-top:-8%;
	z-index:1;
}

</style>
<header id="header">

<div class="patrat">
</div>
   
	<nav class="navbar">
	
      
        
		<li class="element" style="position:absolute;left:1%;">
		<div class="dropdown">
  <button class="dropbtn">Echipamente</button>
  <div class="dropdown-content">
    <a href="magazin.php">Iarna</a>
    <a href="magazin.php#toamna">Toamna</a>
    <a href="magazin.php#primavara">Primavara</a>
	 <a href="magazin.php#vara">Vara</a>
  </div>
</div>
</li>
<li class="element"style="position:absolute;left:13%;"><div class="dropdown">
  <a href="magazin.php#imbracaminte"> <button class="dropbtn">Imbracaminte</button></a>
  <div class="dropdown-content">
    
    
  </div>
</div></li>
<li class="element"style="position:absolute;left:25%;"><div class="dropdown">
 <a href="magazin.php#accesorii"> <button class="dropbtn">Accesorii</button></a>
  <div class="dropdown-content">
    
   
  </div>
</div></li>

		
		
		<button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        style="z-index:1;float:right;">
            <span class="navbar-toggler-icon"></span>
        </button>
		 
 <a href="cart.php" class="nav-item nav-link active">

	  
      <h5 style=";color:white;position:relative;left:590%;">Cosul Meu</h5></a>
	  <i class="fas fa-shopping-cart"style="color:white;margin-right:20px;font-size:20px;margin-left:-30px;"></i>
	 
                      
                    </h5>
                </a>
            </div>
        </div>

    </nav>
	<a href="index.html"> <img src="php/imagine/logo3.jpg" class="logo"></a>
</header>






