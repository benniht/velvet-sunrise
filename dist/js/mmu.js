// Uploading files
jQuery('.multi_media_uploader').on('click', function( event ){
var file_frame;     
name_target = jQuery(this).attr('name');
id_target = "#" + name_target;

event.preventDefault();

// If the media frame already exists, reopen it.
if ( file_frame ) {
file_frame.open();
return;
}

// Create the media frame.
file_frame = wp.media.frames.file_frame = wp.media({
title: jQuery( this ).data( 'uploader_title' ),
button: {
text: jQuery( this ).data( 'uploader_button_text' ),
},
multiple: true // Set to true to allow multiple files to be selected
});

// When an image is selected, run a callback.
file_frame.on( 'select', function() {
// We set multiple to false so only get one image from the uploader
attachment = file_frame.state().get('selection').toJSON();
// Do something with attachment.id and/or attachment.url here
byk = attachment.length;
arr = new Array();

//for(i=0;i<byk;i++){
//    temp = attachment[i].url;
//    arr[i] = temp.replace(/%20/ig," ");
//}
//hasil = JSON.stringify(arr);

hasil = '';
for(i=0;i<byk;i++){
    temp = attachment[i].url;
    temp = temp.replace(/%20/ig," ");
    
    if(byk-1 == i){
        hasil += temp;
    }else{
        hasil += temp + "||";    
    }
}


jQuery(id_target).val(hasil);
});

// Finally, open the modal
file_frame.open();

});

