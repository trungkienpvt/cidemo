<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Google_maps_markers Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Google_maps_markers
 * @author		Marc Arbour marbour@ci2.ca
 * @version     1.0
 * @copyright   2010 Marc Arbour
 * @license     http://ci2.ca/google_maps_markers/Google_maps_markers_license.html
 * @link		http://ci2.ca/google_maps_markers
 * @see         script release notices: http://linfolettre.com/lists/?p=subscribe&id=9
 * @example     http://ci2.ca/google_maps_markers/google_maps_markers.html
 */

/*--------------------------------------------------
 | Google Maps Markers Class
 | By Marc Arbour
 | Copyright (c) 2010 
 | Email: marbour@ci2.ca
 | License: http://ci2.ca/google_maps_markers/Google_maps_markers_license.html
 +--------------------------------------------------
 | Email bugs/suggestions to marbour@ci2.ca
 +--------------------------------------------------
 | Be informed of script releases at 
 | http://linfolettre.com/lists/?p=subscribe&id=9
 +--------------------------------------------------
 | Read the help page here:
 | http://ci2.ca/google_maps_markers/google_maps_markers.html
 +--------------------------------------------------
 | This script has been created and released under
 | the GNU GPL and is free to use and redistribute
 | only if this copyright statement is not removed
 +--------------------------------------------------*/
class CI_Google_maps_markers {

	var $CI;
    
    var $origin_lat	      	= 10.23205;       // The latitude origin at which we show the map
	var $origin_lng	      	= 107.65498;       // The longitude origin at which we show the map

	var $max_pins  	       	= 500;      // maximum number of pins to show on a map
                                        // carefull not to put too high a number here since
                                        // slow computer with old hardware will have seem 
                                        // to hang on the user because all pins are scripted
                                        // on the client side with javascript

    var $map_type           = "ROADMAP";/* valid values are:
                                           ROADMAP displays the normal, default 2D tiles of Google Maps.
                                           SATELLITE displays photographic tiles.
                                           HYBRID displays a mix of photographic tiles and a tile layer for prominent features (roads, city names).
                                           TERRAIN displays physical relief tiles for displaying elevation and water features (mountains, rivers, etc.).
                                           information found here: http://code.google.com/apis/maps/documentation/javascript/tutorial.html */
    var $default_zoom_level = 8;       // Default zoom level the map will be shown at



    // as per explaned here: http://code.google.com/apis/maps/documentation/javascript/overlays.html
    // Marker sizes are expressed as a Size of X,Y
    // where the origin of the image (0,0) is located
    // in the top left of the image.

    // Origins, anchor positions and coordinates of the marker
    // increase in the X direction to the right and in
    // the Y direction down.
    var $image1     = 'google_maps_pin_red.png'; // what the image 1 is called
    var $image1_width      = 21;      // self explanatory
    var $image1_height     = 35;      // self explanatory
    var $image1_x_origin   = 0;       // self explanatory
    var $image1_y_origin   = 0;       // self explanatory
    var $image1_x_anchor   = 10;      // see above
    var $image1_y_anchor   = 35;      // see above

    var $image2     = 'google_maps_pin_yellow.png'; // what the image 1 is called
    var $image2_width      = 21;      // self explanatory
    var $image2_height     = 35;      // self explanatory
    var $image2_x_origin   = 0;       // self explanatory
    var $image2_y_origin   = 0;       // self explanatory
    var $image2_x_anchor   = 10;      // see above
    var $image2_y_anchor   = 35;      // see above
     
    var $image3     = 'google_maps_pin_purple.png'; // what the image 1 is called
    var $image3_width      = 21;      // self explanatory
    var $image3_height     = 35;      // self explanatory
    var $image3_x_origin   = 0;       // self explanatory
    var $image3_y_origin   = 0;       // self explanatory
    var $image3_x_anchor   = 10;      // see above
    var $image3_y_anchor   = 35;      // see above

    var $image4     = 'google_maps_pin_pale_blue.png'; // what the image 1 is called
    var $image4_width      = 21;      // self explanatory
    var $image4_height     = 35;      // self explanatory
    var $image4_x_origin   = 0;       // self explanatory
    var $image4_y_origin   = 0;       // self explanatory
    var $image4_x_anchor   = 10;      // see above
    var $image4_y_anchor   = 35;      // see above

    var $image5     = 'google_maps_pin_green.png'; // what the image 1 is called
    var $image5_width      = 21;      // self explanatory
    var $image5_height     = 35;      // self explanatory
    var $image5_x_origin   = 0;       // self explanatory
    var $image5_y_origin   = 0;       // self explanatory
    var $image5_x_anchor   = 10;      // see above
    var $image5_y_anchor   = 35;      // see above
     
    var $image6    = 'google_maps_pin_orange.png'; // what the image 1 is called
    var $image6_width      = 21;
    var $image6_height     = 35;
    var $image6_x_origin   = 0;
    var $image6_y_origin   = 0;
    var $image6_x_anchor   = 10;
    var $image6_y_anchor   = 35;

    /*
    
    here is the place to add as many default_imagex as you want:
    var $image7    = 'image_name.png'; // what the image 1 is called
    var $image7_width      = 21;
    var $image7_height     = 35;
    var $image7_x_origin   = 0;
    var $image7_y_origin   = 0;
    var $image7_x_anchor   = 10;
    var $image7_y_anchor   = 35;
     
    and so forth
    ...
    */
    
	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
     
	function CI_Google_maps_markers ($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);
		}

		log_message('debug', "Google Maps Markers Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the Google Maps Markers
	 *
	 * @access	public
	 * @return	string
	 */
	function create_map($markers)
	{
		if ( ($markers[1]['lat'] == NULL) or ($markers[1]['lng'] == NULL) ) { //if there is a defined marker
            return "";
		} else {
            $this->CI =& get_instance();
            $this->CI->load->config('google_maps_markers');
            
            $image_path = $this->CI->config->item('themes_image') . 'image_google_map/'; // default path where images are stored
//            die($image_path);
            $output = '';   //initialize an empty output string
            $output .= '<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
                <style type="text/css">
                  html { height: 100% }
                  body { height: 100%; margin: 0px; padding: 0px }
                  #map_canvas { height: 100% }
                </style>
                <script type="text/javascript"
                    src="http://maps.google.com/maps/api/js?sensor=true">
                </script>
                <script type="text/javascript">
                  function initialize() {
                    var myLatlng = new google.maps.LatLng('.$this->origin_lat.', '.$this->origin_lng.');
                    var myOptions = {
                      zoom: '.$this->default_zoom_level.',
                      center: myLatlng,
                      mapTypeId: google.maps.MapTypeId.'.$this->map_type.'
                    }
                
                    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                    ';
            $loop_counter=1; // instanciate the var the we'll use to increment to generate dynamic code for adding markers
            
            while (!isset($exit_loop)) {
                $output .= '
                  var image'.$loop_counter.' = new google.maps.MarkerImage(\''.$image_path.$this->{'image'.$loop_counter}.'\',
                      new google.maps.Size('.$this->{'image'.$loop_counter.'_width'}.', '.$this->{'image'.$loop_counter.'_height'}.'),
                      new google.maps.Point('.$this->{'image'.$loop_counter.'_x_origin'}.', '.$this->{'image'.$loop_counter.'_y_origin'}.'),
                      new google.maps.Point('.$this->{'image'.$loop_counter.'_x_anchor'}.', '.$this->{'image'.$loop_counter.'_y_anchor'}.'));
                    ';

                $loop_counter++; //increment the loop counter so that we can display another marker

                if ( !isset($this->{'image'.$loop_counter}) ) {
                    $exit_loop = ""; // initialize $exit_loop so that we can exit the loop
                }
            }
            
            unset($exit_loop); // unset the var so we can reuse it right away
            
            $loop_counter=1; // instanciate the var the we'll use to increment to generate dynamic code for adding markers
            
            while (!isset($exit_loop)) {
                $output .= '
                    var contentString'.$loop_counter.' = \''.$markers[$loop_counter]['contentString'].'\';
                        
                    var infowindow'.$loop_counter.' = new google.maps.InfoWindow({
                        content: contentString'.$loop_counter.'
                    });
                
                    var marker'.$loop_counter.' = new google.maps.Marker({
                        icon: '.$markers[$loop_counter]['image'].',
                        position: new google.maps.LatLng('.$markers[$loop_counter]['lat'].', '.$markers[$loop_counter]['lng'].'),
                        map: map,
                        title: \''.$markers[$loop_counter]['title'].'\'
                    });
                    google.maps.event.addListener(marker'.$loop_counter.', \'click\', function() {
                      infowindow'.$loop_counter.'.open(map,marker'.$loop_counter.');
                    });';

                $loop_counter++; //increment the loop counter so that we can display another marker

                if (!isset($markers[$loop_counter]['lat'])) {
                    $exit_loop = ""; // initialize $exit_loop so that we can exit the loop
                }
            }

            $output .= '}</script>';
            
    		return $output;
		  
		}
	}
}
// END Google_maps_markers Class

/* End of file google_maps_markers.php */
/* Location: ./system/libraries/Google_maps_markers.php */