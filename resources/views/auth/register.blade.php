@extends('layouts.app_only_content')

@section('title')
    会員登録
@endsection

@section('content')
<div class="container">
    <div class="card" style="width:500px">
        <div class="card-body">
            <div class="font-wight-bold text-center border-bottom pb-3" style="font-size: 24px">会員情報登録</div>

                <form action="{{ route('register') }}" class="p-5" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">ニックネーム</label>
                        <input type="text" name="name" id="name"
                        class="form-control
                        @error('name')
                        is-invalid
                        @enderror"
                        value="{{ old('name') }}" required autofocus placeholder="メルピット太郎">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email"
                        class="form-control
                        @error('email')
                        is-invalid
                        @enderror"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="melpit@example.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" id="password"
                        class="form-control
                        @error('password')
                        is-invalid
                        @enderror"
                        value="{{ old('password') }}" required autocomplete="password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-secondary">
                            会員登録
                        </button>
                    </div>

                    <div>
                        アカウントをお持ちの方は
                        <a href="{{ route('login') }}">
                        こちら
                        </a>
                    </div>

                </form>

        </div>
    </div>
</div>
@endsection
