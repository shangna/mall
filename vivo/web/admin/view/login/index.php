<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="{{__ROOT__}}/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace.min.css" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/css/style.css"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="{{__ROOT__}}/web/admin/view/assets/js/ace-extra.min.js"></script>
		<!--[if lt IE 9]>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/html5shiv.js"></script>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="{{__ROOT__}}/web/admin/view/js/jquery-1.9.1.min.js"></script>
        <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>
<title>登陆</title>
</head>

<body class="login-layout">
<div class="logintop">    
    <span>欢迎后台管理界面平台</span>    
    <ul>
    <li><a href="{{u('home/index/index')}}">返回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
    </div>
    <div class="loginbody">
<div class="login-container">
	<div class="center">
	<h1>
									<i class="icon-leaf green"></i>
									<span class="orange">思美软件</span>
									<span class="white">后台管理系统</span>
								</h1>
								<h4 class="white">Background Management System</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box widget-box no-border visible">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												管理员登陆
											</h4>

											<div class="login_icon"><img src="{{__ROOT__}}/web/admin/view/images/login.png" /></div>

											<form class="loginForm" action="" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="账号"  name="admin_user_account">
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="admin_user_password">
															<i class="icon-lock"></i>
														</span>
													</label>
													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace">
															<span class="lbl">保存密码</span>
														</label>

														<button type="button" class="width-35 pull-right btn btn-sm btn-primary" id="login_btn">
															<i class="icon-key"></i>
															登陆
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">通知</span>
											</div>

											<div class="social-login center">
											本网站系统不再对IE8以下浏览器支持，请见谅。
											</div>
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											

											
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->
							</div><!-- /position-relative -->
						</div>
                        </div>
                        <div class="loginbm">版权所有  2016  <a href="">南京思美软件系统有限公司</a> </div><strong></strong>
</body>
</html>
<script>
	$('input[name=admin_user_account]').focus();
$('#login_btn').on('click', function(){
	     var num=0;
		 var str="";
     $("input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("placeholder")+"不能为空！\r\n",{
					title: '提示框',
					icon:0,
          		});
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  var data = $('.loginForm').serialize();
			  //这里提交异步，判断是否提交成功
			  $.post('{{u("login/index")}}',data,function (res) {
				  if(res.valid){
					  layer.alert('登陆成功,跳转中...',{
						  title: '提示框',
						  icon:1,
						  yes:function () {
							  location.href="{{u('index/index')}}";
						  }
					  });

					  layer.close(index);
				  }else{
					  layer.alert("用户名或者密码不正确，请重新输入！",{
						  title: '提示框',
						  icon:0,
					  });
					  return false;
				  }
			  },'json')
		  }
		
	})

</script>