<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default-skyblue.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-default-skyblue" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>My form</h2></div>
	<div class="element-select"  <?frmd_add_class("select")?>><label class="title">Select</label><div class="large"><span><select name="select" >

		<option value="options 1">options 1</option><br/>
		<option value="options 2">options 2</option><br/>
		<option value="options 3">options 3</option><br/></select><i></i></span></div></div>
	<div class="element-input"  title="yes" <?frmd_add_class("input1")?>><label class="title">Input Text</label><input class="large" type="text" name="input1" /></div>
	<div class="element-input"  title="yes" <?frmd_add_class("input")?>><label class="title">Input Text<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-date"  <?frmd_add_class("date")?>><label class="title">Date</label><input class="large" placeholder="yyyy-mm-dd" type="date" name="date" /></div>
	<div class="element-radio"  <?frmd_add_class("radio")?>><label class="title">Radio Buttons</label>		<div class="column column1"><input type="radio" name="radio" value="options 1" /><span>options 1</span><br/><input type="radio" name="radio" value="options 2" /><span>options 2</span><br/><input type="radio" name="radio" value="options 3" /><span>options 3</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-name"  <?frmd_add_class("name")?>><label class="title">Name</label><span class="nameFirst"><input  type="text" size="8" name="name[first]" /><label class="subtitle">First</label></span><span class="nameLast"><input type="text" size="14" name="name[last]" /><label class="subtitle">Last</label></span></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-default-skyblue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>