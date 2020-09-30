@extends('layouts.boymain')
@section('page_title', 'ເເລກປ່ຽນຂໍ້ມູນກັບບັນດາທະນາຄານ')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" type="text/css"> --}}
  


@if(Session::has('success'))
    <div class="alert alert-success">
        {!! Session::get('success') !!}
    </div>
@endif


@if(Session::has('error'))
    <div class="alert alert-danger">
        {!! Session::get('error') !!}
    </div>
@endif

<form method="POST" action="{{ route('send-report') }}" enctype="multipart/form-data" class="container">
    {{ csrf_field() }}

    <div class="row col" style="margin-top: 10px; margin-left:0px;margin-bottom: 20px; background-color: #98b9ce;background-image: url('images/bg-images11.jpg'); background-size: 100%;height: 40px;color:white;font-size: 30px;">
       ສົ່ງເອກະສານຫາຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ
    </div>

    <!-- Report information -->

    

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>ເອກະສານ ເລກທີ</label>
                <input type="text" name="report_number" class="form-control" placeholder="Enter report number" required>
            </div>
            <div class="form-group">
                <label>ເອກະສານເລື່ອງ</label>
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>ມື້ລົງລາຍເຊັນ</label>
                <input type="date" name="sign_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ປະເພດເອກະສານ</label>
                <select name="type" class="btn-outline-secondary form-control" required>
                    <option value="a">ເອກະສານທົ່ວໄປ</option>
                    <option value="b">ເອກະສານສຳຄັນ</option>
                </select>
            </div>
        </div>
    </div>



 <!-- Files -->
    <div class="row col">
        <div class="form-group" style="width: 50%">
            <label>ເອກະສານທີ່ມີລາຍເຊັນ</label>
            <input type="file" name="sign_file" class="btn-outline-secondary form-control" required>
        </div>
    </div>
    <div class="row col">
        <div class="form-group" style="width: 50%">
            <label>ເອກະສານຄັດຕິດ</label>
            <input type="file" name="attach_file[]" class="btn-outline-secondary form-control" multiple required>
        </div>
    </div>

 <!-- Groups + reporters -->
    <div class="row form-group">
        <!-- Group List -->
        <div class="col">
            <label>ເລືອກຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="select-all-groups">
                <label class="form-check-label">
                    ເລືອກທັງຫມົດ
                </label>
            </div>

            @foreach($reporter_types as $reporter_type)
            <div class="form-check">
                <input class="form-check-input group-checkbox" type="checkbox" value="{{ $reporter_type->idreporter_type }}">
                <label class="form-check-label">
                    {{ $reporter_type->reporter_type_title }}
                </label>
            </div>
            @endforeach
        </div>

        <!-- Reporter List -->
        <div class="col" id="reporterList">
            <label>ເລືອກຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</label>
            <small id="total_reporters" class="text-danger font-weight-bold"></small>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="select-all-reporters">
                <label class="form-check-label">
                    ເລືອກທັງຫມົດ
                </label>
            </div>

            @foreach($reporters as $reporter)
            <div class="form-check reporter-{{ $reporter->reporter_type_idreporter_type }} reporter-checkbox-div" style="display: none">
                <input class="form-check-input reporter-checkbox" name="reporter[]" type="checkbox" value="{{ $reporter->idreporter }}">
                <label class="form-check-label">
                    {{ $reporter->reporter_name }}
                </label>
            </div>
            @endforeach
        </div>



        
    </div>




    <!-- Send button -->
    <div class="row col">
        <button type="submit" class="btn btn-primary" style="margin: auto;">Send</button>
    </div>
</form>
@endsection




@section('custom_js')




<script type="text/javascript">
 
    function countCheckedBox() {
        
        var x = $(".reporter-checkbox:checked").length;
        
        $("#total_reporters").empty();
        $("#total_reporters").append(x + " selected");
    }
    
    $(".group-checkbox").click(function(){
        
        if (this.checked) {
           
            $("#reporterList .reporter-"+this.value+"").css("display", "");
        } else {
            
            $("#reporterList .reporter-"+this.value+" .reporter-checkbox").prop('checked', false);
            $("#select-all-reporters").prop('checked', false);
           
            $("#reporterList .reporter-"+this.value+"").css("display", "none");
        }
        countCheckedBox();
    })
    
    $(".reporter-checkbox").click(function(){
        countCheckedBox();
    })
    
    $("#select-all-groups").click(function(){
        
        $(".group-checkbox").prop('checked', this.checked);
        
        this.checked
        ?
        $("#reporterList .reporter-checkbox-div").css("display", "")
        :
        $("#reporterList .reporter-checkbox-div").css("display", "none");
        $("#reporterList .reporter-checkbox").prop('checked', false);
        $("#select-all-reporters").prop('checked', false);
        countCheckedBox();
    })
    
    $("#select-all-reporters").click(function(){
        var check_value = this.checked;
        
        $.each($(".reporter-checkbox-div"), function( i, val){
            if ($(this).css("display") !== "none") {
                $(this).find("input:eq(0)").prop('checked', check_value);
            }
        })
        countCheckedBox();
    })
</script>

@endsection