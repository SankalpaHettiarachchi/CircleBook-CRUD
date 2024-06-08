@extends('layout')

@section('content')
<div class="card-header">
    INVENTORY
</div>
<div class="card-sub-header">
    <form action="{{url('/Item/create')}}" method='GET'>
        @csrf
        <button type="submit" class="btn btn-info mr-2">+ Add New</button>
    </form>
</div>
<br>
<div class="card-body">
    <div class="col-12">
        <div class="row">
            @foreach ($items as $item )
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($item->image_path)}}" alt="{{$item->image_path}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <br>
                            <div class="row">
                                <form action="{{url('/Item/'.$item->id)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-info mr-2">See More</button>
                                </form>
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
            @endforeach
        </div>
    </div>
</div>
@endsection

