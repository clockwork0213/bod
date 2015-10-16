<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?php echo site_url("../assets/css/treeview/treeview.css"); ?>"/>

<div class="row">
	<div class="col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-12">
		<div class="page-header">
			<h1><a href="http://www.veteransbank.com.ph" target="_blank"><img src="<?php echo site_url("/PVBIcon4.ico") ?>"></img></a> <small>Philippine Veterans Bank</small></h1>
		</div>
		<div class="well">
			<legend>Board Director Files</legend>
			<div class="css-treeview">
			<?php echo $ulli; ?>
			</div>
		</div>
	</div>
</div>
