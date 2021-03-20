@extends('layouts.admin')

@section('content')

<div class="page-title">
    <h3>Create Category</h3>
</div>
<div class="section">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('category.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="email">Tên thể loại</label>
                <input type="text" class="form-control" value="" name="name" >
            </div>
            <div class="form-group">
            <label for="pwd">Status:</label>
            <select name="status" id="" class="form-control" >
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection