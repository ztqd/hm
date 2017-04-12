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
include("layout.php");
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
                           <table id="houses" class="display" cellspacing="0" width="100%">
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
                                         
                                        
                                        <th>操作</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
           
       </tbody>
                            </table>

                            </div>
                        </div>

                    
                    
                
            



  </div>
            <? include("footer.php");
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
        <script type="text/javascript">

            $(function(){
                //dataTable
                //国际化
                var lang = {
                    "sProcessing": "处理中...",
                    "sLengthMenu": "每页 _MENU_ 项",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "当前显示第 _START_ 至 _END_ 项，共 _TOTAL_ 项。",
                    "sInfoEmpty": "当前显示第 0 至 0 项，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上页",
                        "sNext": "下页",
                        "sLast": "末页",
                        "sJump": "跳转"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                };
                var table1=$('#houses').DataTable( {
                    "columnDefs": [ {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                        } ],
                    "sScrollX": "100%",   //表格的宽度
                    "sScrollXInner": "200%",   //表格的内容宽度
                    "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
                     "bAutoWidth": false,  //自适应宽度
                     language:lang,  //提示信息
                     renderer: "bootstrap",  
                     "ajax": "datas/houses.json",
                     "order": [[1, 'asc']],
                     "columns": [
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "deed_num" },
                        { "data":"land_deed_num"},
                        { "data": "city" },
                        { "data": "address" },
                        { "data": "origin" },
                        { "data": "using" },
                        { "data":"present_user"},
                        { "data":"construction"},
                        { "data":"floor"},
                        { "data": "area" },
                      
                        { "data":"info"},
                        { "data":"deal"}
                    ],
                    "fnInitComplete": function(oSettings, json) {
                       $('#houses tbody>tr').find(':last-child').html("<a href='edit_land.php'>编辑</a>|<a href='javascript:;' class='delete'>删除</a>")
                     },
                      "fnDrawCallback": function( oSettings ) {
                       $('#houses tbody>tr').find(':last-child').html("<a href='edit_land.php'>编辑</a>|<a href='javascript:;' class='delete'>删除</a>")
                     }
                } );
                $('#houses tbody').on( 'click', '.delete', function () {
                    table1.row( $(this).parents('tr') ).remove().draw();
                } );
                 table1.on( 'order.dt search.dt', function () {
                    table1.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            })
        </script>

	</body>
</html>
