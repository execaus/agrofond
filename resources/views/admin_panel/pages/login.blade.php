@extends('admin_panel.base')

@section('content')
<div class="login-logo">
    <b>Log</b>in
</div>
<div class="card">
    <div class="card-body login-card-body">
        <form class="login_form" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="login" placeholder="Login">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-sign-in-alt"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                </div>
            </div>
            <div class="mt-3" style="height: 24px">
                <div class="text-red text-center auth_message">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection
