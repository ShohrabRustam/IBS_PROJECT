@extends('Admin.master')
@section('title')
Policy
@endsection
@section('section')
<?php
// echo '<pre>';
//     var_dump($data);
//     die;
?>
<center><h1>Policies</h1></center>

<div class="container center">
<table class="table">
    <center><h1>{{ $company['name'] }}</h1></center>
    {{-- <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Add Policy</th>
            <th>Edit Policy</th>
            <th>Delete</th>
        </tr>
    </thead> --}}
    <tbody>
        @foreach ($policies as $item)
        @if($item['companyid']==$company['id'])
        <tr style="margin-bottom: 20px">
            <td>{{ $item['policyname'] }}</td>
            <td>{{ $item['policytype'] }}</td>
            <td>{{ $item['policydesc'] }}</td>
            <td>{{ $item['policydesc'] }}</td>
            <td>{{ $item['policyprice'] }}</td>
            <td>{{ $item['claimprice'] }}</td>
            <td>{{ $item['timeperiod'] }}</td>
            <td><a href="#"><button class="btn btn-primary"> Edit Policy Details</button></a> </td>
            <td><a href="#"><button class="btn btn-danger"> Delete Policy</button></a></td>
{{--
            <td><a href="editpolicy/{{ $company['id'] }}/{{ $item['id'] }}"><button class="btn btn-primary"> Edit Policy Details</button></a> </td>
            <td><a href="policydelete/{{ $company['id'] }}/{{ $item['id'] }}"><button class="btn btn-danger"> Delete Policy</button></a></td> --}}
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
</div>
@endsection
