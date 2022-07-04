<div>	<h1>Ajax Advance Serch Selector Setting </h1>	
<div class="shortcodetxt"> The shortcode is [ajaxadvancesearch] </div>
<div class= "position">Please Select Attribute To Display Frontend</div>

<?php

global $wpdb;
$tablename = $wpdb->prefix . "posts";
 
$post_type      = "page";
$post_title     = "Ajax Advance Search";
$post_content   = "[ajaxadvancesearch]";
$post_status    = "publish";
$post_author    = 2;
$post_name      = "ajax-advance-serch-page";
 
if (!get_page_by_path( $post_name, OBJECT, 'page')) { // Check If Page Not Exits
    $sql = $wpdb->prepare("INSERT INTO `$tablename` (`post_type`, `post_title`, `post_content`, `post_status`, `post_author`, `post_name`) values (%s, %s, %s, %s, %d, %s)", $post_type, $post_title, $post_content, $post_status, $post_author, $post_name);
 
    $wpdb->query($sql);  
}



?>





<?php
// End Category Display..........................................................................
 global $wpdb;
 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
 $sql_query_to_create_table = "CREATE TABLE `wp_ajax_search_plugin` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `value` varchar(150) DEFAULT NULL,
     `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1"; /// sql query to create table

 dbDelta($sql_query_to_create_table);
    $chirag = "123";
 
 
    global $wpdb;
    $wpdb->insert(
        "wp_ajax_search_plugin",
        array(
            "id" => "1",
            "value"=>"Please Select",
        )
        );
	

        $sql_query_to_create_table = "CREATE TABLE `wp_ajax_search_plugin_show` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `value` varchar(150) DEFAULT NULL,
            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
           ) ENGINE=MyISAM DEFAULT CHARSET=latin1"; /// sql query to create table
       
        dbDelta($sql_query_to_create_table);
           $chirag = "123";
        
        
           global $wpdb;
           $wpdb->insert(
               "wp_ajax_search_plugin_show",
               array(
                   "id" => "1",
                   "value"=>"Please Select",
               )
               );
           
	// This is Attribute Array
	
wc_attribute_label( $name, $product = '' ); 
$attributes = wc_get_attribute_taxonomies();
echo '<pre>'; //print_r($attributes);

?>


<form method="post" action="" id="my-form" onsubmit="window.location.reload();">
<select name="selectedvalue[]" multiple>
    <?php

foreach ($attributes as $row) {
	foreach($row as $key=>$value){
		
			if($key == 'attribute_label' ){
					$label = $value;
					//echo $label;
						}
				if($key == 'attribute_name' ){
					$chi = "pa_". $value;
                    
						}
				if($key == 'attribute_type'){
					//print_r($value);
					$attype =  $value;
					
                    global $wpdb;
$result = $wpdb->get_results ( "SELECT value FROM wp_ajax_search_plugin");
//print_r($result);
//    echo $pricefrom;
$variable = array();
	foreach($result as $proee){
	   $variable =  $proee->value; 
      // echo $variable;
	   //echo $proee->id;
	}


$pra = explode(",",$variable);
 $mainlabeltrim = array();
foreach($pra as $p){
    //echo $p;
    $mainlable = str_replace('pa_','',$p);
    $mainlabeltrim[] = trim($mainlable);
  
    // if($mainlabeltrim == $label ){

    // }
    // else{
        
    // }
    
    
   
}
//print_r($mainlabeltrim);
//exit();
//var_dump($mainlabeltrim);


?>

<div class="adminselect">
    <option  class="cheattr" id="<?php echo $label; ?>" name='colour[]' <?php if(in_array($label,$mainlabeltrim)){?>selected<?php }?> value="<?php   echo $label; ?>" ><?php   echo $label; ?></option>
</div>

			<div class="attributecls">
					<?php
						
						$terms = get_terms($chi);
						

						//print_r($value);
						//echo $attype;
						
						// foreach ( $terms as $term ) {
						// //print_r($term);
						// $type = $term->name;
						// $termss = "brand";
						// ?>
					 <div class="labelclas">

				
							
							</div><?php } 

				?> </div><?php
				//echo $label;
			}
			}
	//}
	
?>
            </select>

<?php

global $wpdb;
   $result1 = $wpdb->get_results ( "SELECT value FROM wp_ajax_search_plugin_show");
  // print_r($result1);
   $variableshow = array();
	foreach($result1 as $proee1){
	   $variableshow =  $proee1->value; 
	
	   //echo $proee->id;
	}
   
	$mainheare = trim($variableshow);
 // var_dump($mainheare);
?>
<div class="position">Please Select The Position</div>
<div class="positionfor">
<label>
        <input type="radio" <?php echo ($mainheare == 'header') ? 'checked="checked"' : ''; ?> name="radio" value="header">Header
        <span class="select"></span>
      </label>
      <label>
        <input type="radio" <?php echo ($mainheare == 'footer') ? 'checked="checked"' : ''; ?> name="radio" value="footer">Footer
        <span class="select"></span>
      </label>
</div>
     
           <div class="adminbutton">
        <input type="submit" class="ajaxadvanceserchb" value="Submit" onclick="loadDoc()" name="submit">
            </div>
			</form>


            
            <?php


if(isset($_POST['submit'])){
    if(!empty($_POST['radio'])) {
        $showon = '  ' . $_POST['radio'];
      } else {
        echo 'Please select the value.';
      }
      
      global $wpdb;
    $wpdb->update(
        "wp_ajax_search_plugin_show",
        array(
            "value"=>"$showon"
            
        ),
        array(
            "id" => "1"
        )
        );
    
	$pricefrom =  $_POST['selectedvalue'];
    

    $checked = "";
if ($_POST['colour']) {
  $checked = "checked";
  // May need to be "checked='checked'" for xhtml
}
	//print_r($pricefrom);
    $items = array();

    $string = ' ';
    

foreach($pricefrom  as $data){
   // echo $data.'<br>';
    $string .= 'pa_'.$data .',';
    
    
}
//echo $string;
global $wpdb;
    $wpdb->update(
        "wp_ajax_search_plugin",
        array(
            "value"=>"$string"
            
        ),
        array(
            "id" => "1"
        )
        );
        
      
}
            ?>




<style>
    .adminselect {
    width: 50%;
    margin-left: 200px;
    padding: 10px;
}

.adminbutton input.ajaxadvanceserchb {
    background: orangered;
    color: white;
    padding: 7px 23px;
}
.positionfor {
    display: flex;
    margin-top: -16px;
    margin-left: -26px;
    font-size: 18px;
}
header#header {
    height: 176px;
}
.position {
    font-size: 19px;

    padding-bottom: 16px;
}
select {
    width: 22%;
}
    </style>


<form action="" method="post" class="mb-3">
      
    </form>
    <?php
      if(isset($_POST['submit'])){
       // echo $_POST['selectedvalue'];
      }
    ?>


<?php


?>

<style>
    .adminselect {
    width: 50%;
    margin-left: 200px;
    padding: 10px;
}
select {
    margin-left: 55px;
}
select {
    margin-top: -26px;
    height: 143px !important;
}
option.cheattr {
    padding: 5px;
    font-size: 17px;
}
.adminbutton input.ajaxadvanceserchb {
    background: orangered;
    color: white;
    padding: 7px 23px;
}div#wpfooter {    display: none;}#wpwrap {    height: auto;    min-height: auto !important;    width: auto;    position: relative;    -webkit-font-smoothing: subpixel-antialiased;}#wpbody-content {    padding-bottom: 0 !important;    float: left;    width: 100%;    overflow: visible;}
    </style>

<form action="" method="post" class="mb-3">
      
    </form>
    <?php
      if(isset($_POST['submit'])){
        
      }
    ?>


<?php


?>
