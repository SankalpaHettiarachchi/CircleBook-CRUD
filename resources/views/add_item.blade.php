@extends('layout')

@section('content')
<div class="card-header">
    ADD ITEM
</div>
<div class="card-sub-header">
    <form action="{{url('/Item')}}" method="GET">
        @csrf
        <button type="submit" class="btn btn-info mr-2">Back</button>
    </form>
</div>
<div class="card-body">
    <div class="col text-center">
        <div class="row">
            <form class="form-class" action="{{url('/Item')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text form-input" id="">Name</span>
                    </div>
                    <input name="name" type="text" class="form-control form-input">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-input">Description</span>
                    </div>
                    <textarea name="description" class="form-control form-input" aria-label="With textarea"></textarea>
                </div>
                <br>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input form-input" id="fileInput">
                        <label class="custom-file-label form-input" for="fileInput">Choose file</label>
                    </div>
                </div>
                <br>
                <div class="input-group">
                    <button type="submit" class="btn btn-success mr-2">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
