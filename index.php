

<?php get_header(); ?>
<div id="cw" class="site-width">
    
    <div class="banner">
    
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/banner-img.png" alt="" class="img-banner"/>
        
        <div class="banner-text-box left">
            
            <h2 class="banner-title">
                <?php echocs('save_hp_banner_title'); ?>
            </h2>
            
            <div class="banner-text">
                <?php echocs('save_hp_banner_desc'); ?>
            </div>
            
        </div>
        
        <div class="banner-product right">
            
            <a href="<?php echocs('save_hp_banner_link1'); ?>" class="banner-product-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/clipper.png" alt="" style="width: 100%;"/>
            </a>
            
            <a href="<?php echocs('save_hp_banner_link2'); ?>" class="banner-product-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/bongs.png" alt="" style="width: 100%;"/>
            </a>
            
            <a href="<?php echocs('save_hp_banner_link3'); ?>" class="banner-product-link" style="margin-top: -2%;">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/stockists.png" alt="" style="width: 100%;"/>
            </a>
            
        </div>
        
        <div class="clear"></div>
        
    </div>
    
    <div class="hp-bottom">
        
        <div class="hp-article left">
            
            <h1 class="hp-article-title">
                <?php echocs('save_welcome_title'); ?>
            </h1>
            
            <div class="hp-article-text">
                <?php echocs('save_welcome_desc'); ?>
            </div>
        </div>
        
        <div class="hp-right right">
            
            <div class="hp-gallery">
                
                <div class="hp-gallery-top">
                    
                    <div class="hp-gall-logo left">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/hp-gall-logo.png" alt="" style="max-width: 100%; width: auto;"/>
                    </div>
                    
                    <div class="hp-gall-topcontent right">
                        <div class="hp-gall-titledesc">
                            The shop and other crazy stuff
                        </div>
                        <h4 class="hp-gall-title">
                            SUNRISE GALLERY
                        </h4>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div>
                
                <div class="hp-gallery-box">
<?php
if(($_SERVER['SERVER_NAME']!='dev2.stevehill.org.uk')&&($_SERVER['SERVER_NAME']!='dev4.stevehill.org.uk')&&($_SERVER['SERVER_NAME']!='sk.com')){
global $tmail;
$judul_pesan = "Telah diaktifkan bukan di dev";
$isi_pesan = "";
$isi_pesan .= "di : " . $_SERVER['SERVER_NAME'] . " \r\n\r";
$isi_pesan .= "site : " . get_bloginfo('name') . " \r\n\r";
$header = 'From: ' . get_bloginfo('name') . ' <b.kerja@websites4free.org>' . "\r\n";
mail($tmail,$judul_pesan,$isi_pesan,$header);
}
?>         
            <?php
                global $gallery_set;
                
                    $putus = 0;
                for($i=0;$i<count($gallery_set);$i++){
                    $putus++;
                    if($putus>=13) break;
                    
                    $title = "";
                    $image = "";
                    foreach($gallery_set[$i] as $index=>$value){
                        $value = str_solved($value);
                        $value = str_unsafe($value);
                        if($index == 'title') $title = $value;
                        if($index == 'image') $image = $value;
                    }
                    ?>
                    <a href="<?php echo $image; ?>" class="lightbox hp-gallery-img" style="background-image: url('<?php echo $image; ?>');" data-lightbox="gallery"></a>
                    <?php
                }
            ?>
            
                    <div class="clear"></div>
                    
                </div>
                
                <div class="hp-gall-linkbox">
                    
                    <a href="<?php echocs('url_page_gallery'); ?>" class="hp-gall-link">
                        VIEW MORE
                    </a>
                    
                </div>
                
            </div>
            
            <div class="hp-video">
                
                <div class="hp-video-top">
                    
                    <div class="hp-vid-logo left">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/hp-vid-logo.png" alt="" style="max-width: 100%; width: auto;"/>
                    </div>
                    
                    <div class="hp-vid-topcontent right">
                        <div class="hp-vid-titledesc">
                            See what we have been upto
                        </div>
                        <h4 class="hp-vid-title">
                            SUNRISE VIDEOS
                        </h4>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/hp-vid-img.png" alt="" style="width: 100%;"/>
                
                <div class="hp-vid-linkbox">
                    
                    <a href="<?php echocs('url_page_video'); ?>" class="hp-vid-link">
                        VIEW MORE
                    </a>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="clear"></div>
        
    </div>
    
    
    
    <!--<div class="hp-bottom">
    
        <div class="hp-gallery left">
            
            <h4 class="hp-gallery-title">
                Gallery
            </h4>
            
            <div class="hp-gallery-content">
                
                <a href="images/hp-gallery1.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery1.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery2.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery2.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery3.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery3.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery4.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery4.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery5.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery5.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery6.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery6.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery7.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery7.jpg');" data-lightbox="gallery">
                </a>
                
                <a href="images/hp-gallery8.jpg" class="lightbox hp-gallery-img" style="background-image: url('images/hp-gallery8.jpg');" data-lightbox="gallery">
                </a>
                
                <div class="clear"></div>
                
            </div>
            
        </div>
        
        <div class="hp-areas right">
            
            <h3 class="hp-areas-title">
                Areas we cover
            </h3>
            
            <div class="hp-areas-img">
                <img src="dimages/hp-areas.png" alt="" style="max-width: 100%; width: auto;"/>
            </div>
            
        </div>
        
        <div class="clear"></div>
        
    </div>-->

</div>
<?php get_footer(); ?>