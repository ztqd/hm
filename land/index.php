<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>土地管理</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
         <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
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

	<body class="no-skin">
		<?
include("sidebar.php");
?>
<div id="breadcrumbs" class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li class="active">
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="land_manage.php">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="page-content">
                       <div class="page-header">
                            <h1>自有土地列表</h1>
                        </div>
 <div class="row">
                            <div class="col-xs-12">
                           <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>宗地名称</th>
                                        <th>土地使用者</th>
                                        <th>宗地坐落</th>
                                        <th>资产类型</th>
                                        <th>土地用途</th>
                                        <th>土地面积</th>
                                        <th>土地性质</th>
                                        <th>他项权利</th>
                                        <th>土地使用权面积</th>
                                        <th>土地证号</th>
                                        <th>土地来源</th>
                                        <th>其他说明</th>
                                         <th>土地照片</th>
                                        <th>土地证照片</th>
                                        
                                        <th>操作</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
           
       </tbody>
                            </table>

                            </div>
                        </div>

                    
                    
                
            



  </div>
            <? include("foot.php");
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
       
        <script src="js/jquery.dataTables.min.js"></script>
        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
		<script src="js/index.js"></script>
        <!-- inline scripts related to this page -->
      


	</body>
</html>
