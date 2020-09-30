@extends('layouts.main')
@section('page_title', 'new report')
@section('content')


<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ນຳສົ່ງເອກະສານແຈ້ງຕອບ ແລະ ເອກະສານອື່ນໆ</strong> </h2>
  </blockquote>
</div>
<br>

<form  class="form-horizontal" method="POST" action={{ url('/docstore')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
{{ csrf_field() }}
  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ອັບໂຫລດເອກະສານແຈ້ງຕອບ ແລະ ເອກະສານອື່ນໆ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        <p class="alert alert-info text-lo" style="margin-top: -6px; text-align: justify; text-justify: inter-word;">
      	ທ່ານສາມາດນຳໃຊ້ຊ່ອງທາງນີ້ໃນການສົ່ງເອກະສານອື່ນໆ ນອກຈາກເອກະສານລາຍງານ STR ແລະ CTR.
        </p>
<div id="accordion" class="accordion-style1 panel-group text-lo">


			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເນື້ອໃນເອກະສານ</label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-12" name="document_title" required />
					</div>
			</div>


			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດບໍ່ເກີນ 20 MB</label>
					<div class="col-sm-8">
						<input type="file" name="document_file" id="id-input-file-3" required />
					</div>
			</div>

			<div class="form-group">
			<label class="col-sm-8 control-label no-padding-right" for="form-field-comment" style="color:red">ກະລຸນາຕັ້ງຊື່ເອກະສານຕິດຄັດ (File Upload) ເປັນຕົວອັກສອນພາສາອັງກິດເທົ່ານັ້ນ</label>
			
			</div>
      


        <!-- <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <br />
            <p><a href="{{ url('lawrefer') }}">ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.</a></p>
          </div>
				</div> -->

        <div class="clearfix form-actions">
					<div class="col-sm-offset-1 col-sm-10 text-center">
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							ຍົກເລີກ
						</button>
            &nbsp; &nbsp; &nbsp;
            <input type="hidden" name="reporter_idusr" value="{{ $user or 1}}" />
						<button class="btn btn-primary" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							ສົ່ງລາຍງານ
						</button>
					</div>
				</div>
      </div><!-- end accordion -->
			</div>
		</div>
  </div>
</div>


</form>

@stop
