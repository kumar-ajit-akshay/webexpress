<?php
$everything = array();
$everything=$_POST;
$age = array();
$status =array();
$Adult =0;
$Child =0;
$transacId = rand(1111111111,9999999999);
$pnr = rand(1111111111,9999999999);
$trainNoName = rand(11111,99999)."/".$everything["train"];
$doj = date("d-M-Y", strtotime($everything["date"]));
$dob = date("d-M-Y");
$class = $everything["class"];
$no_of_pass = $everything["noOfPass"];
$from = $everything["from"];
$to = $everything["to"];
$distance = rand(400,999)." Km";
$ScD = $everything["departure"];
$ScA = $everything["arrival"];
$total = $everything["price"];
$statusStartSl = rand(1,12);
$statusStartBth = rand(1,72);
for ($i=0; $i <$no_of_pass ; $i++) { 
  $status[$i] = "\CONFIRM\S".$statusStartSl."\ ".($statusStartBth+$i);
}
$credentials = array(array());
$p = $a = $g = $contents ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $contents = implode(" ",$everything);

   $start = strpos($contents, "Array");
   $end= strripos($contents, "Array");
   $extract =substr($contents,$start+1,$end-$start);
   $middle =strpos($extract, "Array");
   $middle =$start+$middle;
   $p = substr($contents, $start,$middle-$start);
   $a = substr($contents, $middle,$end-$middle-2);
   $g = substr($contents, $end,(strlen($contents)-$end)-1);
   $data = array($p,$a,$g);
   for ($x = 0; $x < 3; $x++) {
      $temp = $data[$x];
      for ($i=0; $i <$no_of_pass ; $i++) {
         if ($i>9) {
          $offset = 7;  
         }
         else{
           $offset = 6;
         }
        if ($i == ($no_of_pass-1)) {
         
            $st = strpos($temp, "[".$i."] =>")+$offset;
            $ed = strpos($temp, ")");
            $ln = $ed -$st;
         }
         else{
            $st = strpos($temp, "[".$i."] =>")+$offset;
            $ed = strpos($temp, "[".($i+1)."] =>");
            $ln = $ed - $st;
         } 
        $credentials[$x][$i]=substr($temp,$st,$ln);
      }
   }
   for ($i=0; $i <$no_of_pass ; $i++) { 
       if ($credentials[1][$i]>=21) {
          $Adult++;
       }
       else{
          $Child++;
       }
    }
}
else{
   header("Location: http://www.webexpress,net16.net/index.html");
   die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style type="text/css">
      .col-centered {
         float:center;
      }
      .table{margin-top: 20px;}
      table{border:1px solid black; font-size: 12px;}
      tbody{border:1px solid black;}
      tr{border:1px solid black;}
      td{border:1px solid black;}
      .instructions{margin-top: 10px;font-size: 12px;}
      .sty{font-size: 15px;text-decoration: underline;}
      .banner{margin-top: 10px;}
      .rcentered {
         text-align:center;
      }
      .ccentered {
         display:inline-block;
         float:none;
         text-align:center;
         margin-right:10px;
      }
     </style>
</head>
<body>
   <div class="container">
      <div class="row row-centered" style="margin-top:10px;">
         <div class="col-md-4 col-sm-4 col-centered">
            <img src="images/index.png" style="width:60px;height60px;">
         </div>
         <div class="col-md-4 col-sm-4 col-centered">
            <h4 style="text-decoration:underline;"><strong>IRCTCs e-Ticketing Service <br>Electronic Reservation Slip</strong></h4>
         </div>
         <div class="col-md-4 col-sm-4 col-centered" >
            <img src="images/irctc.png" style="width:60px;height60px; float:right;">
         </div>
      </div>
      <table class = "table">
         
         <tbody>
            <tr>
               <td colspan="2" style="border:1px solid black;"><strong>Transaction Id : <?php echo $transacId;?></strong></td>
               <td style="border:1px solid black;"><strong>PNR Number: <?php echo $pnr;?></strong></td>
            </tr>
            
            <tr>
               <td colspan="2"><strong>Train Number & Name : <?php echo $trainNoName;?></strong></td>
               <td><strong>Date of Journey : <?php echo $doj;?></strong></td>
            </tr>

            <tr>
               <td><strong>Class: <?php echo $class;?></strong></td>
               <td><strong>Date Of Booking: <?php echo $dob;?></strong></td>
               <td><strong>Date Of Boarding: <?php echo $doj;?></strong></td>
            </tr>

            <tr>
               <td><strong>From: <?php echo $from;?></strong></td>
               <td><strong>To: <?php echo $to;?></strong></td>
               <td><strong>Distance: <?php echo $distance;?></strong></td>
            </tr>
            
            <tr>
               <td><strong>Boarding: <?php echo $from;?></strong></td>
               <td><strong>Resv Upto: <?php echo $to;?></strong></td>
               <td><strong>Quota: General</strong></td>
            </tr>

            <tr>
               <td><strong>Scheduled Departure: <?php echo $ScD;?> Hrs</strong></td>
               <td><strong>Total Fare: <?php echo $total;?></strong></td>
               <td><strong>Adult: <?php echo $Adult;?> Child: <?php echo $Child;?></strong></td>
            </tr>

            <tr>
               <td colspan="3"><strong>*Departure time printed on the ERS is liable to change. New time table from 01-07-2008</strong></td>
            </tr>
         </tbody>
      	
      </table>
      <table class="table">
         <tbody>
            <tr>
               <td style="border:1px solid black;"><strong>Sr.No</strong></td>
               <td style="border:1px solid black;"><strong>Name </strong></td>
               <td style="border:1px solid black;"><strong>Age </strong></td>
               <td style="border:1px solid black;"><strong>Sex</strong></td>
               <td style="border:1px solid black;"><strong>Booking Status/CurrentStatus/Coach No./Seat</strong></td>
            </tr>
            <?php
               for ($i=0; $i < $no_of_pass ; $i++) { 

                  echo "<tr>\n";
                  echo "<td><strong>".($i+1)."</strong></td>\n";
                  echo "<td><strong>".$credentials[0][$i]."</strong></td>\n";
                  echo "<td><strong>".$credentials[1][$i]."</strong></td>\n";
                  echo "<td><strong>".$credentials[2][$i]."</strong></td>\n";
                  echo "<td><strong>".$status[$i]."</strong></td>\n";
                  echo "</tr>\n";
               }
            ?>
           </tbody>
      </table>
      <table class="table">
         <caption style="font-size:16px"> <strong>Agency Details</strong></caption>
         <tbody>
            <tr>
               <td style="border:1px solid black;"><strong>Name: www.webexpress.net16.net</strong></td>
               <td style="border:1px solid black;"><strong>Agent Name: Anonymous</strong></td>
               <td style="border:1px solid black;"><strong>E-Mail ID:sales@webexpress.net16.net</strong></td>
            </tr>
            <tr>
               <td colspan="2"><strong>Address: 23/37, GARIAHAT ROAD, , Kolkata, 700029, West Bengal, India</strong></td>
               <td><strong>Phone No: 65128173</strong></td>
            </tr>
         </tbody>
      </table>
      <div class="instructions">
         <caption style="font-size:20px"> <strong class="sty">Service Charges</strong></caption>
         <p><strong>1-IRCTC service charge:-Rs 25.00</strong></p>
         <p><strong>2-Agents charge (in addition to IRCTC service charges) Rs.10/- for Second / Sleeper class per ticket and Rs. 20/- for higher class per ticket.</strong></p>
         <p><strong>3- GSA(Agent in Nepal,Sharjah)- will charge (in addition to IRCTC service charges) Rs.50/- for Second / Sleeper class per ticket and Rs. 100/- for higher class per ticket.</strong></p>
      </div>
      <div class="banner">
         <img src="images/banner.jpg" style="width:100%; height:120px; ">
      </div>
      <div class="instructions">
         <caption style="font-size:20px"> <strong class="sty">Important</strong></caption>
         <p><strong>• One of the passenger booked on an E-ticket is required to present any of the five identity cards noted below in original during the
train journey and same will be accepted as a proof of identity failing which all the passengers will be treated as travelling without ticket
and shall be dealt as per extant Railway Rules. Valid Ids:- Voter Identity Card / Passport / PAN Card / Driving License / Photo ID card
issued by Central / State Govt. for their employees.</strong></p>
         <p><strong>• The accommodation booked is not transferable and is valid only if one of the ID card noted above is presented during the journey.
The passenger should carry with him the Electronic Reservation Slip print out. In case the passenger does not carry the electronic
reservation slip, a charge of Rs.50/- per ticket shall be recovered by the ticket checking staff and an excess fare ticket will be issued in
lieu of that.</strong></p>
      
      </div>
      <div class="row row-centered">
         <div class=" col-md-12 col-centered" style="text-align:center;">
            <p><strong style="font-size:16px; text-decoration:underline;" >IRCTC Generate E-Ticket</strong></p>
         </div>
      </div>
   </div>
   <div class="container" id="no-print">
      <div class="row rcentered ">
         <div class="col-md-4 ccentered">
            <button class="btn btn-primary btn-block" onclick="printIt()">Print The Ticket</button>
         </div>
      </div>
   </div>
   <script type="text/javascript">
            function printIt() {
                var divToPrint = document.getElementById('no-print').innerHTML;
                document.getElementById('no-print').innerHTML = "";
                window.print();
                document.getElementById('no-print').innerHTML = divToPrint;
            }
   </script>
</body>
</html>