@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2>プロフィール編集</h2>
          <form action="{{ action('Admin\ProfileController@update')}}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                  @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                  @endforeach
                </ul>
            @endif
            <div class="form-group row">
              <label class="col-md-2" for="title">名前</label>
              <div class="col-md-10">
                <input type="text" class="form-control"name="name" value="{{ $profile_form->name }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="title">性別</label>
              <div class="col-md-10">
                <textarea class="form-control" name="gender">{{ $profile_form->gender }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="title">趣味</label>
              <div class="col-md-10">
                <textarea class="form-control" name="hobby">{{ $profile_form->hobby }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="title">自己紹介</label>
              <div class="col-md-10">
                <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2">画像</label>
              <div class="col-md-10">
              <input type="file" class="form-control-file" name="image">
              <div class="form-text text-info">
                設定中: {{ $profile_form->image_path }}
              </div>
                <div class="form-check">
                  <label class="form-check-lavel">
                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $profile_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
              </div>
            </div>
          </form>
          <div class="row mt-5">
            <div class="col-md-6 mx-auto">
              <h2>プロフィール編集履歴</h2>
                <ul class="list-group">
                  @if ($profile_form->profilehistories != NULL)
                    @foreach ($profile_form->profilehistories as $profilehistory)
                      <li class="list-group-item">{{ $profilehistory->edited_at }}</li>
                    @endforeach
                  @endif
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
