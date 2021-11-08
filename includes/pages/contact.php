<!-- breadcrumb area start -->
<?php require_once "includes/breadcrumb.php"; ?>
<!-- breadcrumb area end -->

<section class="divider">
	<div class="container pb-70">
		<div class="row">
			<div class="col-lg-5 mb-30">
				<p><?=substr_($info_contacts['footer_'.$lang_name],0,200,true,true)?></p>
				<div class="tm-sc-unordered-list list-style2">
					<ul>
						<li><strong>Phone:</strong> <a href="tel:<?=$info_contacts['phone']?>"><?=$info_contacts['phone']?></a></li>
						<li><strong>Email:</strong> <a href="mailto:<?=$info_contacts['email']?>"><?=$info_contacts['email']?></a></li>
						<li><strong>Address:</strong> <?=$info_contacts['text_'.$lang_name]?></li>
					</ul>
				</div>
				<ul class="styled-icons icon-dark icon-sm icon-circled mt-30">
					<li><a href="<?=$info_contacts['facebook']?>" data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
					<li><a href="<?=$info_contacts['youtube']?>" data-tm-bg-color="#D71619"><i class="fab fa-youtube"></i></a></li>
					<li><a href="<?=$info_contacts['instagram']?>" data-tm-bg-color="#D9CCB9"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="col-lg-7">
				<h3 class="mt-0 mb-0"><?=$lang1?></h3>
				<p class="font-size-20"><?=$lang10?></p>
				<!-- Contact Form -->
				<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
					<div class="form-row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Name <small>*</small></label>
								<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Email <small>*</small></label>
								<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Subject <small>*</small></label>
								<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
					</div>
					<div class="form-group">
						<input name="form_botcheck" class="form-control" type="hidden" value="" />
						<button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
						<button type="reset" class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
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
</section>

<div id="google_map" class="google_map">
	<div class="map_container">
		<div id="map">
			<iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" height="400"></iframe>
		</div>
	</div>
</div>