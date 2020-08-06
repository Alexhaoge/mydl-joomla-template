<?php
/**
 * @package     MyDL
 * 
 * @copyright   Copyright (C) 2020 alexhaoge.xyz. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @authors		Zhihao Lyu, Zhicheng Wang
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();
$doc = JFactory::getDocument();
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

$this->setHtml5(true);
//adding css and html
$doc = JFactory::getDocument();
$fontawesome = "templates/mydl/font-awesome-4.7.0/css/font-awesome.min.css";
$bootstrapcss = "templates/mydl/bootstrap4/css/bootstrap.min.css";
$popper = "templates/mydl/js/popper.js";
$jquery = "templates/mydl/js/jquery.min.js";
$bootstrapjs = "templates/mydl/bootstrap4/js/bootstrap.min.js";
$draftcss = "templates/mydl/css/mydl.css";
$toccss = "templates/mydl/bootstrap4/css/bootstrap-toc.min.css";
$tocjs = "templates/mydl/bootstrap4/js/bootstrap-toc.min.js";
$run_prettify = "templates/mydl/js/run_prettify.js";
$animate = "templates/mydl/css/animate.min.css";
$waypoint = "templates/mydl/js/jquery.waypoints.min.js";
$doc->addStyleSheet($fontawesome);
$doc->addStyleSheet($bootstrapcss);
$doc->addScript($jquery);
$doc->addScript($popper);
$doc->addScript($bootstrapjs);
$doc->addScript($run_prettify);
if ($this->params->get('style','default.php') == 'home.php') {
	$doc->addStyleSheet($animate);
	$doc->addScript($waypoint);
}
if ($this->params->get('style','default.php') == 'default.php') {
	$doc->addStyleSheet($toccss);
	$doc->addScript($tocjs);
}
$doc->addStyleSheet($draftcss);

// Getting params from template
$params = $app->getTemplate(true)->params;
// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

 // Check for a custom CSS file
 JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

 // Check for a custom js file
 JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));
 ?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
	<jdoc:include type="head" />
</head>
<body class="site <?php echo $option
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($this->direction === 'rtl' ? ' rtl' : '');
?>"
	data-spy="scroll" data-target="#ttttoc"
	onload="PR.prettyPrint()">

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: purple;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand">
			<img src="templates/mydl/img/logo2.png" alt="logo" style="width:40px;">
			MyDL
		</a>
  		
		<div class="collapse navbar-collapse" id="navbarToggler">
			<jdoc:include type="modules" name="topNavBar" /> 
        	<jdoc:include type="modules" name="search"/>
			<jdoc:include type="modules" name="position0"/>
		</div>
	</nav>
	
	<?php  
		$style = $this->params->get("style","default.php");
		$layoutFile = JPATH_ROOT."/templates/mydl/styles/".$style;
		ob_start();
		include($layoutFile);
		$output = ob_get_contents();
		ob_end_clean();
		echo  $output;	
	?>

	<div class="container-fluid">
		<footer class="tutorials-footer row">
		<div class="col-md-6 col-12">
			<p>Project page for 
				<a href="#">Something</a> 
				by <a href="#">Alice</a> and Bob
			</p>
			<p>Power by <a href="https://www.joomla.org/">Joomla!</a></p>
			<p>ICP备案号 &nbsp&nbsp&nbsp&nbsp
        		<a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
				<img src="templates/mydl/img/beian.png" style="float:left;"/>公安备案号</a>
			</p>
			<p>© <?php echo $sitename;?>. All rights reserved.</p>
			<p><a href="#">Back to top</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="index.php?option=com_creativecontactform&view=creativecontactform&form=1">Report举报</a></p>
		</div>
		<div class="col-md-2 col-4">
			<h6>MyDL</h6>
			<p><a href="#">Introduction</a></p>
			<p><a href="#">Get Started</a></p>
			<p><a href="#">Contributing</a></p>
		</div>
		<div class="col-md-2 col-4">
			<h6>Resources</h6>
			<p><a href="#">Tutorials</a></p>
			<p><a href="#">Docs</a></p>
			<p><a href="https://github.com/">Github</a></p>
         </div>
			<div class="col-md-2 col-4">
				<h6>About Us</h6>
				<p><a href="#">网页简介</a></p>
				<p><a href="#">细节&学习记录</a></p>
				<p><a href="#">网站模板下载</a></p>
			</div>
		</footer>
	</div>

	<!-- Footer -->
	<jdoc:include type="modules" name="debug" style="none" />
	<script count="60" color='0,0,0' pointColor='0,0,0' src="templates/mydl/js/dist/canvas-nest.js"></script>
	<script>
		//不用jquery闭包会报错？可能是joomla自己用了$不释放？？无语。。。
		//https://blog.csdn.net/weixin_41551266/article/details/90577776
   		jQuery(function ($){
			$('.element-waypoint').waypoint( function( direction ) {
				$(this.element).css("visibility","visible")
				$(this.element).addClass(" animate__animated animate__zoomIn")
			} , { offset: '75%' } );
		});
	</script>
</body>
</html>
