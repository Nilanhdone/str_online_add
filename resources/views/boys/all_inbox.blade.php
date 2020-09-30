@extends('layouts.boymain')

@section('content')
<div class="row col">
    <h4>reply List</h4>
</div>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">reply Number</th>
            <th scope="col">Title</th>
            <th scope="col">Sign Date</th>
            <th scope="col">Type</th>
            <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach($replys as $reply)
        <tr>
            <td>{{ $reply->report_number }}</td>
            <td>{{ $reply->title }}</td>
            <td>{{ $reply->sign_date }}</td>
            <td>{{ $reply->type }}</td>
            <td><a href="/reply-detail-{{ $reply->id }}">More detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection