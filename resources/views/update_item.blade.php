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
            <form class="form-class" action="{{url('/Item/'.$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text form-input">Name</span>
                    </div>
                    <input name="name" type="text" class="form-control form-input" value="{{$item->name}}">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-input">Description</span>
                    </div>
                    <textarea name="description" class="form-control form-input" aria-label="With textarea">{{$item->description}}</textarea>
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-input">Image</span>
                    </div>
                    <input name="image" class="form-control form-input" type="file" id="formFile" required>
                </div>
                <br>
                <div class="input-group">
                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    <a href="{{url('/Item')}}" type="button" class="btn btn-info mr-2">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
