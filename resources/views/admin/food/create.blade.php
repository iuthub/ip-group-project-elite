@extends('admin/layouts.main')

@section('content')
    <div class="container" style="width: 600px;">
    <form class="border border-light p-5" action="{{ action('FoodsController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="Rank">Rank</label>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="food-image" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="food-image">Choose file</label>
            </div>
        </div>
        <br>

        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Description about food"></textarea>
        </div>

        <button class="btn btn-info btn-block" type="submit">Save</button>

    </form>
</div>
@endsection