 <link href="{$cssPath}stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="{$jsPath}stickytooltip.js"></script>
 {literal}
 <script type="text/javascript" >
 function changeImage(value){
	 $('#imgtooltip').attr("src",value);
	 }
 </script>
 {/literal}
 <div id="primary2">
            <div >
                <div id="itemCount">
                    {$BREAD_CRUMB}
                </div>
                
<!--                <div id="sortable">-->
<!--                    <h5>Sort by</h5>-->
<!--                    <form action="" method="get" accept-charset="utf-8">-->
<!--                        <p class="clearFix"><select name="sort" class="dropdown" rel="dropdown">-->
<!--                            <option value="latest" selected>Latest</option>-->
<!--                            <option value="relevant">Relevant</option>-->
<!--                            <option value="price-low">Price Low-High</option>-->
<!--                            <option value="price-high">Price High-Low</option>-->
<!--                        </select></p>-->
<!--                    </form>-->
<!--                </div>-->
            </div>
            <div class="productWrap itemInfo">
                <ul>
                {$PRODUCT_ITEM}
                </ul>
                <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="" alt="" title=""/></div>
				</div>
            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div class="pagination">
        {$PAGINATION_STRING}
</div>
            </div></div>
     