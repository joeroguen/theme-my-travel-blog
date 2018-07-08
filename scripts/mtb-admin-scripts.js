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

    var mediaUploaderHomeBanner;
    $('#button-upload-home-banner').on('click', function(e) {
        e.preventDefault();
        if(mediaUploaderHomeBanner) {
            mediaUploaderHomeBanner.open();
            return;
        }
        mediaUploaderHomeBanner = wp.media.frame.file_frame = wp.media({
            title: 'Choose or upload an image',
            button: {
                text: 'Select this image'
            },
            multiple: false
        });
        mediaUploaderHomeBanner.on('select', function() {
            var homeBanner = mediaUploaderHomeBanner.state().get('selection').first().toJSON();
            $('#hidden-data-home-banner-url').val(homeBanner.url);
        });
        mediaUploaderHomeBanner.open(); //needed to prevent double clicking to initiat upload functionality
    });

});
