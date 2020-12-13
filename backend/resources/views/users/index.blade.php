@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('users.edit', Auth::user()->id) }}">ユーザー情報編集</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
