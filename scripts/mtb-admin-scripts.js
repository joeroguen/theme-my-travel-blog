$(document).ready(function() {

    var mediaUploader;
    $('#button-upload-profile-photo').on('click', function(e) {
        e.preventDefault();
        if(mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frame.file_frame = wp.media({
            title: 'Choose or upload a photo',
            button: {
                text: 'Select this photo'
            },
            multiple: false
        });
        mediaUploader.on('select', function() {
            var photoUrl = mediaUploader.state().get('selection').first().toJSON();
            $('#hidden-data-photo-url').val(photoUrl.url);
        });
        mediaUploader.open(); //needed to prevent double clicking to initiat upload functionality
    });

});
