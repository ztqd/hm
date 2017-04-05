<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>使用记录管理</title>
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
<?
include("layout.php");
?>
                    <div id="breadcrumbs" class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li class="active">
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="page-content">
                       <div class="page-header">
                            <h1>房屋使用记录列表</h1>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                            <table id="records" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>建筑物名称</th>
                                        <th>使用者</th>
                                        <th>联系方式</th>
                                        <th>使用形式</th>
                                        <th>用地</th>
                                        <th>协议签订时间</th>
                                        <th>协议到期时间</th>
                                        <th>房屋照片</th>
                                        <th>房产证照片</th>
                                        <th>土地证照片</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>
                        </div>

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
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

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
                var table=$('#records').DataTable( {
                    "columnDefs": [ {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                        } ],
                    "sScrollX": "100%",   //表格的宽度
                    "sScrollXInner": "110%",   //表格的内容宽度
                    "lengthMenu": [[2, 4, 6, -1], [2, 4, 6, "All"]],
                     "bAutoWidth": false,  //自适应宽度
                     language:lang,  //提示信息
                     renderer: "bootstrap",  
                     "ajax": "datas/records.json",
                     "order": [[1, 'asc']],
                     "columns": [
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "user" },
                        {"data":"tel"},
                        { "data": "type" },
                        { "data": "areas" },
                        { "data": "start" },
                        { "data": "end" },
                        {"data":"house_image"},
                        {"data":"deed_image"},
                        {"data":"land_deed_image"},
                        { "data": "deal" }
                    ]
                } );
                $('#records tbody').on( 'click', '.delete', function () {
                    table.row( $(this).parents('tr') ).remove().draw();
                } );
                 table.on( 'order.dt search.dt', function () {
                    table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            })
        </script>
    </body>
</html>

