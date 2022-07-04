<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
                
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

</script>

  <form class="container mt-5">
      <label>Choos Products:</label>
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
                            
                            <p id="kw"></p>
                            <div class="text"> I am Eligible For The Grant</div>
                            <div id="grant"></div>
                            <p id="exp"></p>
                            <p id="expcost"></p>
                            <p id="clientgross"></p>
                            <p id="lessgrant"></p>
                            <div class="pym">Select Payment Terms</div>
                            <div class="uppay"> Pay Up Front</div>
                            <p id="upfrontpayment"></p>
                            <p id="detail"></p>
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
                            <p id="Monthlyent"></p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        
                    </div>
                </div>
        <p id="demo"></p>
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
                            <p id="alertcl"></p>
                            <p id="clickalert></p>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="secpro">
                        <p id="cc"></p>
                        <div class="systemsizekw">
                        <p id="systemsixekw"></p>
                        </div>
                        
                        <div class="systemsizekw">
                        <div class="text"> I am Eligible For The Grant</div>
                        <p id="grantvalue"></p>
                        </div>
                        <p class="text">Cost</p>
                        <div class="systemsizekw">
                        <p id="extrapanel"></p>
                        </div>
                        <div class="systemsizekw">
                        <p id="extracostonpanel"></p>
                        </div>
                        <div class="systemsizekw">
                        <p id="costnogrant"></p>
                        </div>
                        <div class="systemsizekw">
                        <p id="netclientcost"></p>
                        </div>
                        <div class="pym">Select Payment Terms</div>
                            <div class="uppay"> Pay Up Front</div>
                      
                          <div class="systemsizekw">
                        <p id="upfrontpaymentpr"></p>
                        </div>


                        <div class="systemsizekw">
                        <p id="detailpr"></p>
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
                            <p id="Monthlyentpr"></p>
                    </div>
</div>
                </div>
</div>

<script>


jQuery('#plus-btn').click(function(){
    var alt = 'Please Select The Products';
   
    document.getElementById("alt").innerHTML = alt;
    });
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
        jQuery(".prod2").hide();
        jQuery("#Calc").hide();
        jQuery(".productsone").show();
      alert('Just Energy - Residential');






       //This code for get Number Box Value 
       jQuery(document).ready(function(){
        jQuery("#alt").hide();
        jQuery('#qty_input').prop('disabled', true);
   // this code for Plus Button

   var f =  jQuery('#demo').text(jQuery('#qtypr_input').val());

   jQuery('#qtypr_input').on('input', function() {
document.getElementById("demo").innerHTML = f;

  });

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
    document.getElementById("kw").innerHTML = "€" + kw +' System Size Kw';

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
document.getElementById("grant").innerHTML =  "€" + grant +' Grant Available';
}
if(f > 10)
{
    var grant = '2400'
    document.getElementById("grant").innerHTML = "€" + grant +' Grant Available';
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
document.getElementById("expcost").innerHTML = "€" + extracost +' Extra Cost';


// var L = '5940';
// var ClientGross = extracost + L;
// document.getElementById("clientgross").innerHTML = ClientGross +' Cost (No Grant)';


var basecost = '5940';
var fiv = 5;
var clientgros = 5940 + extracost;
document.getElementById("clientgross").innerHTML = "€" + clientgros +' Cost (No Grant)';
//console.log(clientgros);

var lessGrant = clientgros - grant;
document.getElementById("lessgrant").innerHTML = "€" + lessGrant +' If Grant Approvel';
// console.log(lessGrant); 
var upfrontpayment = clientgros * 0.94;
document.getElementById("upfrontpayment").innerHTML = "€" + clientgros +' Discounted To ' + "€" + upfrontpayment +' with No grant';
document.getElementById("detail").innerHTML = "€" + clientgros +' - Grant ' + "€" + grant + ' ' + "€" + lessGrant  + 'With Grant';

document.getElementById("finance").innerHTML =  "€" + upfrontpayment +' ';



jQuery('#noyear').on('change', function() {

var year = ( this.value );
var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = "€" + monthlypay +'MonthlyGRs';
document.getElementById("Monthlyent").innerHTML = "€" + monthlynetpalan +'MonthlyNet';
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
document.getElementById("kw").innerHTML = "€" + kw +' System Size Kw';

var a = '1800';
 var b = '2000';

var res = a/b;

var grant = res* kw;
console.log(grant);
document.getElementById("grant").innerHTML = "€" + grant +' Grant Available';

if (f >= 6 && f <=10){
    var E = '2000';
var com = kw - E;
var dval = '0.3';

var mul = com * dval;
var grant = mul + 1800;
document.getElementById("grant").innerHTML = "€" + grant +' Grant Available';
}
if(f > 10)
{
    var grant = '2400'
    document.getElementById("grant").innerHTML = "€" + grant +' Grant Available';
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
document.getElementById("expcost").innerHTML = "€" + extracost +' Extra Cost';

// var L = '5940';
// var ClientGross = extracost + L;
// document.getElementById("clientgross").innerHTML = ClientGross +' Extra Cost';

var basecost = '5940';
var fiv = 5;
var clientgros = 5940 + extracost;
// document.getElementById("clientgross").innerHTML = clientgros +' client Gross Cost';
document.getElementById("clientgross").innerHTML = "€" + clientgros +' Cost (No Grant)';
// console.log(clientgros);

var lessGrant = clientgros - grant;
document.getElementById("lessgrant").innerHTML = "€" + lessGrant +' If Grant Approvel';

var upfrontpayment = clientgros * 0.94;
document.getElementById("upfrontpayment").innerHTML = "€" + clientgros +' Discounted To ' + "€" + upfrontpayment +' with No grant';
document.getElementById("detail").innerHTML = "€" + clientgros +' - Grant ' + "€" + grant + ' ' +  "€" + lessGrant  + 'With Grant';

document.getElementById("finance").innerHTML =  "€" + upfrontpayment +' ';

jQuery('#noyear').on('change', function() {

var year = ( this.value );
var monthly = year * 12;
var monthlypay = clientgros / monthly;

var monthlynetpalan = lessGrant / monthly;


document.getElementById("ye").innerHTML = monthlypay +'Grs';
document.getElementById("Monthlyent").innerHTML = monthlynetpalan +'MonthlyNet';
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
        alert('Energy & Hot Water Diverter');
        jQuery(".prod2").show();
        jQuery(".productsone").hide();
        jQuery(".secpro").hide();
 //-------------------------------------------------------------------------------------------       
  
 jQuery(document).ready(function(){
    jQuery('#qtypr_input').prop('disabled', true);
    jQuery('#plus-btn2').click(function(){
        jQuery(".secpro").show();
      var y = jQuery('#qtypr_input').val(parseInt(jQuery('#qtypr_input').val()) + 1 );
      var g = document.getElementById("qtypr_input").value;
      document.getElementById("alertcl").innerHTML = g;
      jQuery(".secpro").show();
      if(g == "0"){
        jQuery(".secpro").hide();
          var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;

       }
       if(g == "1"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
       
       }
       if(g == "2"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
       
       }
       if(g == "3"){
        jQuery(".secpro").hide();
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
       
       }
       if(g > 20){
        
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }


        var panelsizeW = '365';
    	var systemsizeKw = g * panelsizeW;
        document.getElementById("systemsixekw").innerHTML = "€" + systemsizeKw + 'The System Size KW';
        console.log(systemsizeKw);
       

        //grant Value
var c = '1800';
var d = '2000';
var rese = c/d;
var grantva = rese* systemsizeKw;
console.log(grantva);
document.getElementById("grantvalue").innerHTML = "€" +  grantva +' Grant Available';
var ep = '8';
if (g >= 6 && g <=10){
    var E = '2000';
var com = systemsizeKw - E;
var dval = '0.3';

var mul = com * dval;
var grantva = mul + 1800;

document.getElementById("grantvalue").innerHTML = "€" + grantva +' Grant Available';
}
if(g > 10)
{
    var grantva = '2400'
    document.getElementById("grantvalue").innerHTML = "€" + grantva +' Grant Available';
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
document.getElementById("costnogrant").innerHTML = "€" + costnotgrant +' Cost (No Grant)';

var netclientgross = costnotgrant - grantva;
document.getElementById("netclientcost").innerHTML = "€" + netclientgross +' If Grant Approvel';

var upfrontpaymentpr = costnotgrant * 0.94;
document.getElementById("upfrontpaymentpr").innerHTML = "€" + costnotgrant +' Discounted To ' + "€" + upfrontpaymentpr +' with No grant';
document.getElementById("detailpr").innerHTML = costnotgrant +' - Grant ' + grantva + ' ' + netclientgross  + 'With Grant';

document.getElementById("financepr").innerHTML =   "€" + upfrontpaymentpr +' ';


jQuery('#noyearpr').on('change', function() {

var yearpr = ( this.value );
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr +'MonthlyGRs';
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr +'MonthlyNet';
console.log(monthlynetpalanpr);
console.log(monthlypr);

});

    });
           
             
    jQuery('#minus-btn2').click(function(){
    	var y = jQuery('#qtypr_input').val(parseInt(jQuery('#qtypr_input').val()) - 1 );
         var g = document.getElementById("qtypr_input").value;
          document.getElementById("cc").innerHTML = g;
          console.log(g);
          jQuery(".secpro").show();
          if(g == "0"){
        
          var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();


       }
       if(g == "1"){
       
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g == "2"){
        
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g == "3"){
       
        var alrtcl = "Please Choos Min 4 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
       if(g > 20){
        
        var alrtcl = "Please Choos Max 20 ";
        document.getElementById("alertcl").innerHTML = alrtcl;
        jQuery(".secpro").hide();
       
       }
        //   jQuery(".secpro").show();
          var panelsizeW = '365';
    	var systemsizeKw = g * panelsizeW;
        document.getElementById("systemsixekw").innerHTML =  "€" + systemsizeKw + 'The System Size KW';
        console.log(systemsizeKw);
 //grant Value
 var c = '1800';
var d = '2000';
var rese = c/d;
var grantva = rese* systemsizeKw;
console.log(grantva);
document.getElementById("grantvalue").innerHTML = "€" + grantva +' Grant Available';
var ep = '8';
if (g >= 6 && g <=10){
    var E = '2000';
var com = systemsizeKw - E;
var dval = '0.3';

var mul = com * dval;
var grantva = mul + 1800;
console
document.getElementById("grantvalue").innerHTML = "€" +  grantva +' Grant Available';
}
if(g > 10)
{
    var grantva = '2400'
    document.getElementById("grantvalue").innerHTML =  "€" + grantva +' Grant Available';
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
document.getElementById("costnogrant").innerHTML = "€" + costnotgrant +' Cost (No Grant)';

var netclientgross = costnotgrant - grantva;
document.getElementById("netclientcost").innerHTML = "€" + netclientgross +' If Grant Approvel';

jQuery('#noyearpr').on('change', function() {

var yearpr = ( this.value );
console.log(yearpr);
var monthlypr = yearpr * 12;
var monthlypaypr = costnotgrant / monthlypr;

var monthlynetpalanpr = netclientgross / monthlypr;


document.getElementById("yepr").innerHTML = "€" + monthlypaypr +'MonthlyGRs';
document.getElementById("Monthlyentpr").innerHTML = "€" + monthlynetpalanpr +'MonthlyNet';
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


<style>

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
p#demo {
    display: none;
}
label.nopanel {
    font-size: 15px;
    padding-right: 21px;
}
form.container.mt-5 label {
    font-size: 15px;
}
div#Calc label {
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
    margin-left: 13px;
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
</style>










