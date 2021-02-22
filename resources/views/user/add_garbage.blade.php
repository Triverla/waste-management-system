@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add a Garbage Record</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('add_garbage')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Garbage Amount</label>
                    <input id="garbage_weight" type="number" step="0.01" class="form-control" name="amount" placeholder="kg">
                </div>
                
                <button type="submit" class="btn btn-default">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection