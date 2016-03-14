@extends('layouts.master')
 
@section('sidebar')
    @parent
    <h2>Login de Usuario</h2>
@stop
 
@section('content')

<div class="container">

    <div class="starter-template">
        
        <div class="body">
            
            <span class="error">{{ $errors->first('msg') }}</span>

            <div  style="position: relative; width: 70%; left: 15%;">

               {{Form::open(array('class' => 'login', 'url' => 'check/user', 'method' => 'POST' ))}}
                <fieldset>
                    <div class="form-group no-margin">
                        <h2><b>{{Form::label('email')}}</b></h2>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        {{Form::text('email', '', array('class' => 'form-control input-lg', 'placeholder'=> "correo electronico", 'required'=>'required'))}}
                        </div>

                        <span class="error">{{ $errors->first('login') }}</span>

                        <div class="form-group">
                            <h2><b>{{Form::label('password')}}</b></h2>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span>
                            {{Form::password('password', array('class' => 'form-control input-lg', 'placeholder'=> "contraseña", 'required'=>'required'))}}
                            </div>
                            <span class="error">{{ $errors->first('password') }}</span>
                        </div>

                    </div>    
                </fieldset>

                <div class="form-actions ">
                        <button type="submit" class="btn btn-block btn-lg btn-danger">
                            <span class="small-circle"><i class="fa fa-caret-right"></i></span> <b>Iniciar</b>
                        </button>

                </div>

                {{Form::close()}}

            </div><br>              
            
        </div>
        
    </div>
    
</div>
     
@stop    
    
    

   
    

    
