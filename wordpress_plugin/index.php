<?php 
/**
 * @package Flst_I
 * @version 1.7
 */
/*
Plugin Name: Bubble Tooltip
Plugin URI: http://flester.ro
Description: add Bubble tooltip or Tooltip wizard(with auto scroll) to your blog post
Author: Flester Iulian
Version: 0.1
Author URI: flester.ro
*/

add_action('init','flstInit');
function flstActivate(){
    
      update_option('flstBubble_background1','#00baff');
      update_option('flstBubble_color1','#eaf9ff');
      update_option('flstBubble_duration',100);
      update_option('flstBubble_width1','250');
      
      
      update_option('flstBubble_background2','red');
      update_option('flstBubble_color2','white');
      update_option('flstBubble_duration1',200);
      update_option('flstBubble_width2',250); 
      update_option('flstBubble_autoscroll',true); 


}
register_activation_hook(__FILE__,'flstActivate')    ;
function flstInit() {
    wp_register_style('flstBbblcss', plugins_url('/css/blue-theme.css',__FILE__ ));
    wp_enqueue_style('flstBbblcss');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'flstpagination', plugins_url( '/js/FlstBubble-min.js', __FILE__ )); 
 
   //Add a callback to regiser our tinymce plugin   
    add_filter("mce_external_plugins", "flstBubble_register_tinymce_plugin"); 

    // Add a callback to add our button to the TinyMCE toolbar
    add_filter('mce_buttons', 'flstBubble_add_tinymce_button');   
}
//This callback registers our plug-in
function flstBubble_register_tinymce_plugin($plugin_array) {
    $plugin_array['flstBubble_button'] = '/wp-content/plugins/flstplugin/js/shortags/simple.js';
    return $plugin_array;
}

//This callback adds our button to the toolbar
function flstBubble_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "flstBubble_button";
    return $buttons;
}
function flstBubble_stag($attributes,$content=null){

shortcode_atts(array('title'=>'Flst Shortcode',
                     'content'=>'',
                     'tag'=>'p',
                     'type'=>'single',
                     'priority'=>'0',
                     
                      
),$attributes);
$type = ($attributes['type']=='single')?'flstBl':'flstBl-wizard';
if($type =='flstBl-wizard'){
  $type .= ' p'.((int)$attributes['priority']);
}

 return '<'.$attributes['tag'].' class="'.$type.'"  title="'.htmlentities($attributes['title']).'" >'.$attributes['content'].'</'.$attributes['tag'].'>
  ';
}
add_shortcode( 'bubble','flstBubble_stag' );   

function flstBubble_option_page(){
    if(isset($_POST['save'])&& check_admin_referer('flstBubble_admin_options-update')){
    
      update_option('flstBubble_background1',$_POST['flstBubble_background1']);
      update_option('flstBubble_color1',$_POST['flstBubble_color1']);
      update_option('flstBubble_duration',$_POST['flstBubble_duration']);
      update_option('flstBubble_width1',$_POST['flstBubble_width1']);
      
      
      update_option('flstBubble_background2',$_POST['flstBubble_background2']);
      update_option('flstBubble_color2',$_POST['flstBubble_color2']);
      update_option('flstBubble_duration1',$_POST['flstBubble_duration1']);
      update_option('flstBubble_width2',$_POST['flstBubble_width2']); 
      update_option('flstBubble_autoscroll',$_POST['flstBubble_autoscroll']);      
      ?>
        <div id="message" class="updated">Settings saved</div>
      <?php 
    }
  ?>
  <form action="" method="post" id="flstBubble-form">
      <div class="wrap">
        <?php screen_icon(); ?>
        <h2>Setttings</h2>
        <h2>Simple Tooltip </h2>
        <table>
          <tr>
              <td>Background:</td>
              <td><input type="text" name="flstBubble_background1" value="<?php echo esc_attr(get_option('flstBubble_background1')); ?>"/></td>
          </tr>
         
          <tr>
              <td>Color:</td>
              <td><input type="text" name="flstBubble_color1" value="<?php echo esc_attr(get_option('flstBubble_color1')); ?>"/></td>
          </tr>  
          <tr>
              <td>Width: </td>
              <td><input type="text" name="flstBubble_width1" value="<?php echo esc_attr(get_option('flstBubble_width1')); ?>"/>px <i>the width of the tooltip</i></td>
          </tr>
          <tr>
              <td>Duration:</td>
              <td><input type="text" name="flstBubble_duration1" value="<?php echo esc_attr(get_option('flstBubble_duration1')); ?>"/><i>how fast a tooltip should popup</i></td>
          </tr>           
         </table>
        <h2>Wizard</h2>
        <table >
          <tr>
              <td>Background:</td>
              <td><input type="text" name="flstBubble_background2" value="<?php echo esc_attr(get_option('flstBubble_background2')); ?>"/></td>
          </tr>
              
          <tr>
              <td>Color:</td>
              <td><input type="text" name="flstBubble_color2" value="<?php echo esc_attr(get_option('flstBubble_color2')); ?>"/></td>
          </tr>  
          <tr>
              <td>Width: </td>
              <td><input type="text" name="flstBubble_width2" value="<?php echo esc_attr(get_option('flstBubble_width2')); ?>"/>px <i>the width of the tooltip</i></td>
          </tr>
          
         </table>


         </table>                                     
        <table >

          <tr>
              <td>Autoscroll:</td>
              <td><input type="checkbox" name="flstBubble_autoscroll" <?php if(get_option('flstBubble_autoscroll')) echo 'checked'  ?>/><i>available only for wizard mode</i></td>
          </tr> 
              
          <tr>
              <td>Duration:</td>
              <td><input type="text" name="flstBubble_duration" value="<?php echo esc_attr(get_option('flstBubble_duration')); ?>"/><i>how fast a tooltip should popup</i></td>
          </tr> 
         </table>           
         <?php wp_nonce_field('flstBubble_admin_options-update'); ?>    
          <p><input type="submit" name="save" value="save" /></p>               
       
      </div>
  <?php 
}
function flstBubble_pluginMenu(){

     add_options_page( 'Bubble Tooltip',
                       'Bubble Tooltip',
                       'manage_options',
                       'cc-bubble-plugin',
                       'flstBubble_option_page' 
        
      );
}

add_action('admin_menu','flstBubble_pluginMenu'); 
function flstBubble_startPlugin() {

$width =   (int)(get_option('flstBubble_width1')?get_option('flstBubble_width1'):250);
$background =   (get_option('flstBubble_background1')?get_option('flstBubble_background1'):'#00baff');
$color =   (get_option('flstBubble_color1')?get_option('flstBubble_color1'):'#eaf9ff');
$duration =  (int) (get_option('flstBubble_duration1')?get_option('flstBubble_duration1'):100);

echo '<script>';

echo ' jQuery(document).ready(function($){  ';
echo 'jQuery(\'.flstBl\').flstBubble({id:\'flstbbl\',duration:'.$duration.',theme: { background:"'.$background.'",color:"'.$color.'"}});                                  
    jQuery("#flstbbl  .flst-msg").css({width: "'.$width.'px"});
   ';
   
$width =   (int)(get_option('flstBubble_width2')?get_option('flstBubble_width2'):250);
$background =   (get_option('flstBubble_background2')?get_option('flstBubble_background2'):'red');
$color =   (get_option('flstBubble_color2')?get_option('flstBubble_color2'):'white');
$duration =  (int) (get_option('flstBubble_duration1')?get_option('flstBubble_duration'):100);    
$autoscroll  =   (get_option('flstBubble_autoscroll')?'true':'false');
echo '      
var flstBBl_classes =new Array();
 $(".flstBl-wizard").each(function(es,e){
        var classname = $(e).attr("class")
        
        var index= classname.match(/(p[0-9]+)/);
           flstBBl_classes.push(index[0]);
           
      
    });
    flstBBl_classes.sort();
   for(var i=0;i<flstBBl_classes.length;i++){
    flstBBl_classes[i]= "."+flstBBl_classes[i];
   }
';
echo 'jQuery(\'.flstBl-wizard\').flstBubble({id:\'flstbbl-wizard\',showOnlyOnWizard: true ,autoscroll:'.$autoscroll.',wizard:flstBBl_classes,duration:'.$duration.',theme: { background:"'.$background.'",color:"'.$color.'"}});                                  
    jQuery("#flstbbl-wizard  .flst-msg").css({width: "'.$width.'px"});
   })';
echo '</script>';
}

// Add hook for front-end <head></head>
add_action('wp_head', 'flstBubble_startPlugin');