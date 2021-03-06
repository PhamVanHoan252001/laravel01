@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.news.edit.title') }}</h3>
    </div>
    <div class="section">

        <div class="row">
            <div class="col-12">
            <form action="{{ route('news.update',  $news->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.news.edit.name') }}:</label>
                    <input type="text" class="form-control @if($errors->has('tieu_de')) name_error @endif" value="{{$news->tieu_de}}" name="tieu_de" >
                    <i class="@if($errors->has('tieu_de')) name_error @endif"> 
                        @if($errors->has('tieu_de'))
                            {{ $errors->first('tieu_de') }}
                        @endif 
                    </i>
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.url') }}:</label>
                        <input type="file" placeholder="image" class="form-control @if($errors->has('url_img')) name_error @endif" value="{{$news->url_img}}" name="url_img" >
                        <i class="@if($errors->has('url_img')) name_error @endif"> 
                            @if($errors->has('url_img'))
                                {{ $errors->first('url_img') }}
                            @endif 
                        </i>
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.summary') }}:</label>
                        <input type="text" class="form-control @if($errors->has('tom_tat')) name_error @endif" value="{{$news->tom_tat}}" name="tom_tat" >
                        <i class="@if($errors->has('tom_tat')) name_error @endif"> 
                            @if($errors->has('tom_tat'))
                                {{ $errors->first('tom_tat') }}
                            @endif 
                        </i>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ trans('tpl.news.edit.content') }}:</label>
                       
                            <textarea class="editor1" id="editor1" rows="9" type="text" class="form-control @if($errors->has('tom_tat')) name_error @endif"  name="noi_dung" >
                                {{$news->noi_dung}}
                            </textarea>
                           
                            <script>
                                config = {};
                                config.entities_latin = false;
                                 CKEDITOR.replace( 'editor1', config );
                            </script>
                            <i class="@if($errors->has('noi_dung')) name_error @endif"> 
                                @if($errors->has('noi_dung'))
                                    {{ $errors->first('noi_dung') }}
                                @endif 
                            </i>
                    </div>
                   
                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.create.namenewstype') }}:</label>
                    <select name="news_type_id" id="" class="form-control" >
                        @foreach($listNewsType as $newstype)
                        <option value="{{$newstype->id}}" @if($newstype->id==$news->news_type_id){{"selected"}}@endif >{{$newstype->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.index.author') }}:</label>
                    <select name="user_id" id="" class="form-control" >
                        @foreach($listUser as $user)
                        <option value="{{$user->id}}" @if($user->id==$news->user_id){{"selected"}}@endif >{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.news.index.submit') }}</button>
            </form>
            </div>
        </div>
    </div>
@endsection