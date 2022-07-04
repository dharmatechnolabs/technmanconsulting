<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
                
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

</script>
<div class="rightpr">
  <form class="container mt-5">
      <label>Select Product</label>
      <select class="products">
      <option value="Please Select">Please Select</option>
          <option value="Just Energy - Residential">Just Energy - Residential</option>
          <option value="Energy & Hot Water Diverter">Energy & Hot Water Diverter</option>
          
      </select>
     

  </form>
<?php
$ch = '<p id="productsname"></p>';
echo $ch;
?>






<div class="container mt-5">
    <div class="productsone">
                     <div class="">
                     <label class="nopanel" >Number Of Panel</label>
                        <div class="customecal">
                            <div class="input-group mb-3">
                             
                                <div class="input-group-prepend">
                                    <button  class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="number" onchange="myFunction()" id="qty_input" class="form-control form-control-sm" value="4" >
                                
                                <div class="input-group-prepend">
                                    <button  class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                                </div>
                                
                            </div>
                            <p id="alt"></p>
                            <p id="alert"></p>
                            <div id="Calc">
                            
                            
                            <div class="text"> I am Eligible For The Grant</div>
                            <div id="grant"></div>
							
							<div class="yeandno">
  <label class="choice">
   Yes
    <input type="radio" name="choice-radio">
   
  </label>
  <label class="choice">
      No
    <input type="radio" name="choice-radio">

  </label>
  <p class="morein">  -Click For More Info</p>
</div>
                            <p id="exp"></p>
                            <p id="expcost"></p>
							<div class="extracosttext">Extra Cost</div>
							<p class="cost">Cost</p>
                            <p id="clientgross"></p>
							<p class="nocost"> (No Grant)</p>
                            <p id="lessgrant"></p>
							<p class="lessgranttext">If Grant Approvel</p>
                            <div class="pym">Select Payment Terms</div>
                            <div class="uppay"> Pay Up Front</div>
                            <p id="upfrontpayment"></p>
							<p class="dic">Discounted </p>
							<p id="upfrontpaymentto"></p>
							<p class="dictext"> with No grant</p>
                            <p id="detail"></p>
							<p class="detext">-Grant</p>
							<p id="detailone"></p>
							<p id="detailto"></p>
							<p class="withg">With Grant</p>
                            <div class="financebox"></div>

                            <div class="text2">Finance</div>
                               <div class="bottemp"> 
                            <div class="pumtamout">Upfront Payment Amount</div>
                            <p id="finance"></p>
                           <div class="slectyear">
                            <label>Select Payment Term </label>


                            <select id="noyear">
							
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                
                            </select>
                            </div>
                            <p id="ye"></p>
							<p class="yetext"> MonthlyGRs</p>
                            <p id="Monthlyent"></p>
							<p class="monthtext">MonthlyNet</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        
                    </div>
                </div>
       
		
</div>
</div>
<div class="leftsidee">
		<div> <div class="nopa">This<p id="demo"></p>  Number Of Panels </div> <div class="genrat">Generates -<p id="kw"></p>KW’s of Electricity </div>

<div class="free">You can power your Car for Free </div>
<div class="need">You can power all you hot water needs</div>

			</div>

		</div> 
<div class="prod2">


<div class="container mt-5">
<label class="nopanel" >Number Of Panel</label>
                     <div class="productsecond">
                    
                        <div class="customeproducts2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button  class="btn btn-dark btn-sm" id="minus-btn2"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="number" onchange="myFunction()" id="qtypr_input" class="form-control form-control-sm" value="4" min="1">
                                <div class="input-group-prepend">
                                    <button  class="btn btn-dark btn-sm" id="plus-btn2"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
							<p id="al"></p>
                            
                            <p id="clickalert></p>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="secpro">
                        
                        <div class="systemsizekw">
                      
                        </div>
                        
                        <div class="systemsizekw">
                        <div class="text"> I am Eligible For The Grant</div>
                        <p id="grantvalue"></p>
						
                        </div>
						<div class="yeandno">
  <label class="choice">
   Yes
    <input type="radio" name="choice-radio">
   
  </label>
  <label class="choice">
      No
    <input type="radio" name="choice-radio">

  </label>
  <p class="morein">  -Click For More Info</p>
</div>

						
						

                        <div class="systemsizekw">
                        <p id="extrapanel"></p>
                        </div>
                        <div class="systemsizekw">
                        <p id="extracostonpanel"></p>
                        </div>
                        <div class="systemsizekw">
						<p class="costtext">Cost</p>
                        <p id="costnogrant"></p>
						 <p class="costnograntto">(No Grant)</p>
                        </div>
                        <div class="systemsizekw">
                        <p id="netclientcost"></p>
						<p class="netclientgrosstext">If Grant Approvel</p>
                        </div>
                        <div class="pym">Select Payment Terms</div>
                            <div class="uppay"> Pay Up Front</div>
                      
                          <div class="systemsizekw">
                        <p id="upfrontpaymentpr"></p>
						<p class="dictoo">Discounted To </p>
						 <p id="upfrontpaymentprto"></p>
						 <p class="withtext">with No grant</p>
                        </div>


                        <div class="systemsizekw">
                        <p id="detailpr"></p>
						<p class="granttext"> - Grant </p>
						<p id="detailprone"></p>
						<p id="detailprto"></p>
						<p id="detailprtext">With Grant</p>
						
						
                        </div>
                        <div class="text2">Finance</div>
                        <div class="bottemp">
                        <div class="textpr">Upfront Payment Amount</div>
                        <div class="systemsizekw">
                            
                        <p id="financepr"></p>
                        </div>
                        </div>
                        <label>Select Payment Term</label>
                        <select id="noyearpr">
									
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                
                            </select>
                            <p id="yepr"></p>
							<p class="monthtext">MonthlyGRs</p>
                            <p id="Monthlyentpr"></p>
							<p class="prtext">MonthlyNet</p>
                    </div>
					
</div>

                </div>
				
</div>
<div class="leftsideepr"> 
					<div class="customeboxtext">  <div class="nop">This <p id="alertcl"></p> number Of Panel </div> <div class="gen"> Generates <p id="systemsixekw"></p>KW’s of Electricity </div>

				<div class="free">	You can power your Car for Free </div>
<div class="need">You can power all you hot water needs</div>
</div>
					
					  
					</div>
<script>


jQuery('#plus-btn').click(function(){
    var alt = 'Please Select The Products';
   
    document.getElementById("alt").innerHTML = alt;
    });   
		$(".leftsideepr").hide();
		$(".rightpr").css("border-right", "none");
	$(".leftsidee").hide();
	jQuery('#qty_input').prop('disabled', true);
    jQuery('#minus-btn').click(function(){
    var alt = 'Please Select The Products';
   
    document.getElementById("alt").innerHTML = alt;
    });
    jQuery("#Calc").hide();
    jQuery(".prod2").hide();

    //This Code For The Get Dropdown Value 
    //strat
    jQuery(document).ready(function(){
        jQuery("select.products").change(function(){
     var selectedCountry = jQuery(this).children("option:selected").val();
      //alert("You have selected the country - " + selectedCountry);
      var chirag = jQuery("#productsname").html(selectedCountry);
      



      if (selectedCountry == 'Just Energy - Residential'){
		  $(".leftsideepr").hide();
		  $(".rightpr").css("border-right", "1px solid");
		  $(".leftsidee").show();
		  var f = $("#qty_input").val();
		document.getElementById("demo").innerHTML = f;
		console.log(f);
		$("#Calc").show();
		
		
		
		
        jQuery(".prod2").hide();
       
        jQuery(".productsone").show();
      
		  var year = "365";

    var kw = f * year;
    document.getElementById("kw").innerHTML = "€" + kw ;

//grant Value
var a = '1800';
var b = '2000';
var res = a/b;
var grant = res* kw;
document.getElementById("grant").innerHTML =  " €" + grant ;
var ep = '8';
if (f >= 6 && f <=10){
    var E = '2000';
var com = kw - E;
var dval = '0.3';

var mul = com * dval;
var grant = mul + 1800;
console
document.getElementById("grant").innerHTML =  "€" + grant ;
}
if(f > 10)
{
    var grant = '2400'
    document.getElementById("grant").innerHTML = "€" + grant ;
}


// var extrapanel = f-ep;
// console.log(extrapanel);

var ep = '8';

// var extrapanel = f-ep;
var extrapanel = '0';

// if(extrapanel <= 0){
//     var extrapanel = '0'
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// } 
// else{
    
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// }  
// console.log(extrapanel);

var excostperpanel = '720';

var extracost = extrapanel * excostperpanel
document.getElementById("expcost").innerHTML = "€" + extracost ;


// var L = '5940';
// var ClientGross = extracost + L;
// document.getElementById("clientgross").innerHTML = ClientGross +' Cost (No Grant)';


var basecost = '5940';
var fiv = 5;
var clientgros = 5940 + extracost;
document.getElementById("clientgross").innerHTML = "€" + clientgros;
//console.log(clientgros);

var lessGrant = clientgros - grant;
document.getElementById("lessgrant").innerHTML = "€" + lessGrant;
// console.log(lessGrant); 
var upfrontpayment = clientgros * 0.94;
document.getElementById("upfrontpayment").innerHTML = "€" + clientgros;
document.getElementById("upfrontpaymentto").innerHTML = "€" + upfrontpayment.toFixed(2);
console.log(upfrontpayment.toFixed(2));

document.getElementById("detail").innerHTML = "€" + clientgros;
document.getElementById("detailone").innerHTML =  "€" + grant;
document.getElementById("detailto").innerHTML =  "€" + lessGrant

document.getElementById("finance").innerHTML =  "€" + upfrontpayment.toFixed(2) +' ';




var year = $("#noyear").val();

var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = "€" + monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = "€" + monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);


jQuery('#noyear').on('change', function() {

var year = ( this.value );
var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = "€" + monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = "€" + monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);

});





       //This code for get Number Box Value 
       jQuery(document).ready(function(){
        jQuery("#alt").hide();
        jQuery('#qty_input').prop('disabled', true);
   // this code for Plus Button

   var f =  jQuery('#demo').text(jQuery('#qtypr_input').val());


  

  jQuery('#plus-btn').click(function(){
    jQuery("#Calc").show();
    var y = jQuery('#qty_input').val(parseInt(jQuery('#qty_input').val()) + 1 );
    var f = document.getElementById("qty_input").value;
    document.getElementById("demo").innerHTML = f;
    if(f == '1'){
      var alert =  'please select value 4 or abouve 4';
      jQuery("#alert").show();
      jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
        
     }
     if(f == '2'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if(f == '3'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if(f == '0'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if (f >= 4){
         console.log('hi');
         jQuery("#alert").hide();
         jQuery("#Calc").show();
     }
     
        if (jQuery('#qty_input').val() == 0) {
            jQuery('#qty_input').val(1);
		}
    if (f >= 4){
         console.log('hi');
         jQuery("#alert").hide();
        
     }
     if (f > 20){
        var alert =  'Please Choos Max 20';
        jQuery("#alert").show();
        
        document.getElementById("alert").innerHTML = alert;
        jQuery("#Calc").hide();
        console.log("Hello Chiirag");
        
        
     }
    
    var year = "365";

    var kw = f * year;
    document.getElementById("kw").innerHTML = "€" + kw ;

//grant Value
var a = '1800';
var b = '2000';
var res = a/b;
var grant = res* kw;
document.getElementById("grant").innerHTML =  " €" + grant ;
var ep = '8';
if (f >= 6 && f <=10){
    var E = '2000';
var com = kw - E;
var dval = '0.3';

var mul = com * dval;
var grant = mul + 1800;
console
document.getElementById("grant").innerHTML =  "€" + grant;
}
if(f > 10)
{
    var grant = '2400'
    document.getElementById("grant").innerHTML = "€" + grant;
}


// var extrapanel = f-ep;
// console.log(extrapanel);

var ep = '8';

// var extrapanel = f-ep;
var extrapanel = '0';

// if(extrapanel <= 0){
//     var extrapanel = '0'
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// } 
// else{
    
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// }  
// console.log(extrapanel);

var excostperpanel = '720';

var extracost = extrapanel * excostperpanel
document.getElementById("expcost").innerHTML = "€" + extracost;


// var L = '5940';
// var ClientGross = extracost + L;
// document.getElementById("clientgross").innerHTML = ClientGross +' Cost (No Grant)';


var basecost = '5940';
var fiv = 5;
var clientgros = 5940 + extracost;
document.getElementById("clientgross").innerHTML = "€" + clientgros;
//console.log(clientgros);

var lessGrant = clientgros - grant;
document.getElementById("lessgrant").innerHTML = "€" + lessGrant;
// console.log(lessGrant); 
var upfrontpayment = clientgros * 0.94;
document.getElementById("upfrontpayment").innerHTML = "€" + clientgros;
document.getElementById("upfrontpaymentto").innerHTML =  "€" + upfrontpayment.toFixed(2);


console.log(upfrontpayment.toFixed(2));

document.getElementById("detail").innerHTML = "€" + clientgros;
document.getElementById("detailone").innerHTML =  "€" + grant;
document.getElementById("detailto").innerHTML =  "€" + lessGrant

document.getElementById("finance").innerHTML =  "€" + upfrontpayment.toFixed(2) +' ';


var year = $("#noyear").val();

var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = "€" + monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = "€" + monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);


jQuery('#noyear').on('change', function() {

var year = ( this.value );
var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = "€" + monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = "€" + monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);

});
});

     





     //End Code
     // This Code For Minus Button      
     jQuery('#minus-btn').click(function(){
        jQuery("#Calc").show();
        jQuery("#alt").hide();
       var f =  jQuery('#demo').text(jQuery('#qtypr_input').val());

       jQuery('#qtypr_input').on('input', function() {
document.getElementById("demo").innerHTML = f;

  });
    var y = jQuery('#qty_input').val(parseInt(jQuery('#qty_input').val()) - 1 );
    var f = document.getElementById("qty_input").value;
    document.getElementById("demo").innerHTML = f;
   
    var year = "365";

var kw = f * year;
document.getElementById("kw").innerHTML = "€" + kw ;

var a = '1800';
 var b = '2000';

var res = a/b;

var grant = res* kw;
console.log(grant);
document.getElementById("grant").innerHTML = "€" + grant;

if (f >= 6 && f <=10){
    var E = '2000';
var com = kw - E;
var dval = '0.3';

var mul = com * dval;
var grant = mul + 1800;
document.getElementById("grant").innerHTML = "€" + grant;
}
if(f > 10)
{
    var grant = '2400'
    document.getElementById("grant").innerHTML = "€" + grant;
}

var ep = '8';

var extrapanel = '0';

// if(extrapanel <= 0){
//     var extrapanel = '0'
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// } 
// else{
    
//     document.getElementById("exp").innerHTML = extrapanel +' Extra Panel';
// }  
var excostperpanel = '720';

var extracost = extrapanel * excostperpanel
document.getElementById("expcost").innerHTML = "€" + extracost;

// var L = '5940';
// var ClientGross = extracost + L;
// document.getElementById("clientgross").innerHTML = ClientGross +' Extra Cost';

var basecost = '5940';
var fiv = 5;
var clientgros = 5940 + extracost;
// document.getElementById("clientgross").innerHTML = clientgros +' client Gross Cost';
document.getElementById("clientgross").innerHTML = "€" + clientgros;
// console.log(clientgros);

var lessGrant = clientgros - grant;
document.getElementById("lessgrant").innerHTML = "€" + lessGrant ;

var upfrontpayment = clientgros * 0.94;
document.getElementById("upfrontpayment").innerHTML = "€" + clientgros;
document.getElementById("upfrontpayment").innerHTML = "€" + upfrontpayment.toFixed(2);

document.getElementById("detail").innerHTML = "€" + clientgros;
document.getElementById("detailone").innerHTML =  "€" + grant;
document.getElementById("detailto").innerHTML =  "€" + lessGrant;

document.getElementById("finance").innerHTML =  "€" + upfrontpayment.toFixed(2) +' ';

var year = $("#noyear").val();

var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);

jQuery('#noyear').on('change', function() {

var year = ( this.value );
var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = monthlypay.toFixed(2);
document.getElementById("Monthlyent").innerHTML = monthlynetpalan.toFixed(2);
console.log(monthlynetpalan);
console.log(monthly);

});
//  console.log(upfrontpayment);

    if(f == '1'){
      var alert =  'please select value 4 or abouve 4';
      jQuery("#alert").show();
      jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
        
     }
     if(f == '2'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if(f == '3'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if(f == '0'){
        var alert =  'please select value 4 or abouve 4';
        jQuery("#alert").show();
        jQuery("#Calc").hide();
        document.getElementById("alert").innerHTML = alert;
     }
     if (f >= 4){
         console.log('hi');
         jQuery("#alert").hide();
         jQuery("#Calc").show();
     }
     if (f > 20){
        var alert =  'Please Choos Max 20';
        jQuery("#alert").show();
        
        document.getElementById("alert").innerHTML = alert;
        jQuery("#Calc").hide();
        console.log("Hello Chiirag");
        
        
     }
     
        if (jQuery('#qty_input').val() == 0) {
            jQuery('#qty_input').val(1);
		}

        });
        // End Code
 });

    }
    if (selectedCountry == 'Energy & Hot Water Diverter'){
       $(".rightpr").css("border-right", "1px solid");
		$(".leftsideepr").show();
	   $(".leftsidee").hide();
	   var g = $("#qty_input").val();
		document.getElementById("alertcl").innerHTML = g;
		console.log(g);
	  
var panelsizeW = '365';
    	var systemsizeKw = g * panelsizeW;
        document.getElementById("systemsixekw").innerHTML = "€" + systemsizeKw ;
        console.log(systemsizeKw);
       

        //grant Value
var c = '1800';
var d = '2000';
var rese = c/d;
var grantva = rese* systemsizeKw;
console.log(grantva);
document.getElementById("grantvalue").innerHTML = "€" +  grantva;
var ep = '8';
if (g >= 6 && g <=10){
    var E = '2000';
var com = systemsizeKw - E;
var dval = '0.3';

var mul = com * dval;
var grantva = mul + 1800;

document.getElementById("grantvalue").innerHTML = "€" + grantva;
}
if(g > 10)
{
    var grantva = '2400'
    document.getElementById("grantvalue").innerHTML = "€" + grantva;
}
var ep = '8';

// var extrapanelp2 = g-ep;
var extrapanelp2 = '0';

// if(extrapanelp2 <= 0){
//     var extrapanelp2 = '0'
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 
// else{
    
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 

var extracostperpanel = '720';

var extracostonpanel = extrapanelp2 * extracostperpanel
document.getElementById("extracostonpanel").innerHTML = "€" + extracostonpanel +' Extra Cost';


var costnotgrant = 7140 + extracostonpanel;
document.getElementById("costnogrant").innerHTML = "€" + costnotgrant;

var netclientgross = costnotgrant - grantva;
document.getElementById("netclientcost").innerHTML = "€" + netclientgross;

var upfrontpaymentpr = costnotgrant * 0.94;
document.getElementById("upfrontpaymentpr").innerHTML = "€" + costnotgrant;
document.getElementById("upfrontpaymentprto").innerHTML =  "€" + upfrontpaymentpr.toFixed(2);
document.getElementById("detailpr").innerHTML = "€" + costnotgrant;
document.getElementById("detailprone").innerHTML =  " €" + grantva;
document.getElementById("detailprto").innerHTML = " €" + netclientgross;

document.getElementById("financepr").innerHTML =   "€" + upfrontpaymentpr.toFixed(2) +' ';

var yearpr = $("#noyearpr").val();
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);


jQuery('#noyearpr').on('change', function() {

var yearpr = ( this.value );
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);

});
	  
	  
	  
	  
	  
	  
	  
        jQuery(".prod2").show();
        jQuery(".productsone").hide();
        
 //-------------------------------------------------------------------------------------------       
  
 jQuery(document).ready(function(){
    jQuery('#qtypr_input').prop('disabled', true);
	
	$(".leftsidee").hide();
    jQuery('#plus-btn2').click(function(){
        jQuery(".secpro").show();
      var y = jQuery('#qtypr_input').val(parseInt(jQuery('#qtypr_input').val()) + 1 );
      var g = document.getElementById("qtypr_input").value;
      document.getElementById("alertcl").innerHTML = g;
      jQuery(".secpro").show();
      if(g == "0"){
        jQuery(".secpro").hide();
          var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;

       }
       if(g == "1"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
       
       }
       if(g == "2"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
       
       }
       if(g == "3"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
       
       }
       if(g > 20){
        
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }


        var panelsizeW = '365';
    	var systemsizeKw = g * panelsizeW;
        document.getElementById("systemsixekw").innerHTML = "€" + systemsizeKw ;
        console.log(systemsizeKw);
       

        //grant Value
var c = '1800';
var d = '2000';
var rese = c/d;
var grantva = rese* systemsizeKw;
console.log(grantva);
document.getElementById("grantvalue").innerHTML = "€" +  grantva;
var ep = '8';
if (g >= 6 && g <=10){
    var E = '2000';
var com = systemsizeKw - E;
var dval = '0.3';

var mul = com * dval;
var grantva = mul + 1800;

document.getElementById("grantvalue").innerHTML = "€" + grantva;
}
if(g > 10)
{
    var grantva = '2400'
    document.getElementById("grantvalue").innerHTML = "€" + grantva;
}
var ep = '8';

// var extrapanelp2 = g-ep;
var extrapanelp2 = '0';

// if(extrapanelp2 <= 0){
//     var extrapanelp2 = '0'
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 
// else{
    
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 

var extracostperpanel = '720';

var extracostonpanel = extrapanelp2 * extracostperpanel
document.getElementById("extracostonpanel").innerHTML = "€" + extracostonpanel ;


var costnotgrant = 7140 + extracostonpanel;
document.getElementById("costnogrant").innerHTML = "€" + costnotgrant;

var netclientgross = costnotgrant - grantva;
document.getElementById("netclientcost").innerHTML = "€" + netclientgross;

var upfrontpaymentpr = costnotgrant * 0.94;
document.getElementById("upfrontpaymentpr").innerHTML = "€" + costnotgrant;
document.getElementById("upfrontpaymentprto").innerHTML =  "€" + upfrontpaymentpr.toFixed(2);
document.getElementById("detailpr").innerHTML = "€" + costnotgrant;
document.getElementById("detailprone").innerHTML =  " €" + grantva;
document.getElementById("detailprto").innerHTML = " €" + netclientgross;

document.getElementById("financepr").innerHTML =   "€" + upfrontpaymentpr.toFixed(2) +' ';



var yearpr = $("#noyearpr").val();
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);



jQuery('#noyearpr').on('change', function() {

var yearpr = ( this.value );
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);

});

    });
           
             
    jQuery('#minus-btn2').click(function(){
    	var y = jQuery('#qtypr_input').val(parseInt(jQuery('#qtypr_input').val()) - 1 );
         var g = document.getElementById("qtypr_input").value;
          document.getElementById("alertcl").innerHTML = g;
          console.log(g);
          jQuery(".secpro").show();
          if(g == "0"){
        
          var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
        jQuery(".secpro").hide();


       }
       if(g == "1"){
       
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g == "2"){
        
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g == "3"){
       
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("al").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g > 20){
        
        var alrtcl = "Please Choos Max 20 ";
        document.getElementById("al").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
        //   jQuery(".secpro").show();
          var panelsizeW = '365';
    	var systemsizeKw = g * panelsizeW;
        document.getElementById("systemsixekw").innerHTML =  "€" + systemsizeKw ;
        console.log(systemsizeKw);
 //grant Value
 var c = '1800';
var d = '2000';
var rese = c/d;
var grantva = rese* systemsizeKw;
console.log(grantva);
document.getElementById("grantvalue").innerHTML = "€" + grantva;
var ep = '8';
if (g >= 6 && g <=10){
    var E = '2000';
var com = systemsizeKw - E;
var dval = '0.3';

var mul = com * dval;
var grantva = mul + 1800;
console
document.getElementById("grantvalue").innerHTML = "€" +  grantva;
}
if(g > 10)
{
    var grantva = '2400'
    document.getElementById("grantvalue").innerHTML =  "€" + grantva;
}
var ep = '8';

// var extrapanelp2 = g-ep;
var extrapanelp2 = '0';
// if(extrapanelp2 <= 0){
//     var extrapanelp2 = '0'
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 
// else{
    
//     document.getElementById("extrapanel").innerHTML = extrapanelp2 +' Extra Panel';
// } 

var extracostperpanel = '720';

var extracostonpanel = extrapanelp2 * extracostperpanel
document.getElementById("extracostonpanel").innerHTML = "€" + extracostonpanel ;

var costnotgrant = 7140 + extracostonpanel;
document.getElementById("costnogrant").innerHTML = "€" + costnotgrant;

var netclientgross = costnotgrant - grantva;
document.getElementById("netclientcost").innerHTML = "€" + netclientgross ;




var yearpr = $("#noyearpr").val();
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);



jQuery('#noyearpr').on('change', function() {

var yearpr = ( this.value );
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr.toFixed(2);
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr.toFixed(2);
console.log(monthlynetpalanpr);
console.log(monthlypr);

jQuery("#clickalert").hide();
});

    	if (jQuery('#qtypr_input').val() == 0) {
			jQuery('#qtypr_input').val(1);
		}

        

    	    });
 });

    }

  
  });
});
    //End

   
 function myFunction() {
  var x = document.getElementById("qty_input").value;
 
  document.getElementById("demo").innerHTML = "You selected: " + x;
  
}




</script>


<style>.input-group.mb-3 
{    display: flex;
}
form.container.mt-5 {    
margin-top: 40px !important; 
   padding-left: 25px;	 
   margin-bottom: 18px;
   }
   p.text {
	   margin-top: 1px !important;
	   }
	   p#netclientcost {
		   margin-left: 48px !important;
		   }
		   .input-group-prepend
		   {    margin: 4px 4px;
		   }
form.container.mt-5 {
    padding-left: 25px;
}
label.nopanel {
    padding-right: 21px;
}
p#alt {
    color: red;
    margin-bottom: 27px !important;
    font-size: 14px;
    margin-top: -6px !important;
}

p#productsname {
    display: none;
}
input#qty_input {
    max-width: 81px;
    height: 34px;
}
button#minus-btn {
    width: 20px;
    padding: 0;
    margin: 0;
}
button#plus-btn {
    padding: 0;
    margin: 0;
    width: 20px;
}
select.products {
    height: 50px;
    font-size: 14px;
}
select#noyear {
    height: 37px;
}

label.nopanel {
    font-size: 15px;
    padding-right: 21px;
}
form.container.mt-5 label {
    font-size: 15px;
	    margin-left: -7px;
}
div#Calc label {
	    padding: 10px;
    font-size: 15px;
}
.text {
    font-size: 16px;
    float: left;
    display: inline-block;
	}
	div#grant {
    font-size: 16px;
    margin-left: 10px;
    display: inline-block;
}
p#expcost {
    font-size: 16px;
}
p#clientgross {
    font-size: 16px;
}
p#lessgrant {
    font-size: 16px;
	    margin-bottom: 54px;
}
.pym {
    font-size: 17px;
}
.uppay {
    font-size: 19px;
    margin-left: 15px;
    padding: 9px;
}
p#upfrontpaymentpr {
    margin-left: 7% !important;
}
p#detailpr {
    margin-left: 7% !important;
}
p#upfrontpayment {
    font-size: 16px;
	    margin-left: 51px;
}
p#detail {
    font-size: 16px;
	    margin-left: 51px;
}
p#finance {
    border: 1px solid black;
    display: inline-block;
}
.pumtamout {
    font-size: 16px;
    display: inline-block;
    margin-right: 10px;
}
p#finance {
    border: 1px solid black;
    display: inline-block;
    padding: 10px;
    font-size: 16px;
}
.slectyear label {
    font-size: 16px !important;
}
p#ye {
    font-size: 16px;
    padding: 10px;
}
	p#Monthlyent {
    font-size: 16px;
    padding: 10px;
}
p#kw {
    font-size: 16px;
}
input#qtypr_input {
    max-width: 78px;
}
button#minus-btn2 {
    margin: 0;
}
button#plus-btn2 {
    margin: 0;
}
p {
    font-size: 17px;
    margin: 10px;
}
select#noyearpr {
    font-size: 16px;
    height: 49px;
    width: 95px;
}
p {
    margin-left: 13px !important;
}
.text {
    margin-left: 2px;
}
p#financepr {
    border: 1px solid;
    display: inline-block;
    margin-top: -2px;
    margin-bottom: 24px;
}
.textpr {
    display: inline-block;
    float: left;
}
.bottemp {
    margin-left: 49px;
}
.text2 {
    font-size: 22px !important;
    margin: 13px 0;
}
label.nopanel {
    float: left;
}
div#Calc {
     border-right: 1px solid;
    width: 711px;
    float: left;
}
.rightpr {
    width: 726px;
    border-right: 1px solid;
}
.leftsidee {
	    padding: 7px;
        border: 1px solid;
    float: right;
    height: 322px;
    width: 29%;
	    margin-top: -41px;
}
p#demo {
    display: inline-block;
}

p#kw {
    display: inline-block;
    font-size: 16px;
	    margin: 6px !important;
}
.customecal {
    margin-top: 8% !important;
}
div#grant {
    margin-top: 7%;
}
div#Calc .text {
    margin-top: 7%;
}
p#expcost {
    margin-left: 27% !important;
}
p#clientgross {
    
    font-size: 16px;
}
p#lessgrant {
    display: inline-block;
    margin-left: 27% !important;
}
p#detail {
    display: inline-block;
    margin-left: 27% !important;
    margin-bottom: 36px;
}
p#lessgrant {
    margin-left: 27% !important;
}
.pym {
    margin-left: 0%;
    font-size: 17px;
}
.uppay {
    font-size: 19px;
    margin-left: 13%;
    padding: 9px;
}
p#upfrontpayment {
    margin-left: 26% !important;
}
p#detail {
    margin-left: 26% !important;
    margin-bottom: 36px;
}
.pumtamout {
    margin-left: 8%;
}
.slectyear label {
    font-size: 16px !important;
    margin-left: 6%;
}
select#noyear {
   
	    width: 85px;
    margin-left: 8% !important;
}

.secpro {
    width: 50%;
    float: left;
}
.leftsideepr {
	    padding: 7px;
    border: 1px solid;
    width: 29%;
    height: 363px;
    float: right;
	    margin-top: -87px;
}
select.products {
    margin-bottom: 41px;
	    margin-left: 48px;
}
.systemsizekw .text {
    margin-left: 0%;
}
p#grantvalue {
    display: inline-block;
    margin-top: 1px;
    margin-left: 31px !important;
}
.customeproducts2 {
    padding-bottom: 42px;
}
p#extracostonpanel {
       margin-left: 26% !important;
    display: inline-block;
    width: 50%;
}
.secpro p.text {
    margin-top: 18px !important;
    margin-left: 40% !important;
}
p#costnogrant {
        display: inline-block;
    margin-left: 139px !important;
}
p#netclientcost {
display: inline-block;
    margin-left: 26% !important;
    margin-bottom: 13%;
}
p#upfrontpaymentpr {
    margin-left: 31% !important;
}
p#detailpr {
	 display: inline-block;
    margin-bottom: 11%;
    margin-left: 31% !important;
}
.textpr {
    margin-left: 29%;
}
.text2 {
    margin-left: 15%;
}
.secpro label {
    margin-left: 35%;
}
select#noyearpr {
    margin-left: 5%;
}
p#systemsixekw {
	    margin: 6px !important;
    display: inline-block;
}
p#alertcl {
    display: inline-block;
}
p#Monthlyentpr {
    margin-left: 62% !important;
}
p#yepr {
    margin-left: 62%!important;
    margin-top: 7%;
}
p#financepr {
    padding: 9px;
}
div#grant {
    color: black;
    margin-left: 25px;
}

p#expcost {
    display: inline-block;
}
.extracosttext {
	    margin-left: -5px;
    display: inline-block;
	    width: 50%;
}
p.cost {
       display: inline-block;
    width: 25%;
    margin-left: 5px !important;
}
p#clientgross {
	    margin-left: -5px !important;
    display: inline-block;
}
p.nocost {
	    width: 50%;
	    margin-left: -5px !important;
    display: inline-block;
}
p.lessgranttext {
	    margin-left: -5px !IMPORTANT;
    display: inline-block;
}
p#upfrontpayment {
    display: inline-block;
}
p.dic {
	    margin-left: -6px !important;
    display: inline-block;
}
p#upfrontpaymentto {
	    margin-left: -6px !important;
    display: inline-block;
}
p.dictext {
	    margin-left: -6px !important;
    display: inline-block;
}
p.detext {
	    margin-left: -6px !important;
    display: inline-block;
}
p#detailone {
	    margin-left: -6px !important;
    display: inline-block;
}
p#detailto {
	    margin-left: -6px !important;
    display: inline-block;
}
p.withg {
    display: inline-block;
    margin-left: -6px !important;
}
p.yetext {
    display: inline-block;
    margin-left: -9px !important;
}
p#ye {
    margin-left: 47% !important;
    display: inline-block;
}
p#Monthlyent {
    margin-top: -28px;
    display: inline-block;
    margin-left: 46% !IMPORTANT;
}
p.monthtext {
    display: inline-block;
    margin-left: -4px !important;
}
p.costtext {
    display: inline-block;
    margin-left: 1px !important;
    margin-top: 11px;
}
p.costnograntto {
    display: inline-block;
    margin-left: -4px !important;
}
p.netclientgrosstext {
    display: inline-block;
    margin-left: -1px !important;
}
p#upfrontpaymentpr {
    display: inline-block;
}
p.dictoo {
    margin-left: -4px !important;
    display: initial;
}
p#upfrontpaymentprto {
    display: inline-block;
    margin-left: -5px !important;
}
p.withtext {
    display: inline-block;
    margin-left: -6px !important;
}
p.granttext {
    display: inline-block;
    margin-left: -2px !important;
}
p#detailprone {
    display: inline-block;
    margin-left: -6px !important;
}
p#detailprto {
    display: inline-block;
    margin-left: -3px !important;
}
p#detailprtext {
    display: inline-block;
    margin-left: -8px !important;
}
p#yepr {
    display: inline-block;
}
p.monthtext {
    display: inline-block;
    margin-left: -4px !important;
}
p#Monthlyentpr {
    display: inline-block;
    margin-left: 62% !important;
}
p.prtext {
    margin-left: 3px !important;
    display: inline-block;
}
.yeandno {
    margin-left: 25%;
}
label.choice {
    margin: 0 !important;
}
p.morein {
    display: inline-block;
    color: blue !important;
}
input[type=radio] {
  padding: 0.5em;
  -webkit-appearance: none;
  outline: 0.1em solid black;
  outline-offset: 0.1em;
}

input[type=radio]:checked {
  display: inline-block;
  background-color: #000;
}
.input-group.mb-3 {
    width: 50%;
    display: flex;
	    padding-left: 14px;
}
.container.mt-5 {
    margin: 0 !important;
}
.prod2 {
    width: 726px;
    border-right: 1px solid;
}

.secpro {
    width: 711px !important;
    float: left;
    border-right: 1px solid;
}
.need {
    margin-top: 11px;
}
.free {
    margin-top: 25px;
}

@media (min-width: 320px) and (max-width: 991px){
	.leftsidee {
    margin-right: 42px;
    padding: 7px;
    border: 1px solid;
    float: right;
    height: 322px;
    width: 100%;
    margin-top: 0;
}
.leftsideepr {
    padding: 7px;
    border: 1px solid;
    width: 100%;
    height: 363px;
    float: right;
    margin-right: 42px;
    margin-top: 0px;
}
}
@media (min-width: 992px) and (max-width: 1200px){
.rightpr {
    width: 515px;
    border-right: 1px solid;
}
div#Calc {
    border-right: 1px solid;
    width: 500px;
    float: left;
}
.prod2 {
    width: 515px;
    border-right: 1px solid;
}
.secpro {
    width: 500px !important;
    float: left;
    border-right: 1px solid;
}
p#upfrontpaymentpr {
    margin-left: 28% !important;
}
p#detailpr {
    display: inline-block;
    margin-bottom: 11%;
    margin-left: 28% !important;
}
select#noyearpr {
    margin-left: 10%;
}
}

@media (min-width: 320px) and (max-width: 767px){
	
select.products {
    margin-bottom: 41px;
    margin-left: 48px;
    width: 125px;
}
.yeandno {
    margin-left: 6%;
}
p#extracostonpanel {
    margin-left: 6% !important;
    display: inline-block;
    width: 50%;
}
p#costnogrant {
    display: inline-block;
    margin-left: 0% !important;
}
p#netclientcost {
    display: inline-block;
    margin-left: 7% !important;
    margin-bottom: 13%;
}
.uppay {
    font-size: 19px;
    margin-left: 1%;
    padding: 9px;
}
p#upfrontpaymentpr {
    margin-left: 37px !important;
    width: auto;
}




.rightpr {
    width: 100%;
    border-right: none !important;
}
div#Calc {
    border-right: none;
    width: 100%;
    float: left;
}
.leftsidee {
    margin-right: 0;
}
.prod2 {
    width: 100%;
    border-right: none;
}
.secpro {
    width: 100% !important;
    float: left;
    border-right: none;
}
.boxed div.section .section_inner, .carousel-inner .slider_content_outer, .container_inner, .container_inner nav.content_menu, .full_width .parallax_content, .steps_holder_inner, div.grid_section .section_inner, nav.content_menu ul {
    width: auto;
}
}
</style>










