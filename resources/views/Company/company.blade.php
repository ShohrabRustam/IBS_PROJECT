@extends('Admin.master')
@section('title')
Company
@endsection
@section('section')
<?php
// echo '<pre>';
//     var_dump($data);
//     die;
?>
<center>
    <h1>Companies</h1>

</center>
<div class="container center">
<a href="{{ URL('/companyregistration') }}" class="btn btn-primary center" style="margin-bottom: 20px; margin-top:20px">Add Company</a>
<table class="table">
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
        @foreach ($data as $item)
        <tr style="margin-bottom: 20px">
            <td scope="row"><img src="{{ $item['logo'] }}" class="img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|" alt="image" style="height: 30px; width:70px"></td>
            <td>{{ $item['register_number'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['about'] }}</td>
            <td><a href="viewpolicy/{{ $item['id'] }}"><button class="btn btn-info">  View  Policies </button></a></td>
            <td> <a href="policyregistration/{{ $item['id'] }}"><button class="btn btn-info">  Add Policy</button></a></td>
            <td><a href="editpolicy/{{ $item['id'] }}"><button class="btn btn-primary"> Edit Company Details</button></a> </td>
            <td><a href="policydelete/{{ $item['id'] }}"><button class="btn btn-danger"> Delete Company</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
