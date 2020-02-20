{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成画面</h2>
            </div>
        </div>
        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
        <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" value="{{ old('title') }}">
                        </div>
        </div>
        <div class="form-group row">    
                      <label class="col-md-2">性別</label>
                       <div class="col-md-8">
                           <input type="radio" name="gender" value="male">男性
                           <input type="radio" name="gender" value="female">女性
                       </div>
    　　</div>
    　　 <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="hobby" value="{{ old('title') }}">
                        </div>
        </div>
        <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('body') }}</textarea>
                        </div>
        </div>
         <input type="submit" class="btn btn-primary" value="送信">
         </form>
    </div>
    
@endsection