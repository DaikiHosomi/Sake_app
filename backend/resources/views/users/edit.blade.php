@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-10">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="py-5 form">

                    <div class="form-group row">
                        <label for="name" class="col-md-5 col-form-label">名前</label>
                        <input type="name" class="col-md-6 form-control" id="exampleInputName" name="name"
                            value="{{ $user->name }}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label">性別</label>
                        <div class="col-md-7">
                            <input id="gender_male" name="gender" type="radio" value="1"
                                {{ $user->gender == '1' ? 'checked' : '' }}>
                            <label>男性</label>
                            <input id="gender_male" name="gender" type="radio" value="2"
                                {{ $user->gender == '2' ? 'checked' : '' }}>
                            <label>女性</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sake_categiry" class="col-md-5 col-form-label">好きなお酒カテゴリー</label>
                        <select name="sake_category_id">
                            <option selected="">選択する</option>
                            @foreach ($sake_categories as $sake_category)
                            @if($user->sake_category_id == $sake_category-> id )
                            <option value="{{ $sake_category->id }}" 　selected>{{ $sake_category->name }}</option>
                            @else
                            <option value="{{ $sake_category->id }}">{{ $sake_category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="favorite_sake_name" class="col-md-5 col-form-label">好きなお酒</label>
                        <textarea type="text" class="col-md-6 form-control" 　rows="2" id="exampleInputName"
                            name="favorite_sake_name">
                            {{ $user->favorite_sake_name }}
                        </textarea>
                    </div>

                    <div class="form-group row">
                        <label for="user_self_introduction" class="col-md-5 col-form-label">自己紹介</label>
                        <textarea type="text" class="col-md-6 form-control" rows="4" id="exampleInputName"
                            name="user_self_introduction">
                            {{ $user->user_self_introduction }}
                        </textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary w-50">登録</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
