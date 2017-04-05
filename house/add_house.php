<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>添加房产</title>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<?
include("layout.php");
?>
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li class="">
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li>
							<a href="#">房屋管理</a>
							</li>
							<li>
							<a href="#">自有房产管理</a>
							</li>
							<li class="active">添加房产</li>
						</ul>
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 建筑物名称</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" class="form-control"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">房产证号</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"  class="form-control" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3">土地证号</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-3"  class="form-control" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">分县区</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-4"  class="form-control" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">详细地址</label>

										<div class="col-sm-9">
												<input type="text" id="form-field-5"  class="form-control" />	
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">房产来源</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-6"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-7">房产用途</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-7"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-8">现时使用者</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-8"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-9">结构</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-9"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-10">层数</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-10"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-11">建筑面积</label>
										<div class="col-sm-9">
											<div class="input-group">
												<input type="text" id="form-field-11"  class="form-control" />
												<span class="input-group-addon">
												平方
												</span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-12">建成日期</label>

										<div class="col-sm-9">
											<div class="input-group">
												<input type="text" id="form-field-12"  class="form-control date-picker" data-date-format="dd-mm-yyyy" type="text" name="" />
												<span class="input-group-addon">
												<i class="fa fa-calendar bigger-110"></i>
												</span>
											</div>	
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-13">资产标签号</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-13"  class="form-control" />	
										</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-14">
										 是否小区</label>
										<div class="col-sm-9">
										<input  name="form-field-checkbox" id="form-field-14"  type="checkbox">
										</div>
										
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-15">备注</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-15"  class="form-control" />	
										</div>	
									</div>
			
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
											<i class="ace-icon fa fa-check bigger-110"></i>
											提交
											</button>
											<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											重置
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?
include("footer.php");
?>
		</div>	

	<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			$(function(){
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
	
			})
		</script>
	</body>
</html>

