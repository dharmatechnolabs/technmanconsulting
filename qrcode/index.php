<script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

$('#i_file').change( function() {
	alert("test");
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));

    $("#disp_tmp_path").html("Temporary Path(Copy it and try pasting it in browser address bar) --> <strong>["+tmppath+"]</strong>" );
});


function myFunction(){
	
	//alert($('input[type=file]').val());
	  var image = document.getElementById("url").value;
	//alert(image);
	
//alert(blah.src);
  
 
    const qrCode = new QRCodeStyling({
        width: 400,
        height: 300,
        type: "svg",
        data: image,
        image: blah.src,
		
        dotsOptions: {
            color: "black",
            type: "rounded"
        },
        backgroundOptions: {
            color: "white",
        },
        imageOptions: {
            margin: 0,
			height: 700,
			width: 500
        }
    });
    //place it on the screen
	

    qrCode.append(document.getElementById("canvas"));
	
	
    //download the generate image of the QR code
	//image.style.width = "500px";
    qrCode.download({ name: "qr", extension: "png" });
	
}
</script>



<body>

<div id="output">

    <label>Enter Url </label>
    <input type="text" id="url" name="url" >
   


    <p></p>
    <div id="canvas"></div>
    <p></p>
    <p>
      
    </p>
      <p><strong class="guid"></strong></p>
    
	<form runat="server">
	<label> Upload Logo</label>
  <input accept="image/*" type='file' id="imgInp" />
  <img id="blah" src="#" alt="your image" style="display: none" />
</form>
 <button type="submit" onclick="myFunction()">Generate  </button>
 </div>
<script>
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
	
  }
}

</script>
<style>
	input#url {
    height: 45px;
	font-size: 21px;
    width: 281px;
}
div#output label {
	padding-right: 48px;
    font-size: 22px;
}
input#imgInp {
	margin-left: -30px;
    font-size: 19px;
}
button {
    background: cornflowerblue;
    font-size: 28px;
    border: 1px solid;
    border-radius: 21px;
    color: white;
    padding: 10px 17px;
}
</style>
</body>
