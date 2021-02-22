@extends('layouts.app')
@section('content')
    <div class="container panel">
        <div style="text-align: center">
            <h1>Your Garbage Collection Logs</h1>
        </div>
        <br><br>
        <table class="table" width="100%">
            <tr>
                <th width="35%">Collected Date</th>
                <th width="35%">Worker</th>
                <th width="30%">Truck No</th>
            </tr>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->created_at}}</td>
                    <td>{{App\User::find($record->user_id)->name}}</td>
                    <td>{{App\Truck::find($record->truck_id)->registration_no}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection