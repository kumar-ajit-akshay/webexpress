<?php
$price=0;
$everything  = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$everything = $_POST;
	$price = $everything['price'];
}
else{
	header("Location: index.html");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://use.fontawesome.com/729fc58e0b.js"></script>

    <style type="text/css">
body { margin-top:80px; }

.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}

.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
.credit-card-box .panel-heading img {
    min-width: 180px;
}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<style type="text/css">
	.row-centered {
    		text-align:center;
		}
		.col-centered {
    		display:inline-block;
    		float:none;
    		text-align:center;
    		margin-right:10px;
		}
		body{background-image: url("images/check3.png");}
        .cover{background-color: #aeea00;border-radius: 6px; border:none;padding:10px;}
        .header{ background-color: #aeea00; border-radius: 6px; border:3px dotted #eeff41;font-family: 'Baloo Chettan', cursive; padding-bottom:10px; }
</style>

<div class="container">
    <div class="row row-centered">
        <div class="col-md-6 col-centered">
            <div class="cover">
                <div class="header">
                    <h3 style="#eeff41">Secure Portal @ Webexpress</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-centered" style="margin-top:30px;">
        <div class="col-centered col-xs-12 col-md-4">
        
 
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="pdfmaker.php">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="price" value="<?php echo $everything["price"];?>">
                        <input type="hidden" name="train" value="<?php echo $everything["train"];?>">
                        <input type="hidden" name="date" value="<?php echo $everything["date"];?>">
                        <input type="hidden" name="arrival" value="<?php echo $everything["arrival"];?>">
                        <input type="hidden" name="departure" value="<?php echo $everything["departure"];?>">
                        <input type="hidden" name="from" value="<?php echo $everything["from"];?>">
                        <input type="hidden" name="to" value="<?php echo $everything["to"];?>">
                        <input type="hidden" name="noOfPass" value="<?php echo $everything["noOfPass"];?>">
                        <input type="hidden" name="class" value="<?php echo $everything["class"];?>">
                        <input type="hidden" name="people" value="<?php print_r($everything["people"]);?>">
                        <input type="hidden" name="age" value="<?php echo print_r($everything["age"]);?>">
                        <input type="hidden" name="gender" value="<?php echo print_r($everything["gender"]);?>">
                       
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Pay <?php echo $price . "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>
"." /-";?></button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>          
    </div>
</div>

	<script type="text/javascript">

var $form = $('#payment-form');
$form.find('.subscribe').on('click', payWithStripe);

function payWithStripe(e) {
    e.preventDefault();
    
    if (!validator.form()) {
        return;
    }

    $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

    var PublishableKey = 'pk_test_Qr5dSkV1ocUH3ZxPW89eh6hZ'; 
    Stripe.setPublishableKey(PublishableKey);
    
    var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
    var ccData = {
        number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
        cvc: $form.find('[name=cardCVC]').val(),
        exp_month: expiry.month, 
        exp_year: expiry.year
    };
    
    Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
        if (response.error) {
            $form.find('.subscribe').html('Try again').prop('disabled', false);
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");        
            console.log(response.id);
            console.log(response.card);
            var token = response.id;
            $.post('accept.php', {
                    token: token
                })
                .done(function(data, textStatus, jqXHR) {
                    $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                    $form.submit();
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Please specify a valid credit card number.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Invalid expiration date.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "Invalid CVC.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('.subscribe').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('.subscribe').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);
	</script>
</body>
</html>