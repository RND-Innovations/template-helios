<?php

/**************************************/
/* Developed By : Priyankara Dilantha */
/* Contact Me 	: www.dilantha.org ****/
/**************************************/

// When you add a custom, advanced theme,
// you should remove default areas

clean_header(); // Removing default header
clean_footer(); // Removing default footer


// General 

function bind_helios_head($items) {

    $str = ''; 
    
    $str .= '<meta charset="utf-8">';
    $str .= '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">';
    
    // CSS
	$str .= '<link rel="stylesheet" href="'.RND_THEME_URL.'/assets/css/main.css">';
    
	$str .= '<noscript><link rel="stylesheet" href="'.RND_THEME_URL.'/assets/css/noscript.css" /></noscript>';
    
	return $items.$str;
}
add_filter('page_head', 'bind_helios_head');

function bind_helios_main_js_files($items) {

    $str = ''; 
    
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/jquery.min.js"></script>';
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/jquery.dropotron.min.js"></script>';
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/jquery.scrolly.min.js"></script>';
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/jquery.scrollex.min.js"></script>';
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/browser.min.js"></script>';
	$str .= '<script src="'.RND_THEME_URL.'/assets/js/breakpoints.min.js"></script>';
    $str .= '<script src="'.RND_THEME_URL.'/assets/js/util.js"></script>';
    $str .= '<script src="'.RND_THEME_URL.'/assets/js/main.js"></script>';
    
	return $items.$str;
}
add_filter('page_footer', 'bind_helios_main_js_files');


function bind_helios_body_class($items) {

    $str = ''; 
    
    if(is_home()){
	   $str .= 'homepage is-preload'; 
    }else{
	   $str .= 'no-sidebar is-preload';   
    }
    
	return $items.$str;
}
add_filter('body_class', 'bind_helios_body_class');


// Header
function bind_helios_header($items) {
    
    $str = ''; 

    $str .= '<div id="header">';
 
        // Inner --------
        $str .= '<div class="inner">';
            $str .= '<header>';
                $str .= '<h1><a href="index.html" id="logo">'.SITE_NAME.'</a></h1>';
                $str .= '<hr>';
                $str .= '<p>'.SITE_TAG.'</p>';
            $str .= '</header>';
    
            $str .= '<footer>';
                $str .= '<a href="#footer" class="button circled scrolly">Contact</a>';
            $str .= '</footer>';
    
        $str .= '</div>';
        //-------------

        // Navigation
        $str .= '<nav id="nav">';
            $str .= '<ul>';
                $str .= get_filter('rnd_top_nav',"");
            $str .= '</ul>';
        $str .= '</nav>';
    
    $str .= '</div>';
    
    
    
	return $items.$str;
}
add_filter('helios_header', 'bind_helios_header');

// Content
function bind_helios_body($items) {
    
    $str = ''; 
    
	$str .= '<div id="page-wrapper">';
    
    $str .= get_filter('helios_header',"");
    
    $str .= '<div class="wrapper style1"><div class="container">' . $items . '</div></div>';
    
    $str .= get_filter('helios_footer',"");
    
    $str .= '</div>';

	return $str;
}
add_filter('page_content', 'bind_helios_body');


// Footer
function bind_helios_footer($items) {
    
    $str = ''; 

    
    $str .= '<div id="footer">';   
    $str .= '<div class="container">';
    $str .= '<div class="row">';
    $str .= '<div class="col-12">';
    
    
        // Contact
        $str .= '<section class="contact">';
    
            $str .= '<header>';
            $str .= '<h3>'.SITE_NAME.'</h3>';
            $str .= '</header>';
            $str .= '<p>'.SITE_TAG.'</p>';
    
            $str .= '<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>';
    
        $str .= '</section>';
    
    
        // Copyright
        $str .= '<div class="copyright">';    
            $str .= '<ul class="menu">';
            $str .= '<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>';
            $str .= '</ul>';
        $str .= '</div>';
    
    $str .= '</div>';
    $str .= '</div>';
    $str .= '</div>';
    $str .= '</div>';
    
    
    /*
	$str .= '<section id="footer">';
        $str .= '<ul class="icons">';
            $str .= get_filter('rnd_footer_nav',"");
        $str .= '</ul>';
    $str .= '<p class="copyright"> © '.SITE_NAME.' '.date("Y").'.<br>Template Designer <a href="https://pixelarity.com/">Pixelarity</a> | Fonts Designer <a href="https://fontawesome.com/">FontAwesome</a></p>';
    $str .= '</section>';
    */
    
	return $items.$str;
}
add_filter('helios_footer', 'bind_helios_footer');


