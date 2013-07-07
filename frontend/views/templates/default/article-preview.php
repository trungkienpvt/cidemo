<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.: Online news :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema" />
<link rel="stylesheet" type="text/css" href="<?php echo $PREDATA['cssPath'] ?>Tianyon.css">
</head>
<body style="margin: 0px;">
    <div class="wraper">
        <div class="toolTipTitle" style="margin-left: 10px;">
        <?php echo $ARTICLE_DATA['title']?>
        </div>
        <div style="clear: both">
            <img style='float:left;display:block;margin:10px;width:100px;height:100px;' src='<?php echo $PREDATA['imageUpload']?>thumb/<?php echo $ARTICLE_DATA['images']?>' border='0' alt='' />
            <div style="margin-top: 5px; padding: 0px 5px 5px 5px;">
                <span class='LargeTime1'><?php echo date('m-d-Y',$ARTICLE_DATA['createdate'])?></span>
                <br />
                <span class="toolTipBody" style="padding: 0px;">
                    <?php echo $ARTICLE_DATA['description']?>
                </span>
            </div>
        </div>
    </div>
</body>
</html>