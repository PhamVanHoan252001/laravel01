@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.newstype.show.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form>
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.newstype.edit.name') }}:</label>
                    <input type="text" class="form-control" value="{{$newstype->name}}" name="name" >
                </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.newstype.create.nameCategory') }}:</label>
                    <select name="category_id" id="" class="form-control" >
                        @foreach($listCategory as $category)
                        <option value="{{$category->id}}" @if($category->id==$newstype->category_id){{"selected"}}@endif >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                <label for="pwd">{{ trans('tpl.newstype.edit.status') }}:</label>
                    <!--<input type="text" class="form-control" name="anhien">-->
                <select name="status" id="" class="form-control" >
                    <option value="1" @if($newstype->status==1){{"selected"}}@endif>{{ trans('tpl.newstype.index.status.show') }}</option>
                    <option value="0" @if($newstype->status==0){{"selected"}}@endif>{{ trans('tpl.newstype.index.status.hidden') }}</option>
                </select>
                </div>
                
            </form>
            </div>
        </div>
    </div>
@endsection