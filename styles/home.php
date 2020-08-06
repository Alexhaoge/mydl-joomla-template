<?php
/**
 *  description: MyDL 模板的首页布局文件
 *  @author Zhicheng Wang, Zhihao Lyu
 */

defined('_JEXEC') or die;
?>
	
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-4 my-auto">
				<img src="templates/mydl/img/logo_clean.png" style="width:80%">
			</div>
				<!-- <img src="templates/mydl/img/mydl_title.png" style="width:80%"> -->
			<div class="col-md-8 col-sm-8 col-8 my-auto">
			<h1>
				<div class="d-flex mb-3">
				<div class="" style="color:#6b2259;font-size: 4rem;">
					My
				</div>
				<div class="" style="color:#f29111;font-size: 4rem;">
					DL
				</div>
				</div>
			</h1>
			<hr class="my-4"/>
			<p class="lead">
				<strong>A Lightweight Deep Learning Framework Entirely Based On Java</strong>
			</p>
			<a href="#" type="button" class="btn btn-info btn-lg">
				Learn More
			</a>
			</div>
		</div>
	</div>
</div>

<hr class="home-divider" style="visibility:hidden;">

<div class="element-waypoint container">
	<div class="row" >	
		<div class="element-waypoint col-md-3" style="visibility:hidden;">  			
      		<h2 class="text-center">100% Java</h2>
      		<p class="text-center">MyDL and its dependency is written in Java without any native methods.</p>
		</div>
		<div class="element-waypoint col-md-6" style="visibility:hidden;">
			<img class="align-self-center img-fluid" src="templates/mydl/img/cross-platform2.png" alt="cross-platform">
		</div>
		<div class="element-waypoint col-md-3" style="visibility:hidden;">  			
      		<h2 class="text-center">Cross Platform</h2>
      		<p class="text-center">No matter what platform, as long as it support Java, you can use MyDL on it.</p>
		</div>
	</div>
	<hr class="home-divider">
	<div class="row d-flex mh-100 p-3">
		<h2 class="element-waypoint col-md-12 text-center" style="visibility:hidden;">Why MyDL?</h2>
	</div>
	<div class="row">
	<div class="col-md-4">
		<div class="element-waypoint card h-100 shadow rounded border-0" style="visibility:hidden;">
			<div class="card-body d-flex" >
				<div class="m-auto text-center d-none d-sm-block col-sm-3" style="padding:unset;">
					<i class="fa fa-cogs" style="font-size: 3rem;color: #f29111;"></i>
				</div>
				<div class="col-md-9 col-sm-9 col-12" >      			
					<h3 class="card-title text-center">Lightweight</h3>
					<p class="card-text">It is easy to deploy MyDL, all you need is a single JAR.</p>
				</div>		
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="element-waypoint card h-100 shadow rounded border-0" style="visibility:hidden;">
			<div class="card-body d-flex" >
				<div class="m-auto text-center d-none d-sm-block col-sm-3" style="padding:unset;">	
					<i class="fa fa-code" style="font-size: 3rem;color:#1565C0"></i>
				</div>
				<div class="col-md-9 col-sm-9 col-12" >
					<h3 class="card-title text-center">Simple</h3>
					<p class="card-text">
						Components of this framework are simple and clear, easy to get started.
					</p>
				</div> 				
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="element-waypoint card h-100 shadow rounded border-0" style="visibility:hidden;">
			<div class="card-body d-flex" >
				<div class="m-auto text-center d-none d-sm-block col-sm-3" style="padding:unset;">
					<i class="fa fa-cubes" aria-hidden="true" style="font-size: 3rem;color: #6b2259;"></i>
				</div>
				<div class="col-md-9 col-sm-9 col-12" >
					<h3 class="card-title text-center">New Tensor</h3>
					<p class="card-text">New tensor implementation based on EJML, friendly to Java.</p>
				</div>
						
			</div>
		</div>
	</div>
	</div>
</div>

<hr class="home-divider" style="visibility:hidden;">

<div class="element-waypoint container-fluid tutorial-resources" style="visibility:hidden;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<h2>Tutorials</h2>
				<p>View tutorials of MyDL for beginners</p>
				<a class="get-started" href="#">
					Learn more
					<i class="fa fa-angle-double-right"></i>
				</a>
			</div>

			<div class="col-md-4 text-center">
				<h2>API</h2>
				<p>View MyDL API documentation</p>
				<a class="get-started" href="#">
					Javadoc
					<i class="fa fa-angle-double-right"></i>
				</a>
			</div>

			<div class="col-md-4 text-center">
				<h2>Online IDE</h2>
				<p>Try MyDL immediately with our online platform!</p>
				<p>(Experimental)</p>
				<a class="get-started" href="#">
					Code now
					<i class="fa fa-angle-double-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>


