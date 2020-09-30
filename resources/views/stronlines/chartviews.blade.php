
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>STR | ສະຖິຕິລາຍງານ</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <link href="{{ asset('ace-skins.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('ace-rtl.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" />
<style rel="stylesheet" >
body{
  font-family: 'Phetsarath OT';
  background-image: url('images/amlio_logo_16.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
</style>

<script src="{{ asset('js/ace-extra.min.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('images/bg-images9.jpeg'); background-size: 100%;">
            <div class="container">


                <div class="navbar-header pull-left animated fadeInLeftBig" style="margin: -10px; padding: -10px;">
                    <a class="navbar-brand text-en" href="{{ url('/') }}" data-toggle="tooltip" data-placement="right" title="AMLIO" style="margin-top: 14px; font-family: sans-serif; font-size: 48px; font-style: normal; color: #f9fafe;"><strong>AMLIO</strong></a>
                    <!-- <a class="navbar-brand text-en" href="{{ url('/') }}" data-toggle="tooltip" data-placement="right" title="STR" style="margin-top: 23px; font-family: sans-serif; font-size: 13px; color: #601020; margin-left: -55px;"><small>STR</small></a> -->

                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation" >
                  <ul class="nav ace-nav">
                    @if(Auth::user()->role_idrole == '1')
                    <li class="blue dropdown-modal">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          ຄົ້ນຫາ
                          <i class="ace-icon fa fa-caret-down"></i>
                      </a>

                      <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-content">
                          <ul class="dropdown-menu dropdown-navbar">
                            <li>
                              <a href="/firviews">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-user-secret"></i>&nbsp;ເບິ່ງລາຍງານ FIR</strong></span>
                                </div>
                              </a>
                            </li>

                            <li>
                              <a href="/strdetails">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-file-text-o"></i>&nbsp;ລາຍລະອຽດ</strong></span>
                                </div>
                              </a>
                            </li>

                            <!-- <li>
                              <a href="/strreporters">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-bank"></i>&nbsp;ບັນດາທະນາຄານ</strong></span>
                                </div>
                              </a>
                            </li>

                            <li>
                              <a href="/strbranchs">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-sitemap"></i>&nbsp;ສາຂາທະນາຄານ</strong></span>
                                </div>
                              </a>
                            </li> -->

                            <li>
                              <a href="/nat">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-globe"></i>&nbsp;ສັນຊາດ</strong></span>
                                </div>
                              </a>
                            </li>

                            <li>
                              <a href="/strcharts">
                                <div class="clearfix">

                                  <span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-pie-chart"></i>&nbsp;ສະຖິຕິ</strong></span>
                                </div>
                              </a>
                            </li>

                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/strall">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ລາຍງານທຸລະກຳທີ່ໄດ້ຮັບ
                      </a>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/fir">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ລາຍງານຂ່າວກອງທາງດ້ານການເງິນ
                      </a>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/reply">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ແຈ້ງຕອບ
                      </a>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/replyviews">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ລາຍການແຈ້ງຕອບ
                      </a>
                    </li>

                    <!-- <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/admin/user">
                        <i class="ace-icon fa fa-tasks"></i>
                          ຄຸ້ມຄອງລະບົບ
                      </a>
                    </li> -->

                    @else
                    <li class="blue dropdown-modal">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          ລາຍງານທຸລະກຳ
                          <i class="ace-icon fa fa-caret-down"></i>
                      </a>

                      <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-content">
                          <ul class="dropdown-menu dropdown-navbar">
                            <li>
                              <a href="/str">
                                <div class="clearfix">

                                  <span class="pull-left"><strong><i class="fa fa-user-secret"></i>&nbsp;ບຸກຄົນ</strong></span>
                                </div>
                              </a>
                            </li>

                            <li>
                              <a href="/strent">
                                <div class="clearfix">

                                  <span class="pull-left"><strong><i class="fa fa-bank"></i>&nbsp;ນິຕິບຸກຄົນ</strong></span>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/strall">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ທຸລະກຳທີ່ລາຍງານ
                      </a>
                    </li>

                    <li class="blue dropdown-modal">
                      <a class="dropdown-toggle" href="/replyviews">
                        <!-- <i class="ace-icon fa fa-tasks"></i> -->
                          ລາຍການແຈ້ງຕອບ
                      </a>
                    </li>
                    @endif
                      <li class="dropdown-modal">
                          <a data-toggle="dropdown" href="#" class="dropdown-toggle"  style="background-color: #f9fafe!important;">
                              <i class="fa fa-user bigger-160" style="color: #426f8c!important;"></i>
                              <span class="user-info">
                                                                  </span>

                              <i class="ace-icon fa fa-caret-down" style="color: #426f8c!important;"></i>
                          </a>

                          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                              <li>
                                  <a href="{{ url('/reset') }}">
                                      <i class="ace-icon fa fa-key"></i>
                                      ປ່ຽນລະຫັດຜ່ານ
                                  </a>
                              </li>


                              <li class="divider"></li>

                              <li>
                                  <a href="{{ url('/logout') }}">
                                      <i class="ace-icon fa fa-power-off"></i>
                                      ປິດລະບົບ
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
                </div>
            </div>
        </nav>
    <!-- <div style="padding-top: 100px;"></div> -->
<div style="padding-top: 55px;"></div>
    <div class="container-fluid">
<div class="space-10"></div>
<div class="space-10"></div>
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action={{ url('/strchartsshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
    <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກລາຍລະອຽດ{{-- $datasets }}{{ $contents }}{{ $wide_screen --}}</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><strong>ເລືອກຮູບແບບ</strong></label>
                <div class="col-sm-10">
    							<select class="form-control" name="mode" id="mode" onchange="modechange(this);">
                    <option value="1" @if($mode == 1) selected="selected" @endif>ສະຫຼຸບຍອດລວມ STR ແຍກຕາມໄລຍະເວລາ(ເດືອນ)</option>
                    <option value="2" @if($mode == 2) selected="selected" @endif>ສະຫຼຸບຍອດລວມ STR ແຍກຕາມທະນາຄານ</option>
                    <option value="3" @if($mode == 3) selected="selected" @endif>ສະຫຼຸບຍອດລວມມູນຄ່າລາຍງານ STR ແຍກຕາມທະນາຄານ</option>
                    <option value="4" @if($mode == 4) selected="selected" @endif>ສະຫຼຸບການໄດ້ຮັບລາຍງານ STR ຈາກຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ</option>
                    <option value="5" @if($mode == 5) selected="selected" @endif>ສະຫຼຸບການໄດ້ຮັບລາຍງານ STR ແຍກຕາມສັນຊາດ</option>
                  </select>
      					</div>
              </div>

              @php($thisyear = date('Y'))
              <div>
								<div class="form-group">
									<label class="col-sm-2 control-label"><strong>ເລືອກໄລຍະ</strong></label>
									<div class="col-sm-2">
										<select class="form-control" name="smnth" required>
											@for($i = 1; $i <= 12; $i++)
												<option value="@if($i > 9){{ $i }}@else{{ '0' . $i }}@endif" @if($smnth == $i){{ ' selected="selected"' }}@endif>{{ $i }}</option>
											@endfor
										</select>
									 </div>
									 <div class="col-sm-2">
										<select class="form-control" name="syear" required>
                      @for($i = $thisyear; $i >= $bgyear; $i--)
												<option value="{{ $i }}" @if($syear == $i){{ ' selected="selected"' }}@endif >{{ $i }}</option>
											@endfor
										</select>
									 </div>
                   <div class="col-sm-2">
 										<select class="form-control" name="emnth" required>
 											@for($i = 1; $i <= 12; $i++)
 												<option value="@if($i > 9){{ $i }}@else{{ '0' . $i }}@endif" @if($emnth == $i){{ ' selected="selected"' }}@endif>{{ $i }}</option>
 											@endfor
 										</select>
 									 </div>
 									 <div class="col-sm-2">
 										<select class="form-control" name="eyear" required>
                      @for($i = $thisyear; $i >= $bgyear; $i--)
 												<option value="{{ $i }}" @if($eyear == $i){{ ' selected="selected"' }}@endif >{{ $i }}</option>
 											@endfor
 										</select>
 									 </div>

									 <div class="col-sm-2 text-right">
										 <button type="submit" name="submit_btn" class="btn btn-sm btn-primary">ເບິ່ງລາຍງານ</button>
									 </div>
								 </div>
							 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="space-30"></div>
</div>
  <div class="row animated fadeInRight text-lo">
    @if(isset($wide_screen) && $wide_screen> 0)
    <div class="col-md-12">
    @else
    <div class="col-md-offset-2 col-md-8">
    @endif
      <canvas id="myChart"></canvas>
    </div>
  </div>

</div>

<!--=========== FOOTER DIV =================-->
    <footer class="color-root">
        <div class="container">
            <div class="space-10"></div>
            <div class="hr hr2 hr-double"></div>
            <div class="space-10"></div>
        </div>
        <div class="container">
            <div class="space-10"></div>
            <div class="container footer-root">
                <p class="text-info text-center text-lo">Suspicious Transaction Report Online © 2017 <?php $thisy = date('Y'); if($thisy > '2017'){ echo ' - ' . $thisy; } ?><br />AMLIO</p>
            </div>
            <div class="space-32"></div>
        </div>
    </footer>

    <!-- END FOOTER STICKY
    =========================-->

<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- dataTables -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<!-- ace scripts -->
<script src="{{ asset('js/ace-elements.min.js') }}"></script>
<script src="{{ asset('js/ace.min.js') }}"></script>
<script src="{{ asset('js/myscript.js') }}"></script>
<script src="{{ asset('js/Chart.js') }}"></script>
<script type="text/javascript">
  var content1 = <?php echo $contents; ?>;
  var data1 = <?php echo $datasets; ?>;
  
  var label1 = "<?php echo $label2; ?>";
      var ctx = document.getElementById('myChart').getContext('2d');
      console.log(data1);   
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: eval(content1),
            datasets: [{
                label: eval(label1),
                backgroundColor: 'rgb(0, 61, 104)',
                borderColor: 'rgb(0, 61, 104)',
                data: eval(data1),
            }]
        },

        // Configuration options go here
        options: {
          "animation": {
            "duration": 1,
            "onComplete": function () {
                var chartInstance = this.chart,
                ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';

                this.data.datasets.forEach(function (dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function (bar, index) {
                        var data = dataset.data[index];                            
                        ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                });
            }
        },

        scaleShowValues: true,
          scales: {
          yAxes: [{
          ticks: {
          beginAtZero: true
          }
          }],
          xAxes: [{
            ticks: {
            autoSkip: false
            }
          }]
          }  
          
                
        }
      });
     
    </script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
  jQuery(function($) {
    ////////////////////////////////////
      $('#sdate, #edate').find('input[type=file]').ace_file_input().end().find('button[type=reset]').on(ace.click_event, function () {
          $('#sdate, #edate input[type=file]').ace_file_input('reset_input');
      }).end().find('.date-picker').datepicker({autoclose: true, startDate: '01-01-2008', endDate: '-d', todayBtn: "linked", calendarWeeks: true, keyboardNavigation: false, forceParse: false}).next().on(ace.click_event, function () {
          $(this).prev().focus();
      });
    //initiate dataTables plugin
    var num_cols = <?php echo $numcols; ?>;
    var coltext = '[{ "bSortable": false },';
    for(i = 0; i < num_cols; i++){
      coltext += 'null, ';
    }
    coltext += '{ "bSortable": true }]';
    // nulltext =  'null, null, null, null, null, null, null, null,';
    //alert(nulltext);
    var myTable =
    $('#dynamic-table')
    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
    .DataTable( {
      bAutoWidth: false,
      "aoColumns": eval(coltext),
      "aaSorting": [],



      //"bProcessing": true,
          //"bServerSide": true,
          //"sAjaxSource": "http://127.0.0.1/table.php"	,

      //,
      //"sScrollY": "200px",
      //"bPaginate": false,

      //"sScrollX": "100%",
      //"sScrollXInner": "120%",
      //"bScrollCollapse": true,
      //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
      //you may want to wrap the table inside a "div.dataTables_borderWrap" element

      //"iDisplayLength": 50


      select: {
        style: 'multi'
      }
      } );



    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

    new $.fn.dataTable.Buttons( myTable, {
      buttons: [
        {
        "extend": "colvis",
        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
        "className": "btn btn-white btn-primary btn-bold",
        columns: ':not(:first):not(:last)'
        },

        {
        "extend": "copy",
        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
        "className": "btn btn-white btn-primary btn-bold"
        },
        {
        "extend": "csv",
        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
        "className": "btn btn-white btn-primary btn-bold"
        },
        {
        "extend": "excel",
        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
        "className": "btn btn-white btn-primary btn-bold"
        },
        {
        "extend": "pdf",
        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
        "className": "btn btn-white btn-primary btn-bold"
        },
        {
        "extend": "print",
        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
        "className": "btn btn-white btn-primary btn-bold",
        autoPrint: false,
        message: 'This print was produced using the Print button for DataTables'
        }
      ]
    } );
    myTable.buttons().container().appendTo( $('.tableTools-container') );

    //style the message box
    var defaultCopyAction = myTable.button(1).action();
    myTable.button(1).action(function (e, dt, button, config) {
      defaultCopyAction(e, dt, button, config);
      $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
    });


    var defaultColvisAction = myTable.button(0).action();
    myTable.button(0).action(function (e, dt, button, config) {

      defaultColvisAction(e, dt, button, config);


      if($('.dt-button-collection > .dropdown-menu').length == 0) {
        $('.dt-button-collection')
        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
        .find('a').attr('href', '#').wrap("<li />")
      }
      $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
    });

    ////

    setTimeout(function() {
      $($('.tableTools-container')).find('a.dt-button').each(function() {
        var div = $(this).find(' > div').first();
        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
        else $(this).tooltip({container: 'body', title: $(this).text()});
      });
    }, 500);





    myTable.on( 'select', function ( e, dt, type, index ) {
      if ( type === 'row' ) {
        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
      }
    } );
    myTable.on( 'deselect', function ( e, dt, type, index ) {
      if ( type === 'row' ) {
        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
      }
    } );




    /////////////////////////////////
    //table checkboxes
    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

    //select/deselect all rows according to table header checkbox
    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
      var th_checked = this.checked;//checkbox inside "TH" table header

      $('#dynamic-table').find('tbody > tr').each(function(){
        var row = this;
        if(th_checked) myTable.row(row).select();
        else  myTable.row(row).deselect();
      });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
      var row = $(this).closest('tr').get(0);
      if(this.checked) myTable.row(row).deselect();
      else myTable.row(row).select();
    });



    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
      e.stopImmediatePropagation();
      e.stopPropagation();
      e.preventDefault();
    });



    //And for the first simple table, which doesn't have TableTools or dataTables
    //select/deselect all rows according to table header checkbox
    var active_class = 'active';
    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
      var th_checked = this.checked;//checkbox inside "TH" table header

      $(this).closest('table').find('tbody > tr').each(function(){
        var row = this;
        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
      });
    });





    /********************************/
    //add tooltip for small view action buttons in dropdown menu
    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

    //tooltip placement on right or left
    function tooltip_placement(context, source) {
      var $source = $(source);
      var $parent = $source.closest('table')
      var off1 = $parent.offset();
      var w1 = $parent.width();

      var off2 = $source.offset();
      //var w2 = $source.width();

      if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
      return 'left';
    }




    /***************/
    $('.show-details-btn').on('click', function(e) {
      e.preventDefault();
      $(this).closest('tr').next().toggleClass('open');
      $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
    });
    /***************/





    /**
    //add horizontal scrollbars to a simple table
    $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
      {
      horizontal: true,
      styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
      size: 2000,
      mouseWheelLock: true
      }
    ).css('padding-top', '12px');
    */


  })
</script>



</body>
</html>
