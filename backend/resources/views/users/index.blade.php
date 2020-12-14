@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ</div>
                <div class="card-body row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h3>{{ $user->name }}</h3>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>{{ $user->sake_category->name }}</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>{{ $user->favorite_sake_name }}</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>{{ $user->user_self_introduction }}</p>
                    </div>
                    <a class="btn btn-primary" href="{{ route('users.edit', Auth::user()->id) }}">ユーザー情報編集</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
