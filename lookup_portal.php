<?php
$from = $to = $no_of_pass = $date = $clsec= "";
$train1 =$train2 =$train3= "";
$ta1 = $ta2 = $ta3 =""; 
$td1 = $td2 = $td3 =""; 
$price1=$price2=$price3=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $from = test_input($_POST["from"]);

    $clsec = $_POST["clsec"];

    $to = test_input($_POST["to"]);
 
    $no_of_pass = test_input($_POST["NoOfPass"]);
  
    $date = $_POST["date"];
    $trains = array("Andhra Pradesh Express"," 	Abadh Assam Express"," 	Adi Koaa Express"," 	Aii Dee Superfast Special"," 	Aii Mys Express","Ajmer Shatabdi","Ak Kcg Express","Ajni Ltt Express"," 	Ald Ned Special"," 	Allahabad Special","Amritha Express"," 	Andaman Express"," 	Anvt Gkp Special","Anvt Mau Express"," 	Anvt Rewa Express"," 	Aravali Express","Asansol Special"," 	Asr Ndls Express"," 	Bsb Ghy"," 	Bsb Ltt Special"," 	Bsb Rmm Express"," 	Bsl St Bct Passenger","Bsp Gad Passenger"," 	Bsp Pnbe Express"," 	Btc Jbp Passenger"," 	Bubneswr Rajdhani"," 	Bza Bnc Passenger");
    $train1= $trains[rand(0,25)];
    $train2= $trains[rand(0,25)];
    $train3= $trains[rand(0,25)];
    $ta1= rand(1,23) .":". rand(0,59);
    $ta2= rand(1,23) .":". rand(0,59);
    $ta3= rand(1,23) .":". rand(0,59);
    $td1= rand(1,23) .":". rand(0,59);
    $td2= rand(1,23) .":". rand(0,59);
    $td3= rand(1,23) .":". rand(0,59);
    $price1= rand(600,2000);
    $price2= rand(600,2000);
    $price3= rand(600,2000);
  }
  else{
  	header("Location: http:www.webexpress.net16.net/index.html");
	die();
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function rand_time() {
    $h=$m=0;
    $h = rand(0,23);
    $m = rand(0,59);
    return ($h .":". $m);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/729fc58e0b.js"></script>
  	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	  	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">

  	<style type="text/css">
  		.submit{background-color:#ffa726; color: #f57c00; font-family: 'Baloo Chettan', cursive; border:none;border-radius: 20px;}
  		.row-centered {
    		text-align:center;
		}
		.col-centered {
    		display:inline-block;
    		float:none;
    		text-align:center;
    		margin-right:10px;
		}
		.footer{
			position: fixed;
			bottom: 10px;
		}
		input[type=text] {
		    width: 100%;
		    padding: 6px 12px;
		    margin: 8px 0;
		    color: #ffcc80;
		    box-sizing: border-box;
		    border: none;
		    border-radius: 12px;
		    font-size: 16px;
		    border-bottom: 2px solid #ffcc80;
		    background-color: transparent;
		    font-family: 'Baloo Chettan', cursive;
		}
		input[type=number] {
		    width: 100%;
		    padding: 6px 12px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: none;
		    color: #ffcc80;
		    border-radius: 12px;
		    font-size: 16px;
		    border-bottom: 2px solid #ffcc80;
		    background-color: transparent;
		    font-family: 'Baloo Chettan', cursive;
		}
		select{
			 width: 100%;
		    padding: 6px 12px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: none;
		    color: #ffcc80;
		    border-radius: 12px;
		    font-size: 16px;
		    border-bottom: 2px solid #ffcc80;
		    background-color: transparent;
		    color: #333;
		    font-family: 'Baloo Chettan', cursive;
		    outline:none;
		    display: inline-block;
		    -webkit-appearance:none;
		    -moz-appearance:none;
		    appearance:none;
		    cursor:pointer;
		}
		input[type=text]::-webkit-input-placeholder {
		   color: #ffcc80;
		}

		input[type=text]:-moz-placeholder { /* Firefox 18- */
		   color: #ffcc80;  
		}

		input[type=text]::-moz-placeholder {  /* Firefox 19+ */
		   color: #ffcc80;  
		}

		input[type=text]:-ms-input-placeholder {  
		   color: #ffcc80; 
		}
		.modal-header{background-color:#ffa726; color: #f57c00; font-family: 'Baloo Chettan', cursive; border:none;}
		.modal-body{background-color: #f57c00; color: #ffa726; font-family: 'Baloo Chettan', cursive; border:none;height: 230px; border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;}
		.aside{float: left; margin-top: 6px;}
		.aside2{float: right;}
		.modal-content{border-bottom-right-radius:20px; border-bottom-left-radius: 20px;}
		.panel-warning{background-color: #4885ed; border-color: transparent;border-radius: 10px;}
		.panel-primary{background-color: #4885ed; border-color: transparent;}
		.transparent{background-color: transparent;}
		.spacing{margin-top: 30px}
		body{background-image: url("images/image21.jpg");background-size: 100%;}
  	</style>
  	<script>
		  $( function() {
		    $( "#slider-range" ).slider({
		      range: true,
		      min: 600,
		      max: 2000,
		      values: [ 600, 2000 ],
		      slide: function( event, ui ) {
		        $( "#amount" ).val( "Rs " + ui.values[ 0 ] + " - Rs " + ui.values[ 1 ] );
		         // $("#first").toggle(1000);
		      },
		      stop: function( event , ui){
		      	$first = $("#first1").val();
		      	$second = $("#second1").val();
		      	$third =  $("#third1").val();
		      	if(ui.values[0]<$first && ui.values[1]>$first){
		      		$("#first").show(1000);
		      	}else{
		      		$("#first").hide(1000);	
		      	}
		      	if(ui.values[0]<$second && ui.values[1]>$second){
		      		$("#second").show(1000);
		      	}else{
		      		$("#second").hide(1000);	
		      	}
		      	if(ui.values[0]<$third && ui.values[1]>$third){
		      		$("#third").show(1000);
		      	}
		      	else{
		      		$("#third").hide(1000);
		      	}

		      }
		    });
		    $( "#amount" ).val( "Rs" + $( "#slider-range" ).slider( "values", 0 ) +
		      " - Rs" + $( "#slider-range" ).slider( "values", 1 ) );
		  } );
  ``</script>
  <script type="text/javascript">
  	var $form = $('#payment-form');
  	$form.find('.pay').on('click', payWithStripe);

  	function payWithStripe() {
  		alert("dalla");
  	}
  </script>
</head>
<body>
	<div class="container-fluid transparent header">
		
	</div>
	<div class="container-fluid " >
		<div class="row row-centered" style="margin-top:10px;">
			<div class="col-md-12 col-lg-12 col-centered">
				<div class="panel panel-warning">
				  <div class="panel-body">
				  	<div class="aside">
				  		<strong><?php echo $from ." -> ". $to ."@". $date;?></strong>
				  	</div>
				  	<div class="aside2">
				  		<a href="index.html" class="btn btn-primary btn-md"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Preference</a>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-lg-3">
			    <div class="panel-group" id="accordion">
			    <div class="panel panel-primary">
			      <div class="panel-heading"><strong>Filter Trains</strong></div>
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Price Range</a>
			        </h4>
			      </div>
			      <div id="collapse1" class="panel-collapse collapse in">
			        <div class="panel-body">
			        	<div class="row">
						     <div class="col-md-12 col-lg-12">
						      	<p>
									<label for="amount">Price range:</label>
									<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;background-color:#4885ed">
								</p>
								<div id="slider-range"></div>
						      </div>
						 </div>
			        </div>
			      </div>
			    </div>
			   <!--  <div class="panel panel-primary">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Fare Class</a>
			        </h4>
			      </div> -->
<!-- 			      <div id="collapse2" class="panel-collapse collapse">
			        <div class="panel-body">
			        	<form>
						    <div class="form-group">
						      <select class="form-control" id="sel1">
						        <option><strong>All Classes</strong></option>
						        <option>1A - AC First Class</option>
						        <option>2A - AC Second Class</option>
						        <option>3A - AC Three Tier</option>
						        <option>3A - AC Three Tier</option>
						        <option>3A - AC Three Tier</option>
						        <option>3A - AC Three Tier</option>
						        <option>3A - AC Three Tier</option>
						        <option>GN - General</option>
						      </select>
						    </div>
						</form>
			        </div>
			      </div> -->
			  <!--   </div> -->
			  </div> 
			</div>
			<div class="col-md-9">
				<table class ="table table-hover">  
				   <tbody>
				      <tr id="first">
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Train name :<?php echo $train1?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<STRONG>FROM : <?php echo $from;?></STRONG>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>TO : <?php echo $to;?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Class : <?php echo $clsec;?></strong>
				         		</div>
				         	</div>
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Arrival : <?php echo $ta1;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Departure : <?php echo $td1;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Total Cost: <?php echo $price1;?> Rs/person * <?php echo $no_of_pass;?> = <?php echo $price1*$no_of_pass;?> Rs</strong>
				         		</div>
				         	</div>
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12" style="padding-top:25px;">
				         			<button class="btn btn-primary btn-md btn-block" type="button" data-toggle="modal" data-target="#myModal1" >Fill Form</button>
				         		</div>
				         	</div>
				         </td>
				      </tr>
				  	  <tr id="second">
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Train name :<?php echo $train2;?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<STRONG>FROM : <?php echo $from;?></STRONG>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>TO : <?php echo $to;?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Class : <?php echo $clsec;?></strong>
				         		</div>
				         	</div>
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Arrival : <?php echo $ta2;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Departure : <?php echo $td2;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Total Cost: <?php echo $price2;?> Rs/person * <?php echo $no_of_pass;?> = <?php echo $price2*$no_of_pass;?> Rs</strong>
				         		</div>
				         	</div>
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12" style="padding-top:25px;">
				         			<button class="btn btn-primary btn-md btn-block" type="button" data-toggle="modal" data-target="#myModal2" >Fill Form</button>
				         		</div>
				         	</div>
				         </td>
				      </tr>
				      <tr id="third">
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Train name :<?php echo $train3;?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<STRONG>FROM : <?php echo $from;?></STRONG>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>TO : <?php echo $to;?></strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Class : <?php echo $clsec;?></strong>
				         		</div>
				         	</div>
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Arrival : <?php echo $ta3;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Time Departure : <?php echo $td3;?> Hrs</strong>
				         		</div>
				         	</div>
				         	<div class="row">
				         		<div class="col-md-12">
				         			<strong>Total Cost: <?php echo $price3;?> Rs/person * <?php echo $no_of_pass;?> = <?php echo $price3*$no_of_pass;?> Rs</strong>
				         		</div>
				         	</div>
				         	
				         		<input type="hidden" id="first1" value="<?php echo $price1;?>">
				         		<input type="hidden" id="second1" value="<?php echo $price2;?>">
				         		<input type="hidden" id="third1" value="<?php echo $price3;?>">

				       
				         </td>
				         <td>
				         	<div class="row">
				         		<div class="col-md-12" style="padding-top:25px;">
				         			<button class="btn btn-primary btn-md btn-block" type="button" data-toggle="modal" data-target="#myModal3" >Fill Form</button>
				         		</div>
				         	</div>
				         </td>
				      </tr> 
				   </tbody>
				   
				</table>
			</div>
		</div>	
	</div>
	<div class="container-fluid transparent footer">
		<div class="row row-centered spacing">
			<div class="col-md-6 col-centered">
				 <div class="btn-group btn-group-justified" style="border-color:transparent;">
				  <a href="#" class="btn btn-primary btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
				  <a href="#" class="btn btn-danger btn-google"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
				  <a href="#" class="btn btn-primary btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
				</div>
			</div>
		</div>
		<div class="row row-centered copyright">
			<div class="col-md-4 col-centered">
				<div style="padding-left:20px;">
					<p class="font-style"><span class="label label-warning">Fusion Inc. All rights reserved.</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form for train Reservation@<?php echo $price1*$no_of_pass?> RS</h4>
        </div>
        <div class="modal-body">
         	<form class="form-horizontal" method="POST" action="payment.php">
         	 <?php
				for ($x = 1; $x <= $no_of_pass; $x++) {
				 echo"   <div class=\"form-group\">
			      <div class=\"col-sm-8\">
			        <input name=\"people[]\" type=\"text\" class=\"form-control\" placeholder=\"full name\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <input name=\"age[]\" min=\"1\" type=\"number\" class=\"form-control\" placeholder=\"Age\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <select name=\"gender[]\" class=\"form-control\" id=\"sel1\" placeholder=\"Sex\">
						        <option value=\"M\"><strong>M</strong></option>
						        <option value=\"F\"><strong>F</strong></option>
						  
				    </select>
			      </div>
			    </div>";
				}
			  ?> 
			    <div class="form-group">
			      <div class="col-sm-12">          
			        <input type="text" class="form-control" id="pwd" placeholder="Address" required>
			      </div>
			    </div>
			    <input type="hidden" name="price" value="<?php  echo $price1*$no_of_pass;?> ">
                        <input type="hidden" name="train" value="<?php echo $train1;?>">
                        <input type="hidden" name="date" value="<?php echo $date;?>">
                        <input type="hidden" name="arrival" value="<?php echo $ta1;?>">
                        <input type="hidden" name="departure" value="<?php echo $td1;?>">
                        <input type="hidden" name="from" value="<?php echo $from;?>">
                        <input type="hidden" name="to" value="<?php echo $to;?>">
                        <input type="hidden" name="noOfPass" value="<?php echo $no_of_pass;?>">
                        <input type="hidden" name="class" value="<?php echo $clsec;?>">
			    <div class="form-group">        
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary btn-block submit" >Submit</button>
			      </div>
			    </div>
			</form>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form for train Reservation@<?php echo $price2*$no_of_pass?> RS</h4>
        </div>
        <div class="modal-body">
         	<form class="form-horizontal" method="POST" action="payment.php">
         	 <?php
				for ($x = 1; $x <= $no_of_pass; $x++) {
				 echo"   <div class=\"form-group\">
			      <div class=\"col-sm-8\">
			        <input name=\"people[]\" type=\"text\" class=\"form-control\" placeholder=\"full name\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <input name=\"age[]\" min=\"1\" type=\"number\" class=\"form-control\" placeholder=\"Age\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <select name=\"gender[]\" class=\"form-control\" id=\"sel1\" placeholder=\"Sex\">
						        <option value=\"M\"><strong>M</strong></option>
						        <option value=\"F\"><strong>F</strong></option>
						  
				    </select>
			      </div>
			    </div>";
				}
			  ?> 
			    <div class="form-group">
			      <div class="col-sm-12">          
			        <input type="text" class="form-control" id="pwd" placeholder="Address" required>
			      </div>
			    </div>
			    <input type="hidden" name="price" value="<?php  echo $price2*$no_of_pass;?>">
                        <input type="hidden" name="train" value="<?php echo $train2;?>">
                        <input type="hidden" name="date" value="<?php echo $date;?>">
                        <input type="hidden" name="arrival" value="<?php echo $ta2;?>">
                        <input type="hidden" name="departure" value="<?php echo $td2;?>">
                        <input type="hidden" name="from" value="<?php echo $from;?>">
                        <input type="hidden" name="to" value="<?php echo $to;?>">
                        <input type="hidden" name="noOfPass" value="<?php echo $no_of_pass;?>">
                        <input type="hidden" name="class" value="<?php echo $clsec;?>">
			    <div class="form-group">        
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary btn-block submit" >Submit</button>
			      </div>
			    </div>
			</form>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form for train Reservation@<?php echo $price3*$no_of_pass?> RS</h4>
        </div>
        <div class="modal-body">
         	<form class="form-horizontal" method="POST" action="payment.php">
         	 <?php
				for ($x = 1; $x <= $no_of_pass; $x++) {
				 echo"   <div class=\"form-group\">
			      <div class=\"col-sm-8\">
			        <input name=\"people[]\" type=\"text\" class=\"form-control\" placeholder=\"full name\" minlength=\"5\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <input name=\"age[]\" min=\"1\" type=\"number\" class=\"form-control\" placeholder=\"Age\" required>
			      </div>
			      <div class=\"col-sm-2\">
			        <select name=\"gender[]\" class=\"form-control\" id=\"sel1\" placeholder=\"Sex\">
						        <option value=\"M\"><strong>M</strong></option>
						        <option value=\"F\"><strong>F</strong></option>
						  
				    </select>
			      </div>
			    </div>";
				}
			  ?> 
			    <div class="form-group">
			      <div class="col-sm-12">          
			        <input type="text" class="form-control" id="pwd" placeholder="Address" required>
			      </div>
			    </div>
			     		<input type="hidden" name="price" value="<?php  echo $price3*$no_of_pass;?> ">
                        <input type="hidden" name="train" value="<?php echo $train3;?>">
                        <input type="hidden" name="date" value="<?php echo $date;?>">
                        <input type="hidden" name="arrival" value="<?php echo $ta3;?>">
                        <input type="hidden" name="departure" value="<?php echo $td3;?>">
                        <input type="hidden" name="from" value="<?php echo $from;?>">
                        <input type="hidden" name="to" value="<?php echo $to;?>">
                        <input type="hidden" name="noOfPass" value="<?php echo $no_of_pass;?>">
                        <input type="hidden" name="class" value="<?php echo $clsec;?>">
			    <div class="form-group">        
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary btn-block submit" >Submit</button>
			      </div>
			    </div>
			</form>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>