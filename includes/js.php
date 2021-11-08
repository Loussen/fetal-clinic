<?php if(!defined('db_name')) { header("Location: ../"); exit(); die(); } ?>

<!-- Javascript -->
<script src="<?=SITE_PATH?>/assets/js/custom.js"></script>


<?php echo $js; ?>

<script>
jQuery(document).ready(function(){
    var base_url = '<?=SITE_PATH?>';
    $(document).on('submit','form#contact-form',function(e){
        e.preventDefault();

        $('#contact-form').css('opacity','0.3');
        $('.has-error').removeClass('has-error');

        var formData = new FormData(this);

        $.ajax({
            url: base_url+'/contact.php',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                if(data.code==0)
                {
                    $('#contact-form').css('opacity','1');
                    $('[name="'+data.err_param+'"]').addClass('has-error');
                }
                else
                {
                    $("form#contact-form").css("display","none");
                    $('div.success_contact').show();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#contact-form').css('opacity','1');
            }
        });

    });

    $(document).on('submit','form#appointment-form',function(e){
        e.preventDefault();

        $('#appointment-form').css('opacity','0.3');
        $('.has-error').removeClass('has-error');

        var formData = new FormData(this);

        $.ajax({
            url: base_url+'/appointment.php',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                if(data.code==0)
                {
                    $('#appointment-form').css('opacity','1');
                    $('[name="'+data.err_param+'"]').addClass('has-error');
                }
                else
                {
                    $("form#appointment-form").css("display","none");
                    $('div.success_appointment').show();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#appointment-form').css('opacity','1');
            }
        });

    });

    var video_wrapper = $('.youtube-video-place');
//  Check to see if youtube wrapper exists
    if(video_wrapper.length){
// If user clicks on the video wrapper load the video.
        $('img.play-youtube').on('click', function(){
            /* Dynamically inject the iframe on demand of the user.
             Pull the youtube url from the data attribute on the wrapper element. */
            $(this).closest("div.featured-thumbnail").addClass('padding-top_my');
            $(this).closest("div.youtube-video-place").html('<iframe allowfullscreen frameborder="0" class="embed-responsive-item" style="height: 225px; width: 100%;" src="' + $(this).closest("div.youtube-video-place").data('yt-url') + '"></iframe>');
        });
    }
});
</script>