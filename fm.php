<?php
    function metabox_page_jenis_design($value){
        if($value==''){
            $data = '[]';
        }
        else{
            $data = $value;
        }
        $data = stripslashes($data);
        $arr_data = json_decode($data,true);

        $arr_index = array('save_jenis_design','save_about_us_our_vision','save_about_us_our_mission','save_about_us_gambar','save_contact_us_notifikasi','save_contact_us_email_target','save_contact_us_admin_sms','save_contact_us_sms_ke','save_content_id');
        foreach($arr_index as $index){ ${$index} = ""; }
        
        foreach($arr_data as $index=>$value){
            ${$index} = esc_attr($value);
        }
        ?>
<table id='wp_table'>
<tr>
    <td class='radio_text'></td>
    <td>
<label class='radio-inline'>
    <input type='radio' name='save_jenis_design' value='none' <?php if($save_jenis_design=='none') echo "checked"; ?> /> None
</label>

<label class='radio-inline'>
    <input type='radio' name='save_jenis_design' value='gallery' <?php if($save_jenis_design=='gallery') echo "checked"; ?> /> Gallery
</label>

<label class='radio-inline'>
    <input type='radio' name='save_jenis_design' value='video' <?php if($save_jenis_design=='video') echo "checked"; ?> /> Video
</label>

<label class='radio-inline'>
    <input type='radio' name='save_jenis_design' value='contact_us' <?php if($save_jenis_design=='contact_us') echo "checked"; ?> /> Contact Us
</label>


    </td>
</tr>    
 </table>
        <?php
        if(!(($save_jenis_design == 'none')||($save_jenis_design == ''))){
            echo "<br /><hr />";
        }
        
        if($save_jenis_design == 'contact_us'){
            ?>
            <h2 style='border-bottom: 1px solid black; display:inline;'>
                Properties (Contact Us)
            </h2>
            <br /><br />
<table id='wp_table'>     

<tr>
    <td>Email to : </td>
    <td colspan="2"><input type="text" name="save_contact_us_email_target"  value="<?php echo $save_contact_us_email_target; ?>" style='width:450px;' /></td>
</tr>

</table>
            <?php
        }
        
    }
?>
<?php
    function metabox_bread_properties($value){
        if($value==''){
            $data = '[]';
        }
        else{
            $data = $value;
        }
        //$data = stripslashes($data);
        $data = str_replace("\'","&#039;",$data);
        $arr_data = json_decode($data,true);

        $arr_index = array('save_harga','save_favorite','save_url_gambar_bread');
        foreach($arr_index as $index){ ${$index} = ""; }
        
        foreach($arr_data as $index=>$value){
            ${$index} = esc_attr($value);
        }
        
        ?>    
<table id='wp_table'>

</table>            
        <?php
    }
?>