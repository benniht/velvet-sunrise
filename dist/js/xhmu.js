// Uploading files
jQuery('.media_uploader').on('click', function( event ){
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
multiple: false // Set to true to allow multiple files to be selected
});

// When an image is selected, run a callback.
file_frame.on( 'select', function() {
// We set multiple to false so only get one image from the uploader
attachment = file_frame.state().get('selection').first().toJSON();
// Do something with attachment.id and/or attachment.url here
temp = attachment.url;
temp = temp.replace(/%20/ig," ");
temp = temp.replace(/http:\/\//ig,"");
jQuery(id_target).val(temp);
});

// Finally, open the modal
file_frame.open();

});

