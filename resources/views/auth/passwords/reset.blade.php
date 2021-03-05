@extends('layouts.app_only_content')

@section('title')
    パスワードリセット
@endsection

@section('content')
<div class="container">
   <div class="card" style="width:500px">
        <div class="card-body">
            <div class="font-wight-bold text-center border-bottom pb-3" style="font-size: 24px">パスワード再設定</div>

                <form action="{{ route('password.update') }}" class="p-5" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email"
                        class="form-control
                        @error('email')
                        is-invalid
                        @enderror"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="melpit@example.com" autofocus>
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
                        required autocomplete="new-password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-block btn-secondary">
                            パスワードを再設定する
                        </button>
                    </div>

                </form>
        </div>
    </div>
</div>
@endsection
