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
            <form class="form-class">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text form-input" id="">Name</span>
                    </div>
                    <input type="text" class="form-control form-input">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-input">Description</span>
                    </div>
                    <textarea class="form-control form-input" aria-label="With textarea"></textarea>
                </div>
                <br>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input form-input" id="inputGroupFile01">
                        <label class="custom-file-label form-input" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <br>
                <div class="input-group">
                    <button type="button" class="btn btn-success mr-2">Save</button>
                    <button type="button" class="btn btn-info mr-2">Back</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
