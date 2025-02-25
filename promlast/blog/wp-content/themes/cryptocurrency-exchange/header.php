<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/styles/prom.css?v=1.3">
	<link rel="stylesheet" href="/styles/mediaqueries.css?v=1.3">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"?v=1.3>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"?v=1.3 />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<main>
	
	<!-- Custom Header -->
	<div class="navwrap2 abs sticky" id="myNavwrap">
               <nav>
                  <div class="navwrap" id="myNavwrap1">
                     <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."navbar.php"); ?>
                     </span> 
                  </div>
               </nav>
            </div>
			<div class="site-footer">
			<div class="module-extra bg-dark">
				<div class="container">
					<div class="row">
						<?php 
						
						if ( is_active_sidebar( 'footer-widget' ) ){
							dynamic_sidebar( 'footer-widget' );
						} ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part('site-info'); ?>
		</div>
		
	
	

        

       
	
	<!--Header Info-->	

	<!--/End of Header Info-->

	<script>
		//For Menu Drop-down Focus (sub-menu)
		const topLevelLinks = document.querySelectorAll('.dropdown-toggle');
		console.log(topLevelLinks);
		
		topLevelLinks.forEach(link => {
		  if (link.nextElementSibling) {
			link.addEventListener('focus', function() {
			  this.parentElement.classList.add('focus');
			});

			const subMenu = link.nextElementSibling;
			const subMenuLinks = subMenu.querySelectorAll('a');
			const lastLinkIndex = subMenuLinks.length - 1;
			const lastLink = subMenuLinks[lastLinkIndex];

			lastLink.addEventListener('blur', function() {
			  link.parentElement.classList.remove('focus');
			});
		  }
		});
		var navList = document.getElementById("nav-lists");
function Show() {
  
navList.classList.add("_Menus-show");
      document.getElementById("myNavwrap1").style.height = "0px";
    document.getElementById("navimgid").style.marginTop = "120px";
   
}

function Hide(){
    
navList.classList.remove("_Menus-show");
    document.getElementById("myNavwrap1").style.height = "120px";
    document.getElementById("navimgid").style.marginTop = "0px";
}
    
window.onscroll = function() {myFunction1()};

var header = document.getElementById("myNavwrap");
var sticky = navwrap2.offsetTop;

function myFunction1() {
  if (window.pageYOffset >100) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}    
	</script>
	