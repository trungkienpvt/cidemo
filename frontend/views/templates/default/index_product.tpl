 <link href="{$cssPath}stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="{$jsPath}stickytooltip.js"></script>
 {literal}
 <script type="text/javascript" >
 function changeImage(value){
	 $('#imgtooltip').attr("src",value);
	 }
 </script>
 {/literal}
 <div id="primary1">
            <div >
                <div id="itemCount">
                    {$BREAD_CRUMB}
                </div>
                <div id="sortable">
                </div>

            </div>
            <div class="productWrap itemInfo">
                <ul>
                {$PRODUCT_ITEM}
                </ul>
                <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="http://localhost/ciapp/data/images/orginal/1334685030ao-ba-lo-nu-AT133-500x500.jpg" alt="" title=""/></div>
				</div>
            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div id="pagination">
        {$PAGINATION_STRING}
</div>
            </div></div>
     