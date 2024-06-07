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
    <div class="col text-center">
        <div class="row">
            @foreach ($items as $item )
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($item->image_path)}}" alt="{{$item->image_path}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <br>
                            <button type="button" class="btn btn-info mr-2">See More</button>
                            <button type="button" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger mr-2"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

