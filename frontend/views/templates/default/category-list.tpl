  <div id="primary1">
<div id="itemCount">
                    {$BREAD_CRUMB}
                </div>
                <div id="sortable">
                </div>
 <div class="productWrap itemInfo">           
 <ul class="items">
    {section name=i loop=$CATEGORY_LIST}
    {$START_LOOP=$START_LOOP+1}
					
					{if ($START_LOOP mod 4) eq 0}	
						<li class="last">
						{else}
						<li class="" >
						{/if}
							<a href="{$baseUrl}category/{$CATEGORY_LIST[i].rid}/{$CATEGORY_LIST[i].catName}"><span><img src="{$imageUpload}thumbx/{$CATEGORY_LIST[i].images}" alt="shirt"  /></span></a>
							{$CATEGORY_LIST[i].catName}<br/><p>
							
							<a href="{$baseUrl}category/{$CATEGORY_LIST[i].rid}/{$CATEGORY_LIST[i].catName}" class="FancyFormRadio FancyFormRadio-current" style="width:60px">More</a>
							</p>
						</li>
					
				{/section}
				</ul>
				</div>
            
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div id="pagination">
        {$PAGINATION_STRING}
</div></div>
            </div>

     