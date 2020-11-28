jQuery(document).ready(function() {
    / ######### Media Start ########### /
    jQuery("body").on("click", "#lawers_logo_uploader", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_logo_field").val(image_url);
            });
        jQuery("#reset_image").show(); // Reset button in Upload Image
    });
    / ######### Media End ########### /

    // Reset button in Upload Image

    var resetCheck = jQuery("#lawers_logo_field").val();
    if (resetCheck == '') {
        jQuery("#reset_image").hide();
    }

    jQuery("body").on("click", "#reset_image", function(e) {
        e.preventDefault();
        jQuery("#lawers_logo_field").val('');
        jQuery("#reset_image").hide();
    })

    // Reset button in Main Slider

    // var sliderresetCheck = jQuery(".slider_reset").val();
    // if (sliderresetCheck == '') {
    //     jQuery("#slider_reset_image").hide();
    // }

    jQuery("body").on("click", ".slider_reset", function(e) {
        e.preventDefault();
        jQuery(this).val('');
        jQuery(this).hide();
    })

    jQuery("body").on("click", "#add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 10000000);
        var html = `<div id='slider_${rand}'>
              
                <div class='form-group'>
                <input type='text' name='slider_caption[]' placeholder='Slider Title'>
                </div>
                <div class='form-group'>
                <input type='text' name='slider_title[]' placeholder='Slider Caption'>
                </div>
                <div class='form-group'>
                <input type='text' id='slider_${rand}_field' name='main_slider[]' value='' placeholder='Slider Image'> 
                </div>
                <div class='form-group'>
                <button type='button' class='upload main_slider_button btn btn-secondary' id='slider_${rand}_uploader'>Upload Image</button>
                </div>
                <div class='form-group'>
                <button type='button' class='reset_main_slider_button btn btn-warning' id='slider_${rand}_uploader'>Remove</button>
                </div>
                                
        </div>`;
        jQuery(this).before(html);
    })

    jQuery("body").on("click", ".main_slider_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(7));
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#slider_${id}_field`).val(image_url);
            });
    })



    jQuery("body").on("click", ".reset_main_slider_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(7));
        jQuery(`#slider_${id}`).remove();

    });

    jQuery("body").on("click", "#media_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='media_testimony_body_${rand}' class='col-md-4'>
        <div class='form-group'>
        <input type='text' name='lawers_media_title[]' value='' placeholder='Media Title'>
        </div>
        <div class='form-group'>
        <textarea name='lawers_media_caption[]' value='' placeholder='Media Caption'> </textarea>
        </div>
        <div class='form-group'>
        <div id='media_flact_${rand}_icon_default' class='d-none'>
        <input type='text' name='lawers_media_flaticon_button[]' readonly id='media_flacticon_${rand}_button_field'>
        <img src='' id='media_flacticon_${rand}_img' width='50px' class='mt-2'>
        <span id='media_flacticon_${rand}_text_warning' class='text-danger'>*Flacticon must be 16x16 pxel*</span><br>
        <button type='button' id='media_flacticon_${rand}_upload_button' class='btn btn-success media_flacticon_button mt-2'>Upload Image</button>
        </div><br>
        <lavel>Flacticon</lavel>
            <input type='checkbox' id='media_flact_${rand}_default' class='media_icon' name='lawers_media_flaticon' value='1'>
            </div>

        </div>`;
        jQuery("#lawers-advice-media-from").append(html);
    })

    jQuery("body").on("click", ".media_icon", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(12));
        // alert(id);
        if (jQuery(`#media_flact_${id}_default`).is(":checked")) {
            jQuery(`#media_flact_${id}_icon_default`).attr('class', 'd-block');
        } else {
            jQuery(`#media_flact_${id}_icon_default`).attr('class', 'd-none');
            jQuery(`#media_flacticon_${id}_button_field`).val('');
            jQuery(`#media_flacticon_${id}_img`).val('');
        }


    });



    jQuery("body").on("click", ".media_flacticon_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(16));
        // alert(id);
        var image = wp.media({
                title: 'Flacticon Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#media_flacticon_${id}_button_field`).val(image_url);
                jQuery(`#media_flacticon_${id}_img`).attr('src', image_url);
                jQuery(`#media_flacticon_${id}_text_warning`).hide();
            });
    });

    // Company Overview Image upload
    
    jQuery("body").on("click", "#lawers_company_image_uploader", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_company_image_fields").val(image_url);
            });
        jQuery("#company_reset_image").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_company_img_fields").val();
    if (uploderresetCheck === '') {
        jQuery("#company_reset_image").hide();
    }

    jQuery("body").on("click", "#company_reset_image", function(e) {
        e.preventDefault();
        jQuery("#lawers_company_img_fields").val('');
        jQuery("#company_reset_image").hide();
    });

    // Company Overview Icon upload

    jQuery("body").on("click", "#company_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='company_body_${rand}' class='col-md-4'>
        <div class='form-group mt-2'>
            <input type='text' name='lawers_company_help_intro_title[]' value='' placeholder='Title'>
        </div>
        <div class='form-group'>
        <textarea name='lawers_company_help_intro_description[]' placeholder='Description'> </textarea>
        </div>
        <div class='form-group'>
            <input type='text' id='lawers_company_${rand}_help_flacticon' name='lawers_company_help_intro_flacticon[]' readonly><br>
            <button type='button' id='company_flacticon_${rand}_upload_button' class='btn btn-success lawers_flacticon_button mt-2'>Upload Icon</button>
            <button type='button' class='btn btn-info mt-2 intro_reset_image' id='company_intro_${rand}_reset_image' style='display: none' >Reset</button>
        </div>
    </div>`;
        jQuery("#lawers-advice-company-from").append(html);
    });

    // jQuery(`company_intro_${id}_reset_image`).hide();

    jQuery("body").on("click", ".lawers_flacticon_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(18));
        // alert(id);
        var image = wp.media({
                title: 'Flacticon Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_company_${id}_help_flacticon`).val(image_url);
                jQuery(`#company_intro_${id}_reset_image`).show();
            });

    })


    jQuery("body").on("click", ".intro_reset_image", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(14));
        // alert(id);
        jQuery(`#lawers_company_${id}_help_flacticon`).val('');
        jQuery(`#company_intro_${id}_reset_image`).hide();


    });

    jQuery("body").on("click", "#lawers_company_help_image", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_company_help_img_field").val(image_url);
            });
        jQuery("#uploader_reset_image").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_company_help_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#company_reset_image").hide();
    }

    jQuery("body").on("click", "#uploader_reset_image", function(e) {
        e.preventDefault();
        jQuery("#lawers_company_help_img_field").val('');
        jQuery("#uploader_reset_image").hide();
    })

    // Company Testimony Image/Profile upload

    jQuery("body").on("click", "#testimony_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div class='col-md-4'>
        <div class='form-group mt-2'>
        <textarea name='lawers_company_testimony_body_description[]' placeholder='Description'> </textarea>
        </div>
        <div class='form-group'>
        <input type='text' name='lawers_company_testimony_body_user[]' value='' placeholder='Testimony User Name'>
        </div>
        <div class='form-group'>
        <input type='text' name='lawers_company_testimony_body_designation[]' value='' placeholder='Testimony User Designation'>
        </div>
        <div class='form-group'>
            <input type='text' id='lawers_testimony_${rand}_body_img' name='lawers_company_testimony_body_img[]' value='' readonly><br>
            <button type='button' id='company_testimony_${rand}_upload_button' class='btn btn-success lawers_testimony_button mt-2'>Upload Image</button>
            <button type='button' class='btn btn-info mt-2 testimony_reset_image' id='company_testimony_${rand}_reset_image' style='display: none'>Reset</button>
        </div>
    </div>`;
        jQuery("#lawers-advice-testimony-from").append(html);
    })

    jQuery("body").on("click", ".lawers_testimony_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(18));
        // alert(id);
        var image = wp.media({
                title: 'Image Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_testimony_${id}_body_img`).val(image_url);
                jQuery(`#company_intro_${id}_reset_image`).show();
                // jQuery(`#company_intro_${id}_reset_image`).show();
            });

    })

    jQuery("body").on("click", ".testimony_reset_image", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(14));
        // alert(id);
        jQuery(`#lawers_testimony_${id}_body_img`).val('');
        jQuery(`#company_testimony_${id}_reset_image`).hide();


    });

    // Company Attorney Image/Profile upload

    jQuery("body").on("click", "#attorney_add_new_button", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='company_testimony_body_${rand}' class='col-md-4'>
            <div class='form-group mt-2'>
            <input type='text' name='lawers_company_attorney_name[]' placeholder='Attorney User Name'>
            </div>
            <div class='form-group'>
            <input type='text' name='lawers_company_attorney_designation[]' placeholder='Attorney designation'>
            </div>
            <div class='form-group'>
            <textarea name='lawers_company_attorney_description[]' placeholder='Description'> </textarea>
            </div>
            <div class='form-group'>
                <input type='text' id='lawers_attorney_${rand}_body_img' name='lawers_company_attorney_image[]' readonly><br>
                <button type='button' id='company_attorney_${rand}_upload_button' class='btn btn-success lawers_attorney_images_button mt-2'>Upload Image</button>
            </div>
        </div>`;
        jQuery("#lawers-advice-attorney-full-from").append(html);
    })

    jQuery("body").on("click", ".lawers_attorney_images_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(17));
        // alert(id);
        var image = wp.media({
                title: 'Image Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_attorney_${id}_body_img`).val(image_url);
                // jQuery(`#company_intro_${id}_reset_image`).show();
            });

    })

    // Company Contact Image/Profile upload

    jQuery("body").on("click", "#lawers_contact_img", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_logo_field").val(image_url);
            });
        jQuery("#reset_contact").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_logo_field").val();
    if (uploderresetCheck == '') {
        jQuery("#reset_contact").hide();
    }

    jQuery("body").on("click", "#reset_contact", function(e) {
        e.preventDefault();
        jQuery("#lawers_logo_field").val('');
        jQuery("#reset_contact").hide();
    })

    // Company About Image/Profile upload

    jQuery("body").on("click", "#lawers_about_img_up", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_about_img_field").val(image_url);
            });
        jQuery("#reset_about").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_about_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#reset_about").hide();
    }

    jQuery("body").on("click", "#reset_about", function(e) {
        e.preventDefault();
        jQuery("#lawers_about_img_field").val('');
        jQuery("#reset_about").hide();
    })

    jQuery("body").on("click", "#lawers_company_img_uploader", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_company_about_img_field").val(image_url);
            });
        jQuery("#company_about_reset").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_company_about_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#company_about_reset").hide();
    }


    jQuery("body").on("click", "#company_about_reset", function(e) {
        e.preventDefault();
        jQuery("#lawers_company_about_img_field").val('');
        jQuery("#company_about_reset").hide();
    })

    jQuery("body").on("click", "#company_about_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='company_body_${rand}' class='col-md-4'>
        <div class='form-group mt-2'>
            <input type='text' name='lawers_advise_about_help_font_title[]' value='' placeholder='Title'>
        </div>
        <div class='form-group'>
            <textarea name='lawers_advise_about_help_details[]' placeholder='Description'> </textarea>
        </div>
        <div class='form-group'>
            <input type='text' id='lawers_company_${rand}_help_flacticon' name='lawers_advise_about_help_fonticon[]' value='' readonly><br>
            <button type='button' id='company_flacticon_${rand}_upload_button' class='btn btn-success lawers_flacticon_button mt-2'>Upload Icon</button>
            <button type='button' class='btn btn-info mt-2 intro_reset_image' id='company_intro_${rand}_reset_image' style='display: none'>Reset</button>
        </div>
    </div>
    </div>`;
        jQuery("#lawers-advice-company-about-from").append(html);
    })

    jQuery("body").on("click", ".lawers_flacticon_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(18));
        // alert(id);
        var image = wp.media({
                title: 'Image Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_company_${id}_help_flacticon`).val(image_url);
                jQuery(`#company_intro_${id}_reset_image`).show();
                // jQuery(`#company_intro_${id}_reset_image`).show();
            });

    })

    jQuery("body").on("click", ".intro_reset_image", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(14));
        // alert(id);
        jQuery(`#lawers_company_${id}_help_flacticon`).val('');
        jQuery(`#company_intro_${id}_reset_image`).hide();


    });

    // Company About Image/Profile upload

    jQuery("body").on("click", "#lawers_attorney_img_up", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_attorney_img_field").val(image_url);
            });
        jQuery("#reset_attorney").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_attorney_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#reset_attorney").hide();
    }

    jQuery("body").on("click", "#reset_attorney", function(e) {
        e.preventDefault();
        jQuery("#lawers_attorney_img_field").val('');
        jQuery("#reset_attorney").hide();
    })
    
    
    jQuery("body").on("click", "#lawers_about_help_image_upload", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_company_about_help_img_field").val(image_url);
            });
        jQuery("#about_uploader_reset_image").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_company_about_help_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#about_uploader_reset_image").hide();
    }

    jQuery("body").on("click", "#about_uploader_reset_image", function(e) {
        e.preventDefault();
        jQuery("#lawers_company_about_help_img_field").val('');
        jQuery("#about_uploader_reset_image").hide();
    })

    jQuery("body").on("click", "#company_attorney_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='company_attorney_${rand}' class='col-md-4'>
        <div class='form-group mt-2'>
            <input type='text' name='lawers_advise_attorney_body_user_name[]' value='' placeholder='Title'>
        </div>
        <div class='form-group mt-2'>
            <input type='text' name='lawers_advise_attorney_body_user_title[]' value='' placeholder='Designation'>
        </div>
        <div class='form-group'>
            <textarea name='lawers_advise_attorney_body_user_description[]' placeholder='Description'> </textarea>
        </div>
        <div class='form-group'>
            <input type='text' id='lawers_company_${rand}_attorney_img' name='lawers_advise_attorney_body_img[]' value='' readonly><br>
            <button type='button' id='company_attorney_${rand}_upload_button' class='btn btn-success lawers_attorney_button mt-2'>Upload Image</button>
            <button type='button' class='btn btn-info mt-2 attorney_reset_image' id='attorney_body_${rand}_reset_image' style='display: none'>Reset</button>
        </div>
        <div class='form-group mt-2'> 
            <input type='checkbox' name='lawers_advise_attorney_body_user_facebook' value='1'> Facebook
            <input type='checkbox' name='lawers_advise_attorney_body_user_twitter' value='1'> Twitter
            <input type='checkbox' name='lawers_advise_attorney_body_user_google' value='1'> Google
            <input type='checkbox' name='lawers_advise_attorney_body_user_instagram' value='1'> Instagram
        </div>
        </div>
    </div>`;
        jQuery("#lawers-advice-company-attorney-from").append(html);
    })

    jQuery("body").on("click", ".lawers_attorney_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(17));
        // alert(id);
        var image = wp.media({
                title: 'Image Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_company_${id}_attorney_img`).val(image_url);
                jQuery(`#attorney_body_${id}_reset_image`).show();
            });

    })

    jQuery("body").on("click", ".attorney_reset_image", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(14));
        // alert(id);
        jQuery(`#lawers_company_${id}_attorney_img`).val('');
        jQuery(`#attorney_body_${id}_reset_image`).hide();


    });

    // Company Practice Image/Profile upload

    jQuery("body").on("click", "#lawers_practice_img_up", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_practice_img_field").val(image_url);
            });
        jQuery("#reset_practice").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_practice_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#reset_practice").hide();
    }

    jQuery("body").on("click", "#reset_practice", function(e) {
        e.preventDefault();
        jQuery("#lawers_practice_img_field").val('');
        jQuery("#reset_practice").hide();
    })

    jQuery("body").on("click", "#company_practice_add_new", function(e) {
        e.preventDefault();
        var rand = Math.floor(Math.random() * 100000000);
        var html = `<div id='company_attorney_${rand}' class='col-md-4'>
        <div class='form-group mt-2'>
            <input type='text' name='lawers_advise_practice_body_title[]' value='' placeholder='Title'>
        </div>
        <div class='form-group'>
            <textarea name='lawers_advise_practice_body_description[]' placeholder='Description'> </textarea>
        </div>
        <div class='form-group'>
            <input type='text' id='lawers_company_${rand}_practice_img' name='lawers_advise_practice_body_img[]' value='' readonly><br>
            <button type='button' id='company_practice_${rand}_upload_button' class='btn btn-success lawers_practice_button mt-2'>Upload Image</button>
            <button type='button' class='btn btn-info mt-2 practice_reset_image' id='practice_body_${rand}_reset_image' style='display: none'>Reset</button>
        </div>
</div>`;
        jQuery("#lawers-advice-company-practice-from").append(html);
    })

    jQuery("body").on("click", ".lawers_practice_button", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(17));
        // alert(id);
        var image = wp.media({
                title: 'Image Upload',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery(`#lawers_company_${id}_practice_img`).val(image_url);
                jQuery(`#practice_body_${id}_reset_image`).show();
            });

    })

    jQuery("body").on("click", ".practice_reset_image", function(e) {
        // e.preventDefault();
        var id = jQuery(this).attr('id');
        id = parseInt(id.substr(14));
        // alert(id);
        jQuery(`#lawers_company_${id}_practice_img`).val('');
        jQuery(`#practice_body_${id}_reset_image`).hide();


    });

    // Company Blog Image/Profile upload

    jQuery("body").on("click", "#lawers_blog_img_up", function(e) {
        e.preventDefault();
        var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
            .on('select', function(e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                jQuery("#lawers_blog_img_field").val(image_url);
            });
        jQuery("#reset_blog").show(); // Reset button in Upload Image
    });

    var uploderresetCheck = jQuery("#lawers_blog_img_field").val();
    if (uploderresetCheck == '') {
        jQuery("#reset_blog").hide();
    }

    jQuery("body").on("click", "#reset_blog", function(e) {
        e.preventDefault();
        jQuery("#lawers_blog_img_field").val('');
        jQuery("#reset_blog").hide();
    })

})