@extends('SuperAdmin.master')
@section('title')
Admin List
@endsection
@section('section')
@section('section')
<div class="container center" style="margin-top: 70px; background-color:antiquewhite">

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
        @foreach ($admins as $admin)
        <tr style="margin-bottom: 20px">
            {{-- <td scope="row"><img src="{{ $item['logo'] }}" class="img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|" alt="image" style="height: 30px; width:70px"></td> --}}
            <td>{{ $admin['name'] }}</td>
            <td>{{ $admin['email'] }}</td>
            <td>{{ $admin['mobile'] }}</td>
            <td>{{ $admin['password'] }}</td>
            <td><a href="editadmin/{{ $admin['id'] }}"><button class="btn btn-info">  Edit </button></a></td>
            {{-- <td> <a href="policyregistration/{{ $item['id'] }}"><button class="btn btn-info">  Add Policy</button></a></td>
            <td><a href="editpolicy/{{ $item['id'] }}"><button class="btn btn-primary"> Edit Company Details</button></a> </td> --}}
            <td><a href="deleteadmin/{{ $admin['id'] }}"><button class="btn btn-danger"> Delete </button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
