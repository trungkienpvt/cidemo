<link href="<?php print $PREDATA['cssPath']?>stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php print $PREDATA['cssPath']?>preview.csss"/>
<link rel="stylesheet" type="text/css" href="<?php print $PREDATA['cssPath']?>wt-rotator.css" />
<script type="text/javascript" src="<?php print $PREDATA['jsPath']?>jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="<?php print $PREDATA['jsPath']?>jquery.easing.1.3.min.js" ></script>
<script type="text/javascript" src="<?php print $PREDATA['jsPath']?>jquery.wt-rotator.min.js" ></script>    
<script type="text/javascript" src="<?php print $PREDATA['jsPath']?>preview_albums.js" ></script>
<div id="primary">
<div class="span12">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="triworks_abstract17.jpg" /></noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul class="album">
                    <?php foreach($ALBUM_LIST as $row):?>
                    <li class="zoomp">
                            <a  rel="lightbox[plants]" href="<?php print $PREDATA['imageUpload']?>orginal/<?php print $row['images']?>" /><img src="<?php print $PREDATA['imageUpload']?>thumb/<?php print $row['images']?>"/></a>
                            <a  ></a>                        
                            
                        </li>
					<?php endforeach;?>
                    </ul>
              </div>  
              	<div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>    
                    <div class="next-btn"></div>               
                </div>
            </div>
        </div>	
  	</div>
</div>
</div>

<script type="text/javascript" language="javascript">
jQuery(document).ready(function($) {
    $('a').smoothScroll({
      speed: 1000,
      easing: 'easeInOutCubic'
    });

    $('.showOlderChanges').on('click', function(e){
      $('.changelog .old').slideDown('slow');
      $(this).fadeOut();
      e.preventDefault();
    })
});
</script>