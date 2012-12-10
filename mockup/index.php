<?php
    $regex = "/[^\w\d]/" ;
    $p = preg_replace($regex, '', $_GET['p']) ;
    if (empty($p)) {
        $p = 'index' ;
    }
	
	list($width,$height) = getimagesize("color/$p.jpg") ;	
	if (!$height) { $height = 1600 ; }

?>

<html>
    
    <head>
        <title>Mockup: <?php echo $p ?></title>
        <style>
            body {
                text-align : center ;
                background: url('color/bg-grad.jpg') top left repeat-x ;
                background-color : #DCDCDC ;
                padding : 0 ;
                margin : 0 ;
            }
        
            #wireframe {
                text-align : left ;
                position : relative ;
                width : 1000px ;
                height : <?php echo $height ; ?>px ;
                margin : 0px auto ;
                background : url(color/<?php echo $p ?>.jpg) top center no-repeat ;
            }
            
			a:hover {
				border : 1px dotted red ;
			}
	    
	    a#homeLink {
		position : absolute ;
		display : block ;
		top : 15px ;
		left : 55px ;
		height : 260px ;
		width : 260px ;
	    }
	    
            #navbar {
                position : absolute ;
                top : 460px ;
                left : 20px ;
                width : 320px ;
                margin : 0 ;
                padding : 0 ;
            }
	    
	    #navbar ul {
		width : 50% ;
		float : left ;
		margin : 0 ;
		padding : 0 ;
		
		margin-bottom : 20px ;
	    }
	    
            
            #navbar li {
                margin : 0 ;
                padding : 0 ;
                list-style : none ;
            }
            
            #navbar a {
                display : block ;
                height : 32px ;
            }
	    
		#navbar a.meet {
		    height : 52px ;
		}
		
		#navbar a.contact {
		    height : 32px ;
		}
		
		#footer {
			text-align: center ;
			background: url('color/footer-grad.jpg') top left repeat-x ;	
		}
            
        </style>
    </head>
    
    <body>
        <div id='wireframe'>        
		    <a id='homeLink' href='index.php'></a>
	        <div id='navbar'>
				<ul id='navbarOR'>
				    <li><a class='office' href='?p=officeor'></a></li>
				    <li><a class='meet' href='?p=meetor'></a></li>
				    <li><a class='contact' href='?p=contact'></a></li>
				</ul>
				
				<ul id='navbarAK'>
				    <li><a class='office' href='?p=office-ak'></a></li>
				    <li><a class='meet' href='?p=meetak'></a></li>
				    <li><a class='contact' href='?p=contact'></a></li>
				</ul>
			</div>			
        </div>
        <div id="footer">
        	<img src="color/footer.jpg" alt="" />
        </div>
            
    </body>
    
</html>