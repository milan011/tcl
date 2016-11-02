<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="${ctx }/admin/login"><span>Time Warmth</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
					
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> ${loginUsrDTO.loginName }
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>个人信息</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> 首选项</a></li>
								<li><a href="${ctx }/admin/logout"><i class="halflings-icon off"></i>退出</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="${ctx }/admin/desktop"><i class="icon-home"></i><span class="hidden-tablet"> 主页</span></a></li>	
						<!-- 循环生成左侧菜单 starts -->		
						<c:forEach items="${modelList }" var="clients">
							<li>
								<!-- <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"> ${clients.name }</span>
									<span class="label label-important"> 3 </span>
								</a>
								<ul> -->
								<c:forEach items="${clients.children }" var="children">
									<li><a class="submenu"href="${ctx }/${children.url }">
											<i class="${children.icon }"></i> <span class="hidden-tablet">
												${children.name }</span>
									</a></li>
								</c:forEach>
								<!-- </ul> -->
							</li>
						</c:forEach>
						<!-- 循环生成左侧菜单 ends -->	
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">警告！</h4>
					<p>您需要启用 <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> 功能。</p>
				</div>
			</noscript>