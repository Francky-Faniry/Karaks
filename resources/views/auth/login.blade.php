@extends('layouts.auth-master')

@section('content')
    <div style="background-color: rgb(212,207,207);width : 100%; height : 100vh;  display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <img src="{!! url('img/logo.jpg') !!}" alt="" style="width:120px; heigth: 120px;">
            <div class="checkbox mb-2">
            </div>
                  
            
            <div>
                <form method="post" action="{{ route('login.perform') }}">
                    @csrf
                        <input type="text" style="width:220px;" name="username" value="{{ old('username') }}" placeholder="Email or Username" required="required" autofocus>
                        <div class="checkbox mb-2">
                            
                        </div>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    
                    
                        <input type="password" style="width:220px;" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <div class="checkbox mb-2">
                            
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                   
        
                    <button class="btn btn-success" type="submit" style="width:220px;">Connecter</button>
                    
                    @include('auth.partials.copy')
                </form>
            </div>
            
    </div>

@endsection
