@extends('layouts.main_ctrall_rp')
@section('page_title', 'Comment report')
@section('content')

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="{{ url('images/amlio_logo.png') }}" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
    <!-- <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກໄລຍະເວລາ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($ssdate)){{ $ssdate }}@endif" tabindex="1" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate"> ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($sedate)){{ $sedate }}@endif" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="3">ຄົ້ນຫາ</button>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
  <div class="container">
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  			ລາຍງານ CTR ທັງໝົດທີ່ໄດ້ສົ່ງລາຍງານ
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
							<th>ວັນທີ</th>
							<th>ເນື້ອໃນ</th>
              <th>ເອກະສານຄັດຕິດ</th>
						</tr>
					</thead>

					<tbody>
          @php 
          $i = 1;
          @endphp

            @if(isset($ctrshow_rp))
                @foreach($ctrshow_rp as $ctrshow_rp)
                  <tr>
                    <td class="center">{{$i }}</td>
        						<td>{{ $ctrshow_rp->upload_date }}</td>
                    <td>{{ $ctrshow_rp->title }}</td>
                    <td><a href="{{ $ctrshow_rp->path_file }}">ດາວໂຫຼດເອກະສານຄັດຕິດ</a></td>
        						
                @php 
                $i++;
                @endphp    
        					</tr>
                @endforeach
            @else
            <tr>
              <td>ບໍ່ມີຂໍ້ມູນ</td>

            </tr>
            @endif
					</tbody>
				</table>
        
      </div>
    </div>
  </div>
  </div>



@stop
