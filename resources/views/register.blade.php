@extends('layout.index')
@section('register')
  
        <div class="register-photo">
            <div class="form-container">
                <form method="post" action="{{ url('register/save') }}">
                    @csrf
                    <h2 class="text-center"><strong>Create</strong> an account.</h2>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group"><input class="form-control" type="password" name="password"
                            placeholder="Password"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password-repeat"
                            placeholder="Password (repeat)"></div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                                    type="checkbox">I agree to the license terms.</label></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div>
                    <a href="#" class="already">You already have an account? Login here.</a>
                </form>
            </div>
        </div>
@endsection
