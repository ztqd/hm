/*
$(document).ready(function() {
     $('#example').DataTable( {
         "scrollY": 300,
         "scrollX": true,

      } );
 } );
  
*/
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
                var table1=$('#example').DataTable( {
                    "columnDefs": [ {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                        } ],
                    "scrollY": 150,
                    "sScrollX": "100%",   //表格的宽度
                    "sScrollXInner": "110%",   //表格的内容宽度
                    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
                     "bAutoWidth": false,  //自适应宽度
                     language:lang,  //提示信息
                     renderer: "bootstrap",  
                     "ajax": "datas/houses.json",
                     "order": [[1, 'asc']],
                     "columns": [
                        { "data": "name" },
                        { "data": "deed_num" },
                        { "data":"land_deed_num"},
                        { "data": "city" },
                        { "data": "address" },
                        { "data": "origin" },
                        { "data": "using" },
                        { "data":"subdistrict"},
                        { "data":"start"},
                        { "data":"subdistrict"},
                        { "data": "start" },
                        { "data": "end" },
                        { "data": "tip" },
                        { "data": "structure" },
                        { "data":"floor"},
                        { "data":"deal"}
                    ]
                } );
                $('#example tbody').on( 'click', '.delete', function () {
                    table1.row( $(this).parents('tr') ).remove().draw();
                } );
                 table1.on( 'order.dt search.dt', function () {
                    table1.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            })