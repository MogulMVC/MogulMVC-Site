<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}
?>
<?php 
// 'xhtml11' 'xhtml1-strict' 'xhtml1-transitional' 'xhtml1-frame' 'html5' 'html4-strict' 'html4-transitional' 'html4-frame'
echo $GLOBALS['DOCTYPE']['html4-transitional'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<?php if(!empty($page_title)): ?>
		<title><?php echo $page_title . ' - ' . APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo $page_title . ' - ' . APPLICATION_NAME; ?>" />
	<?php else: ?>
		<title><?php echo APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo APPLICATION_NAME; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_description)): ?>
		<meta name="description" content="<?php echo $page_description; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_keywords)): ?>
		<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<?php endif; ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<?php
		MLoad::template_framework('head_css');
		MLoad::template_framework('head_js');
	?>

</head>

<body>