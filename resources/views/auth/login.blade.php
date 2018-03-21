@extends('layouts.app')

@section('content')
<div class="container login-container">
    <div class="row justify-content-center">
      <div class="cover"></div>
       <div class="col-md-5">
         <div class="ibox login-content">
             <div class="text-center">
                 <span class="auth-head-icon"><i class="la la-user"></i></span>
             </div>
             <div class="ibox-body">
               <form class="ibox-body" id="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                 <h4 class="font-strong text-center mb-5">{{ __('Login') }}</h4>
                 <div class="form-group mb-4">
                     <input class="form-control form-control-line form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off" required autofocus>
                 </div>
                 <div class="form-group mb-4">
                     <input id="password" class="form-control form-control-line form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" autocomplete="off" required>
                 </div>
                 <div class="flexbox mb-5">
                     <span>
                         <label class="ui-switch switch-icon mr-2 mb-0">
                             <input type="checkbox" checked="">
                             <span></span>
                         </label>Remember</span>
                     <a class="text-primary" href="{{ route('password.request') }}">Forgot password?</a>
                 </div>
                 <div class="text-center mb-4">
                     <button type="submit" class="btn btn-primary btn-rounded btn-block">{{ __('Login') }}</button>
                 </div>
               </form>
             </div>
         </div>

       </div>

    </div>
</div>
@endsection
