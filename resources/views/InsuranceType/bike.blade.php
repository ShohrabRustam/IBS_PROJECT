@extends('layouts.master')
@section('title')
Insurance
@endsection

@section('section')
<h2>Bike Insurance Page</h2>
{{-- <div class="container center">
    <table class="table"> --}}
        {{-- <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Add Policy</th>
            <th>Edit Policy</th>
            <th>Delete</th>
        </tr>
     </thead> --}}
        {{-- <tbody>

            @foreach ($data as $item)
                @if ($item['policytype'] == 'Bike')
                    <tr style="margin-bottom: 20px;background-color:white;border-buttom : 20px;border-bottom-width: 30px;">
                        <td><strong>{{ $item['policyname'] }}</strong></td>
                        <td><strong>{{ $item['policydesc'] }}</strong></td>
                        <td><strong>{{ $item['policytype'] }}</strong></td>
                        <td><strong>{{ $item['policyprice'] }}</strong></td>
                        <td><strong>{{ $item['claimprice'] }}</strong></td>
                        <td><strong>{{ $item['timeperiod'] }}</strong></td>

                        <td><a href="purchase/{{ $item['id'] }}"><button class="btn btn-primary"> Buy</button></a>
                        </td>
                    </tr>
                    @endif
                @endforeach
        </tbody>
    </table>
</div>
 --}}


@endsection
