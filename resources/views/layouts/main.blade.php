<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>淘车乐管理系统</title>
    <meta name="description" content="淘车乐管理系统">
    <meta name="author" content="{{ Auth::user()->nick_name }}">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ URL::asset('css/tcl/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/tcl/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{URL::asset('css/tcl/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{URL::asset('css/tcl/style-responsive.css')}}" rel="stylesheet">
    <link href="{{URL::asset('confirm/css/jquery-confirm.css')}}" rel="stylesheet">
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'> -->
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('css/img/favicon.ico')}}">
    <!-- end: Favicon -->
    
    <style type="text/css">
        body { background: url({{URL::asset('css/img/bg-login.jpg')}}) !important; }
    </style>  
    @yield('head_content')           
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>淘车乐管理系统</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>用户 {{ Auth::user()->nick_name }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>用户信息</span>
								</li>
								<li><a href="JavaScript:void(0);"><i class="halflings-icon user"></i>修改密码</a></li>
								<li><a href="{{ url('admin/logout') }}"><i class="halflings-icon off"></i>退出</a></li>
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
			<div id="sidebar-left" class="span2" style="overflow:auto;">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a href="{{route('admin.index')}}">
								<i class="icon-home"></i>
								<span class="hidden-tablet"> 主页</span>
							</a>
						</li>	
						@ifUserCan('car.check')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">车源信息</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.car.index')}}/index"><i class="icon-file-alt"></i><span class="hidden-tablet">所有车源</span></a>
								</li>
								<li><a class="submenu" href="{{route('admin.car.self')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">我的车源</span></a>
								</li>
							</ul>	
						</li>
						@endif
						@ifUserCan('want.check')	
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">求购信息</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.want.index')}}/index"><i class="icon-file-alt"></i><span class="hidden-tablet">所有求购信息</span></a></li>
								<li><a class="submenu" href="{{route('admin.want.self')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">我的求购信息</span></a></li>
							</ul>	
						</li>
						@endif
						@ifUserCan('chance.check')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">销售机会</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.chance.self')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">发起的销售机会</span></a></li>
								<li><a class="submenu" href="{{route('admin.chance.index')}}/index"><i class="icon-file-alt"></i><span class="hidden-tablet">参与的销售机会</span></a></li>			
							</ul>
						</li>
						@endif
						@ifUserCan('plan.check')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">约车管理</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.plan.self')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">发起的约车</span></a></li>
								<li><a class="submenu" href="{{route('admin.plan.index')}}/index"><i class="icon-file-alt"></i><span class="hidden-tablet">参与的约车</span></a></li>			
							</ul>
						</li>
						@endif
						@ifUserCan('transcation.check')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">交易管理</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.transcation.self')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">发起的交易</span></a></li>
								<li><a class="submenu" href="{{route('admin.transcation.index')}}/index"><i class="icon-file-alt"></i><span class="hidden-tablet">参与的交易</span></a></li>			
							</ul>
						</li>
						@endif
						
						@ifUserCan('deal.check')
							<li><a class="submenu"href="/guohu">
									<i class="icon-retweet"></i> <span class="hidden-tablet">
										成交管理</span>
							</a></li>
						@endif
						@ifUserCan('finance.check')
							<li><a class="submenu"href="/finance">
									<i class="icon-money"></i> <span class="hidden-tablet">
										财务管理</span>
							</a></li>
						@endif
						@ifUserCan('tcl_user.check')
							<li>
							<a class="submenu" href="{{route('admin.user.index')}}">
								<i class="icon-user"></i> 
								<span class="hidden-tablet">用户管理</span>
							</a>
						</li>
						@endif
						@ifUserCan('shop.check')
						<li><a class="submenu" href="{{route('admin.shop.index')}}">
									<i class="icon-sitemap"></i> <span class="hidden-tablet">
										门店管理</span>
							</a></li>
						@endif
						@ifUserCan('notice.check')
						<li><a class="submenu" href="{{route('admin.notice.index')}}">
									<i class="icon-bullhorn"></i> <span class="hidden-tablet">
										公告列表</span>
							</a></li>
						@endif
						@ifUserCan('role.manage')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">权限管理</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.permission.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">权限管理</span></a></li>
								<li><a class="submenu" href="{{route('admin.role.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">角色管理</span></a></li>
							</ul>	
						</li>
						@endif
						@ifUserCan('category.check')
						<li>
							<a class="dropmenu" href="JavaScript:void(0);"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">车型管理</span><span style="float:right;">>></span></a>
							<ul>
								<li><a class="submenu" href="{{route('admin.brand.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">品牌管理</span></a></li>
								<li><a class="submenu" href="{{route('admin.category.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">车型管理</span></a></li>
							</ul>	
						</li>
						@endif
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10" style="height:auto;">
			<!-- 面包屑导航 -->
			@yield('BreadcrumbTrail')   	
			<!-- 主体内容 -->
			@yield('content')			
			
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

        <script src="{{URL::asset('js/tcl/jquery-1.9.1.min.js')}}"></script>
        <script src="{{URL::asset('js/tcl/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/modernizr.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/bootstrap.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.cookie.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/fullcalendar.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.dataTables.min.js')}}"></script>

        <script src="{{URL::asset('js/tcl/excanvas.js')}}"></script>
        <script src="{{URL::asset('js/tcl/jquery.flot.js')}}"></script>
        <script src="{{URL::asset('js/tcl/jquery.flot.pie.js')}}"></script>
        <script src="{{URL::asset('js/tcl/jquery.flot.stack.js')}}"></script>
        <script src="{{URL::asset('js/tcl/jquery.flot.resize.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.chosen.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.uniform.min.js')}}"></script>
        
        <script src="{{URL::asset('js/tcl/jquery.cleditor.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.noty.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.elfinder.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.raty.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.iphone.toggle.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.uploadify-3.1.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.gritter.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.imagesloaded.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.masonry.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.knob.modified.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/jquery.sparkline.min.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/counter.js')}}"></script>
    
        <script src="{{URL::asset('js/tcl/retina.js')}}"></script>

        <script src="{{URL::asset('js/tcl/custom.js')}}"></script>
        <script src="{{URL::asset('confirm/js/jquery-confirm.js')}}"></script>
        @yield('script_content')
    <!-- end: JavaScript-->
	
</body>
</html>
