<?php
/**
 *  description: MyDL 模板的内容页布局文件
 *  @author Zhicheng Wang, Zhihao Lyu
 */

defined('_JEXEC') or die;
?>
    
<div class="container-fluid" id="zhengwen">
  	<div class="row flex-xl-nowrap"> 
	  	<aside class="col-12 col-md-3 col-xl-2 bd-sidebar border" style="padding:0.5rem;border:1px;">
			<jdoc:include type="modules" name="left" />
		</aside>
    	<div class="col-12 col-md-9 col-xl-7 bd-content" id="content">
			<jdoc:include type="modules" name="nav" />
			<jdoc:include type="component" />
	    </div>
		<div class="d-none d-xl-block col-xl-3 bd-toc" style="border:none;padding:0rem;">
			<nav id="ttttoc" data-toggle="toc" class="sticky-top"></nav>
		</div>
    </div>
</div>
      

