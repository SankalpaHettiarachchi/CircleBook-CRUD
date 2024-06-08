@extends('layout')

@section('content')
<div class="card-header">
    INVENTORY
</div>
<div class="card-sub-header">
    Update Item
</div>
<div class="card-body">
    <div class="col text-center">
        <div class="row">
            <div class="card">
                <img class="card-img-top" src="{{asset($item->image_path)}}" alt="{{$item->image_path}}" style="width:50%">
                <div class="card-body item-center">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <br>
                    <div class="row">
                        <a href="{{url('/Item')}}" type="button" class="btn btn-info mr-2">Back</a>
                        <form action="{{url('/Item/'.$item->id.'/edit')}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></button>
                        </form>
                        <form action="{{url('/Item/'.$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mr-2"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

