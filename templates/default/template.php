<!DOCTYPE html>
<html>
<head>
	<title>This is default template of MyCMS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getCurrentTemplatePath();?>css/style.css">
</head>

<body>
	<div class="wrapper">
		<div class="header"><?php $this->widgetOutput('logoPosition'); ?></div>
		<div class="clear"></div>
		<div class="sidebar"><?php $this->widgetOutput('sidebarPosition'); ?></div>
		<div class="content"><?php echo $this->appOutput();?></div>
		<div class="clear"></div>
		<div class="footer">This is footer text</div>
	</div>
</body>

</html>