@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.news.create.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.news.edit.name') }}:</label>
                    <input type="text" class="form-control @if($errors->has('tieu_de')) name_error @endif " value="" name="tieu_de" >
                    <i class="@if($errors->has('tieu_de')) name_error @endif"> 
                        @if($errors->has('tieu_de'))
                            {{ $errors->first('tieu_de') }}
                        @endif 
                    </i>
                </div>
                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.create.namenewstype') }}:</label>
                    <select name="news_type_id" id="" class="form-control" >
                        @foreach($listNewsType as $newstype)
                        <option value="{{$newstype->id}}" >{{$newstype->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.index.author') }}:</label>
                    <select name="user_id" id="" class="form-control" >
                        @foreach($listUser as $user)
                        <option value="{{$user->id}}" >{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.url') }}:</label>
                    <input type="file" name="url_img" class="form-control" placeholder="image">                       
                     <i class="@if($errors->has('url_img')) name_error @endif"> 
                            @if($errors->has('url_img'))
                                {{ $errors->first('url_img') }}
                            @endif 
                        </i>
                </div>
                
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.summary') }}:</label>
                        <input type="text" class="form-control @if($errors->has('tom_tat')) name_error @endif" value="" name="tom_tat" >
                        <i class="@if($errors->has('tom_tat')) name_error @endif"> 
                            @if($errors->has('tom_tat'))
                                {{ $errors->first('tom_tat') }}
                            @endif 
                        </i>
                </div>
                
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.content') }}:</label>
                    <textarea class="editor1" id="editor1" rows="9" type="text" class="form-control @if($errors->has('tom_tat')) name_error @endif"  name="noi_dung" >
                    </textarea>
                   
                    <script>
                      
                         CKEDITOR.replace( 'editor1' );
                    </script>
                    <i class="@if($errors->has('noi_dung')) name_error @endif"> 
                        @if($errors->has('noi_dung'))
                            {{ $errors->first('noi_dung') }}
                        @endif 
                    </i> 
                </div>

                
                <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.news.index.submit') }}</button>
            </form>
            </div>
        </div>
    </div>
@endsection