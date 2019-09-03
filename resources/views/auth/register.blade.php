@extends('BackEnd.AdminDashboard.master')
@section('admin')

<div class = "breadcrumbs">
<div class = "breadcrumbs-inner">
<div class = "row m-0">
<div class = "col-sm-4">
<div class = "page-header float-left">
<div class = "page-title">
                                    <h1>Register Dashboard</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class = "content">
            <div class = "animated fadeIn">
            <div class = "buttons">

                        <!-- Left Block -->
                        <div class = "row">

                            <div  class = "col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div  class = "register">
                            <h1   style = "text-align: center;margin-bottom: 30px;color: darkgrey">Register Form</h1>
                            <form class = "form-horizontal" method = "POST" action = "{{ route('register') }}">
                                    {{ csrf_field() }}
                                            <div   class = "form-group{{ $errors->has('name') ? ' has-error' : '' }} row" >
                                            <label for   = "inputPassword" class = "col-sm-2 col-form-label">Name:</label>
                                            <div   class = "col-sm-10">
                                            <input id    = "name" type           = "text" class = "form-control" name = "name" value = "{{ old('name') }}" required autofocus>
                                                    @if ($errors->has('name'))
                                                        <span class = "help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        <div   class = "form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                        <label for   = "inputPassword" class = "col-sm-2 col-form-label">Enail:</label>
                                        <div   class = "col-sm-10">
                                        <input id    = "email" type          = "email" class = "form-control" name = "email" value = "{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                    <span class = "help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                        </div>
                                        <!--    <div class = "form-group row">
                                        <label  for        = "inputPassword" class           = "col-sm-2 col-form-label">Role:</label>
                                        <div    class      = "col-sm-10">
                                        <select class      = "custom-select my-1 mr-sm-2" id = "inlineFormCustomSelectPref">
                                                    <option selected>Choose Role</option>
                                                    <option value = "1">Admin</option>
                                                    <option value = "2">Sales Man</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div   class = "form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                        <label for   = "inputPassword" class = "col-sm-2 col-form-label">Password:</label>
                                        <div   class = "col-sm-10">
                                        <input id    = "password" type       = "password" class = "form-control" name = "password" required>
                                                @if ($errors->has('password'))
                                    <span class = "help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                        </div>
                                        <div   class = "form-group row">
                                        <label for   = "inputPassword" class   = "col-sm-2 col-form-label">Confirm Password:</label>
                                        <div   class = "col-sm-10">
                                        <input id    = "password-confirm" type = "password" class = "form-control" name = "password_confirmation" required>
                                            </div>
                                        </div>
                                        <div    class   = "center" style = "text-align: center">
                                        <button type    = "submit" class = "btn btn-primary">Register</button>
                                        Back   :<a href = "index.html">Go to Dashboard</a></div>

                                    </form>
                                </div>
                            </div>
                        </div> <!-- .row -->
                    </div> <!-- .buttons -->
                </div><!-- .animated -->
            </div><!-- .content -->

@endsection