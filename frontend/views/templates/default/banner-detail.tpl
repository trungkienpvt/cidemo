<link href="{$cssPath}stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{$cssPath}preview.csss"/>
	<link rel="stylesheet" type="text/css" href="{$cssPath}wt-rotator.css" />
 	<script type="text/javascript" src="{$jsPath}jquery-1.7.1.min.js" ></script>
    <script type="text/javascript" src="{$jsPath}jquery.easing.1.3.min.js" ></script>
    <script type="text/javascript" src="{$jsPath}jquery.wt-rotator.min.js" ></script>    
	<script type="text/javascript" src="{$jsPath}preview_banner.js" ></script>
<div id="primary1">
<div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="triworks_abstract17.jpg" /></noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul>
                    {foreach item = row from = $BANNER_LIST}
                    <li>
                            <a href="{$imageUpload}orginal/{$row.images}" /><img src="{$imageUpload}thumb/{$row.images}"/></a>
                            <a  ></a>                        
                            
                        </li>
                    {/foreach}
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
