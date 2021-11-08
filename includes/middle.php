<!-- Section: Divider -->
<section class="bg-img overflow-hidden" data-tm-bg-img="<?=SITE_PATH?>/assets/images/photos/divider-bg.jpg">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="tm-sc-section-title section-title section-title-light mb-60 mt-20 pr-50">
						<div class="title-wrapper">
							<h5 class="subtitle text-white"><?=$info_contacts['phone']?></h5>
							<h2 class="text-white" style="font-family: unset; font-size: 2em;"><?=$lang45?> <span class="text-theme-colored3"><?=$lang46?></span></h2>
							<div class="tm-sc-button">
								<a href="<?=SITE_PATH?>/elaqe" class="btn btn-theme-colored1 btn-flat"><?=$lang16?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="divider-current-theme-style1">
						<div class="layer-image-wrapper">
							<div class="layer-image">
								<img src="http://placehold.it/267x708" alt="Image">
							</div>
							<div class="experience-iconbox">
								<h4 class="number text-theme-colored1">10</h4>
								<h4 class="title">Years of Experience</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Divider -->

<!-- Section: Appointment -->
<section class="">
	<div class="container p-0 pt-md-100 pl-sm-15 pr-sm-15">
		<div class="section-content">
			<div class="row justify-content-end">
				<div class="col-lg-8 col-xl-7">
					<div class="appointment-current-theme-style">
						<div class="tm-sc-section-title section-title mb-0">
							<div class="title-wrapper">
								<h6 class="subtitle text-theme-colored1 text-uppercase">Fill the form</h6>
								<h2 class="title mb-40">Make an Appointment <span class="text-theme-colored3">Today</span></h2>
							</div>
						</div>
						<!-- Contact Form -->
						<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
							<div class="form-row">
								<div class="col-sm-6">
									<div class="form-group">
										<input name="form_name" class="form-control" type="text" placeholder="Your Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input name="form_email" class="form-control required email" type="email" placeholder="Email Address">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-6">
									<div class="form-group">
										<input name="form_phone" class="form-control" type="text" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input name="form_subject" class="form-control required" type="text" placeholder="Subject">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<div class="form-group mb-0">
										<textarea name="form_message" class="form-control required" rows="7" placeholder="Write a Message"></textarea>
									</div>
									<div class="form-group">
										<input name="form_botcheck" class="form-control" type="hidden" value="" />
										<button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Submit</button>
										<button type="reset" class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
									</div>
								</div>
							</div>
						</form>
						<!-- Contact Form Validation-->
						<script>
                            (function($) {
                                $("#contact_form").validate({
                                    submitHandler: function(form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType:  'json',
                                            success: function(data) {
                                                if( data.status == 'true' ) {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                            }
                                        });
                                    }
                                });
                            })(jQuery);
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="layer-image-wrapper layer-image-divider2">
		<div class="layer-image-left" data-tm-bg-img="http://placehold.it/832x666" style="background-image: url(&quot;http://placehold.it/832x666&quot;);">
			<div class="projects-count bg-theme-colored2">
				<div class="wrapper">
					<div class="details">
						<h4 class="text-white">The majority have suffered</h4>
						<div class="icon"><img src="<?=SITE_PATH?>/assets/images/icon/11.png" alt="ImageIcon"></div>
					</div>
					<div class="video-icon">
						<div class="box-hover-effect play-video-button tm-sc tm-sc-video-popup">
							<div class="effect-wrapper text-center ml-30 ml-md-20 mt-10">
								<div class="video-button text-white font-size-60"><span class="far fa-play-circle"></span></div>
								<a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?time_continue=2&amp;v=XJgNuWtCEAI" title=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Appointment -->