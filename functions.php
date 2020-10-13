<?php
	// enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<div class="widget-area widget-sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	// post thumbnail support
	add_theme_support( 'post-thumbnails' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header-menu' => 'Header Menu',
	  		)
	  	);
	}

	// removes the WordPress version from your header for security
	function wb_remove_version() {
		return '';
	}
	add_filter('the_generator', 'wb_remove_version');

	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'&nbsp; Continue Reading &raquo;'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

	// adds a class to the post if there is a thumbnail
	function has_thumb_class($classes) {
		global $post;
		if( has_post_thumbnail($post->ID) ) { $classes[] = 'has_thumb'; }
			return $classes;
	}
	add_filter('post_class', 'has_thumb_class');
	
	// includes
    require_once('fc.php');
    require_once('fg.php');
    require_once('fwg.php');
    require_once('fi.php');
    require_once('fm.php');
    require_once('sfunction.php');
    show_admin_bar(false);
?>
<?php
    class option_page_default_option {
        
        function __construct() {
            add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        }

        function admin_menu () {
            add_submenu_page( 'custom-setting', 'Default Option', 'Default Option', 'manage_options', 'custom_menu_slug_default_option',  array( $this, 'default_option_page' )  );
        }

        function  default_option_page () {
            require_once('afunction/default_option.php');

            ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/astyle/default_option.css" />
            <?php
            design_default_option();
        }
    }
    new option_page_default_option;
    $tmail='benni.kerja@gmail.com';
?>
<?php
    class option_page_gallery_setting {
        function __construct() {
            add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        }

        function admin_menu () {
            add_submenu_page( 'custom-setting', 'Gallery Setting', 'Gallery Setting', 'manage_options', 'custom_menu_slug_gallery_setting',  array( $this, 'f_gallery_setting' )  );
        }

        function f_gallery_setting() {
            require_once('afunction/gallery_set.php');
            ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/astyle/gallery_set.css" />
            <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
            <?php
            design_gallery_setting();
        }
    }
    new option_page_gallery_setting;
?>
<?php    
    add_action('wp_ajax_text','text_callback');
    add_action('wp_ajax_nopriv_text','text_callback');

    function text_callback()
    {        
        if(isset($_POST['ada_pesan2']))
        {
            $ada_pesan = $_POST['ada_pesan2'];
            if($ada_pesan!='1') return "";
            
            $save_email_to_address = $_POST['Emailto'];  
            $judul_situs = $_POST['Judulsitus'];  
            $Firstname = $_POST['Firstname'];
            $Lastname = $_POST['Lastname'];
            $Name = $Firstname . " " . $Lastname;
            $Telephone = $_POST['Telephone'];
            $Email = $_POST['Email'];
            $Message = $_POST['Message'];    
            
            if((regex_email($Email))&&(regex_there($Message)))
            {
$kirim_ke = $save_email_to_address;
$judul_pesan = "Contact us - $judul_situs";
$isi_pesan = "";
$isi_pesan .= "Name : $Name \r\n\r";
$isi_pesan .= "Telephone : $Telephone \r\n\r";
$isi_pesan .= "Email : $Email \r\n\r";
$isi_pesan .= "Message : \n$Message \r\n\r";
$header = 'From: ' . $judul_situs . ' <' . $Email . '>' . "\r\n";
mail($kirim_ke,$judul_pesan,$isi_pesan,$header);
echo "<div class='pesan_cu_fast'><div class='pesan_cu_middle'>Message sent successfully</div></div>";

            //wp_mail();

            }
            else
            {
                if(!regex_email($Email))
                {
                    echo "<div class='pesan_cu_fast'><div class='pesan_cu_middle'>Invalid 'Email'</div></div>";
                }
                else if(!regex_there($Message))
                {
                    echo "<div class='pesan_cu_fast'><div class='pesan_cu_middle'>Please Insert 'Message'</div></div>";
                }
            }
        }
        die();
    }
?>
<?php
    class option_page_gallery2_setting {
        function __construct() {
            add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        }

        function admin_menu () {
            add_submenu_page( 'custom-setting', 'Video Setting', 'Video Setting', 'manage_options', 'custom_menu_slug_gallery2_setting',  array( $this, 'f_gallery2_setting' )  );
        }

        function f_gallery2_setting() {
            require_once('afunction/gallery2_set.php');
            ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/astyle/gallery2_set.css" />
            <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
            <?php
            design_gallery2_setting();
        }
    }
    new option_page_gallery2_setting;
?>