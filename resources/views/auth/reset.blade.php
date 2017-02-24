<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>淘车乐后台管理系统</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
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
        body { 
            background: url({{URL::asset('css/img/bg-login.jpg')}}) !important;
            /*background-color: #34495e;*/
        }
    </style>        
</head>
<body>
    <div class="container-fluid-full">
        <div class="row-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif         
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>修改密码</h2>
                    <!-- <form class="login-form" action="" method="post">
                        <h3 class="font-green">修改密码</h3>
                        @if($errors->first())
                            <div class="alert alert-danger display-hide" style="display: block;">
                                <button class="close" data-close="alert"></button>
                                <span>   </span>
                            </div>
                        @endif
                        {!! csrf_field() !!}
                        <fieldset>
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">原始密码</label>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Old Password" name="oldpassword"> 
                        </div>
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">新密码</label>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="New password" name="password"> 
                        </div>
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">重复密码</label>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Repeat password" name="password_confirmation"> 
                        </div>
                        <div class="form-actions">
                            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">确定</button>
                        </div>
                        </fieldset>
                    </form> -->
                     <form class="form-horizontal" action="{{route('admin.user.reset')}}" method="post">
                        {!! csrf_field() !!}
                        <fieldset>
                            
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" readonly="readonly" name="name" id="username" type="text" value="{{Auth::user()->nick_name}}"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="oldpassword"  type="password" placeholder="旧密码"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" type="password" placeholder="新密码"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password_confirmation" type="password" placeholder="确认新密码"/>
                            </div>
                            <div class="clearfix"></div>                          

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">修改</button>
                            </div>
                            <div class="clearfix"></div>
                        </fieldset>
                    </form>
   
                </div><!--/span
            </div><!-/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
    
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
    <!-- end: JavaScript-->
    
</body>
</html>
