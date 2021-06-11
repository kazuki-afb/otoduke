@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ $massege }}</div>
              <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" >
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ $title }}<strong style="color:red; font-size:8px;">※必須</strong></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('タイトル') is-invalid @enderror" name="title" required autocomplete="title" autofocus>

                                @error('タイトル')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="music_date" class="col-md-4 col-form-label text-md-right">{{ $music }}<strong style="color:blue; font-size:8px;">※任意</strong></label>

                            <div class="col-md-6">
                                <input id="music_date" type="file" class="custom-file"  name="music_date">

                                @error('music')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="movie_date" class="col-md-4 col-form-label text-md-right">{{ $movie}}<strong style="color:blue; font-size:8px;">※任意</strong></label>

                            <div class="col-md-6">
                                <input id="movie_date" type="file" class="custom-file"  name="movie_date">

                                @error('movie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="voice_date" class="col-md-4 col-form-label text-md-right">{{ $voice }}<strong style="color:red; font-size:8px;">※</strong></label>

                            <div class="col-md-6">
                                <input id="voice_date" type="long" class="form-control @error('password') is-invalid @enderror" name="voice_date">

                                @error('$voice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<strong style="color:red; font-size:8px;">※</strong></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image_icon" class="col-md-4 col-form-label text-md-right">アイコンを選ぶ<strong style="color:blue; font-size:8px;">※任意</strong></label>

                            <div class="col-md-6">
                                <input id="image_icon" type="file" class="custom-file" name="image_icon" >
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ $comment }}<strong style="color:blue; font-size:8px;">※</strong></label>

                            <div class="col-md-6">
                                <textarea id="comment" type="text" class="form-control" rows="5" name="comment" ></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" value="Upload">
                                    {{ __('投稿') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection