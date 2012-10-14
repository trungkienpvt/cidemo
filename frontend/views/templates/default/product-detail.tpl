<link href="{$cssPath}stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="{$jsPath}stickytooltip.js"></script>
 
 
<div id="primary">
<div class="column" id="display">
            <a class="large" href="#"><img src="{$imageUpload}thumbxx/{$PRODUCT_DATA.images}" data-tooltip="sticky" alt="shirt"  /></a>
            <span>{$CLICK_TO_FULL_IMAGE}</span>
        </div>
        
        <div class="column" id="productInfo">
            <div class="part" id="productHeader">
                <h3>{$PRODUCT_DATA.name}</h3>
                <span class="price">VND {$PRODUCT_DATA.price}</span>
                <p>{$PRODUCT_DATA.content}</p>
            </div>
            <form method="get" action="/basket/add">
                <div class="part" id="addTo">
                    <a href="{$baseUrl}cart/add/id/{$PRODUCT_DATA.id}" class="FancyFormRadio FancyFormRadio-current" style="float:left">Add to  cart</a>
                    <a href="{$baseUrl}product" class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-left:5px">Back to shopping</a>
                    <p>
                        {$CONTACT_TEXT} <span>023 9242 6388</span> 
                    </p>
                </div>
            </form>
            <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="{$imageUpload}orginal/{$PRODUCT_DATA.images}" alt="" title=""/></div>
				</div>
