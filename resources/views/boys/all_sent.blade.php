@extends('layouts.boymain')

@section('content')
<div class="row col">
    <h4>Report List</h4>
</div>

      
                    <table id="dynamic-table" class="table  table-bordered">
                        <thead class="bg-primary font-weight-bold" style="text-align:center">
                            <tr>
                            <th scope="col" style="color:white" > ສົ່ງວັນທີ </th>
                            <th scope="col" style="color:white" > ພາກສ່ວນ </th>
                            <th scope="col" style="color:white"> ສະບັບເລກທີ </th>
                            <th scope="col" style="color:white"> ລົງວັນທີ </th>
                            <th scope="col" style="color:white"> ເລື່ອງ </th>
                            
                            
                            <th scope="col" style="color:white"> ໄຟ໌ລສະແກນ </th>
                            <th scope="col" style="color:white"> ເອກະສານຄັດຕິດ </th>
                            <th scope="col" style="color:white"> ຕອບກັບ </th>
                            
                            

</table>

 <script>
    jQuery(function($) {
    
        var myTable = $('#dynamic-table').DataTable();
    });
    </script> 
@endsection