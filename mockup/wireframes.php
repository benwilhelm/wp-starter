<?php
    $regex = "/[^\w\d]/" ;
    $p = preg_replace($regex, '', $_GET['p']) ;
    if (empty($p)) {
        $p = 'index' ;
    }
	
	$info = array(
				  'index'		=> array('height'=>1600) ,
				  'office'		=> array('height'=>888) ,
				  'meet'		=> array('height'=>1371) ,
				  'insurance'		=> array('height'=>928) ,
				  'contact'		=> array('height'=>1080)
				  ) ;
	
	$height = $info[$p]['height'] ? $info[$p]['height'] : 1600 ;
?>

<html>
    
    <head>
        <title>Wireframe: <?php echo $p ?></title>
        <style>
            body {
                text-align : center ;
                background-color : #FFF ;
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
		top : 0 ;
		left : 20px ;
		height : 320px ;
		width : 320px ;
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
		    clear : both ;
		    width : 310px ;
		    height : 50px ;
		}
            
        </style>
    </head>
    
    <body>
        <div id='wireframe'>
	    <a id='homeLink' href='index.php'></a>
            <div id='navbar'>
		<ul id='navbarOR'>
		    <li><a class='office' href='?p=office'></a></li>
		    <li><a class='meet' href='?p=meet'></a></li>
		    <li><a class='insurance' href='?p=insurance'></a></li>
		</ul>
		
		<ul id='navbarAK'>
		    <li><a class='office' href='?p=office'></a></li>
		    <li><a class='meet' href='?p=meet'></a></li>
		    <li><a class='insurance' href='?p=insurance'></a></li>
		</ul>
		
		<a class='contact' href='?p=contact'></a>
            </div>
            
            <?php if ($p == 'workshops') : ?>
            <a class='workshop-link' id='workshopLink1' href='?p=workshop'></a>
            <a class='workshop-link' id='workshopLink2' href='?p=workshop'></a>
            <a class='workshop-link' id='workshopLink3' href='?p=workshop'></a>
            <a class='workshop-link' id='workshopLink4' href='?p=workshop'></a>
            <?php endif ; // $p == workshops ?>

            <?php if ($p == 'workshop') : ?>
            <a id='backToWorkshops' href='?p=workshops'></a>
            <?php endif ; // $p == workshop ?>
        </div>
    </body>
    
</html>