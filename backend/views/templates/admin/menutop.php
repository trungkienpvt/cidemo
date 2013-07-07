<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="<?php print $base_url?>users/"><?php print $this->lang->line('DASHBOARD')?></a>
              </li>
              <li><a class="" href="<?php echo $base_url ?>users/index"><span><?php echo $this->lang->line('USER_MENU_TOP')?></span></a></li>
			<li><a class="" href="<?php echo $base_url ?>aclrole/index"><span><?php echo $this->lang->line('ROLE_MENU_TOP')?></span></a></li>
			<li><a class="" href="<?php echo $base_url ?>album/index"><span><?php echo $this->lang->line('IMAGE_MENU_TOP')?></span></a></li>
            <li><a class="" href="<?php echo $base_url ?>banner/index"><span><?php echo $this->lang->line('BANNER_MENU_TOP')?></span></a></li>
            <li><a class="" href="<?php echo $base_url ?>article/index"><span><?php echo $this->lang->line('ARTICLE_MENU_TOP')?></span></a></li>
            <li><a class="" href="<?php echo $base_url ?>product/index"><span><?php echo $this->lang->line('PRODUCT_MENU_TOP')?></span></a></li>
            <li><a class="" href="<?php echo $base_url ?>menu/index"><span><?php echo $this->lang->line('MENU_MENU_TOP')?></span></a></li>
              <li class="">
                <a href="<?php print $base_url?>users/logout"><?php print $this->lang->line('LOGOUT')?></a>
              </li>
              <li class="">
                <a target="_blank" href="<?php print $basePath?>"><?php print $this->lang->line('VISIT SITE')?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

