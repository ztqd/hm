<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>导出记录</title>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

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
include("sidebar.php");
?>
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li class="">
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="land_manage.php">首页</a>
							</li>
							<li>
							<a href="land_manage.php">土地管理</a>
							</li>
							<li>
							<a href="record_manage.php">使用记录管理</a>
							</li>
							<li class="export_record.php">导入记录</li>
						</ul>
					</div>
					<div class="page-content">
						<div class="page-header">
							<h1>请选择导出选项</h1>
						</div>
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 宗地名称</span>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 使用者</span>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 联系方式</span>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 使用形式</span>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 用地</span>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 签订时间</span协议>
										</label>
									</div>
									<div class="checkbox">
										<label class="block">
										<input class="ace input-lg" name="form-field-checkbox" type="checkbox">
										<span class="lbl bigger-120"> 协议到期时间</span>
										</label>
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
include("foot.php");
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
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>

