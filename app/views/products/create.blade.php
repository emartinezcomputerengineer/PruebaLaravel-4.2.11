@extends('layouts.master')
 
@section('sidebar')
     @parent
     <h2> Alta de Productos </h2>

     
<!--    <div class="actions" style="position: absolute; top: 0px; right: 0px;">
        <button class="btn btn-success"><i class="fa fa-arrow-down"></i> {{ HTML::link('/products', 'return'); }} </button>
    </div>-->
     
     
@stop

@section('content')
    
<div class="container">

    <div class="starter-template">
        
        <div class="body">
            
            <fieldset >

                {{ Form::open(array('url' => 'products/create','method' => 'POST')) }}

                    <div class="form-group">
                        {{Form::label('name', 'Producto', array('class'=>'section'))}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                            {{Form::text('name', '', array('class'=>'form-control date-picker'))}}
                        </div>
                    </div>
                    @if($errors->has('name'))
                        <div class='alert alert-danger' style="text-align: center;">
                             {{Session::get('mensaje')}} El nombre es un dato requerido !
                        </div>
                    @endif

                    <div class="form-group">
                        {{Form::label('description', 'Descripción', array('class'=>'section'))}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            {{Form::text('description', '', array('class'=>'form-control date-picker'))}}
                        </div>
                    </div>
                    @if($errors->has('paternal'))
                        <div class='alert alert-danger' style="text-align: center;">
                             {{Session::get('mensaje')}} La descripción es un dato requerido !
                        </div>
                    @endif

                    <div class="form-actions" style="text-align: center;">
                        {{Form::submit('Guardar',array('type'=>'button','class'=>'btn btn-success'))}}

                        {{ HTML::link('products/list', 'Cancelar',array('type'=>'button','class'=>'btn btn-success')); }}
                        

                    </div>

                {{ Form::close() }}

            </fieldset>            
            
        </div>
        
    </div>
    
</div>
  
        
@stop


