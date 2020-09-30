@extends('layouts.main')
@section('page_title', 'FIR')
@section('content')
<div class="space-10"></div>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div>


<form  class="form-horizontal" method="POST" action={{ url('/firstore')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
{{ csrf_field() }}
  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<!-- <h4 class="widget-title">ການລາຍງານຕໍ່ເຈົ້າໜ້າທີ່</h4> -->
  		</div>
      <div class="widget-body">
				<div class="widget-main">

          <div class="form-group">
            <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> ເລກທີ FIR ຂອງ ສຕຟງ </label>
            <div class="col-sm-3">
              <input type="text" name="fir_form_no" class="col-xs-12 col-sm-12" placeholder="008/ສຕຟງ"/>
            </div>
            <label class="col-sm-1 control-label no-padding-right" for="dob"> ລົງວັນທີ </label>
            <div class="col-sm-3" id="dob">
              <div class="input-medium">
                <div class="input-group clearfix text-lo">
                  <input class="input-medium date-picker" name="fir_form_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="1" />
                  <span class="input-group-addon">
                      <i class="ace-icon fa fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
  					<label class="col-sm-4 control-label no-padding-right" for="form-field-comment">ຊື່ ແລະ ຂໍ້ມູນຂອງຜູ້ຖືກລາຍງານ</label>
  					<div class="col-sm-4">
  						<textarea class="form-control" name="fir_form_to_be_report_info" id="form-field-8" placeholder="ໃສ່ລາຍລະອຽດຂອງຜູ້ຖືກລາຍງານ"></textarea>
  					</div>
  				</div>

          <div class="form-group">
            <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> ຈາກຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ </label>
            <div class="col-sm-5">
  							<select class="form-control" name="reporter_to_be_report" id="form-field-select-1" >
                @foreach($reporters as $reporter)
								<option value="{{ $reporter->idreporter }}">{{ $reporter->reporter_name }}</option>
                @endforeach
                </select>
  					</div>
          </div>

          <div class="form-group">
  					<label class="col-sm-4 control-label no-padding-right" for="form-field-comment">ເຫດຜົນທີ່ສົ່ງບົດ FIR</label>
  					<div class="col-sm-4">
  						<textarea class="form-control" name="fir_form_describe" id="form-field-8" placeholder="ລາຍລະອຽດໃນການສົ່ງບົດລາຍງານ"></textarea>
  					</div>
  				</div>

          <div class="form-group">
            <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> ພາກສ່ວນຮັບບົດ FIR </label>
            <div class="col-sm-8">
              <input type="text" name="fir_form_receiver" class="col-xs-12 col-sm-6" />
            </div>
          </div>

          <div class="form-group">
  					<label class="col-sm-4 control-label no-padding-right" for="form-field-comment">ໝາຍເຫດ</label>
  					<div class="col-sm-4">
  						<textarea class="form-control" name="fir_form_mark" id="form-field-8" placeholder="ໝາຍເຫດ"></textarea>
  					</div>
  				</div>

          <div class="clearfix form-actions">
  					<div class="col-sm-offset-1 col-sm-10 text-center">
              <input type="hidden" name="usr_reporter" value="{{ $user or 1}}" />
  						<button class="btn" type="reset">
  							<i class="ace-icon fa fa-undo bigger-110"></i>
  							ຍົກເລີກ
  						</button>
              &nbsp; &nbsp; &nbsp;

  						<button class="btn btn-primary" type="submit">
  							<i class="ace-icon fa fa-check bigger-110"></i>
  							ບັນທຶກ
  						</button>
  					</div>
  				</div>

        </div>
      </div>
    </div>
  </div>


</form>

@stop
