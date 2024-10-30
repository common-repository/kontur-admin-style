jQuery(document).ready(function($){
  var mediaUploader;
  $('#kontur_admin_style_login_background_upload_image_button').click(function(e) {
    e.preventDefault();
      if (mediaUploader) {
      mediaUploader.open();
      return;
    }
    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
      text: 'Choose Image'
    }, multiple: false });
    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#kontur_admin_style_login_background_image').val(attachment.url);
    });
    mediaUploader.open();
  });
});

jQuery(document).ready(function($){
  var mediaUploader;
  $('#kontur_admin_style_logo_upload_image_button').click(function(e) {
    e.preventDefault();
      if (mediaUploader) {
      mediaUploader.open();
      return;
    }
    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
      text: 'Choose Image'
    }, multiple: false });
    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#kontur_admin_style_logo_background_image').val(attachment.url);
    });
    mediaUploader.open();
  });
});


jQuery(document).ready(function($){
  var mediaUploader;
  $('#kontur_style_admin_logo_upload_image_button').click(function(e) {
    e.preventDefault();
      if (mediaUploader) {
      mediaUploader.open();
      return;
    }
    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
      text: 'Choose Image'
    }, multiple: false });
    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#kontur_style_admin_logo').val(attachment.url);
    });
    mediaUploader.open();
  });
});