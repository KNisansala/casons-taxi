
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

  jQuery("#txtName").blur(function () {
        validateEmpty("txtName", "spanName");
    });
        
    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });
    
        jQuery("#txtPickup").blur(function () {
        ValidateEmail("txtPickup", "spanPickup");
    });
    
        jQuery("#txtDrop").blur(function () {
        ValidateEmail("txtDrop", "spanDrop");
    });
    
    jQuery("#datepicker").blur(function () {
        validateEmpty("datepicker", "spanDate");
    });
    
    jQuery("#txtPassengers").blur(function () {
        validateEmpty("txtPassengers", "spanPassengers");
    });


//    jQuery("#captchacode").blur(function () {
//        validateEmpty("captchacode", "capspan");
//    });

    jQuery("#btnSubmit").bind('click', function () {   
        if (!validate()) {
            return;
        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode == 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    if (
            validateEmpty("txtName", "spanName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txtPickup", "spanPickup") &
            validateEmpty("txtDrop", "spanDrop") &
            validateEmpty("datepicker", "spanDate") &
            validateEmpty("txtPassengers", "spanPassengers") &
            validateEmpty("captchacode", "capspan")

            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            full_lname: jQuery('#txtName').val(),
            email: jQuery('#txtEmail').val(),
            pickup: jQuery('#txtPickup').val(),            
            drop: jQuery('#txtDrop').val(),
            date: jQuery('#datepicker').val(), 
            passengers: jQuery('#txtPassengers').val(), 
            message: jQuery('#txtMessage').val(),
            captchacode: jQuery('#captchacode').val()

        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#txtName').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtPickup').val("");
                jQuery('#txtDrop').val("");
                jQuery('#datepicker').val("");
                jQuery('#txtPassengers').val("");
                jQuery('#txtMessage').val("");
                jQuery('#captchacode').val("");

            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{

    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");

        return false;
    }
}
