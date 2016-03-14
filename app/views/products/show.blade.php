@extends('layouts.master')
 
@section('sidebar')
     @parent
     <h2> Editar Producto</h2>
     
@stop
 
@section('content')
    
<div class="container">

    <div class="starter-template">
        
        <div class="body">
            
            <!-- Table -->
            <table class=table> 

                <thead> 
                    <tr> <th>Id</th> <th> Creación </th> <th> Actualización </th></tr> 
                </thead> 

                <tbody>

                    <tr> <th scope=row>{{$product->id}}</th> <td>{{$product->created_at}}</td> <td>{{$product->updated_at}}</td> </tr> 

                </tbody>

            </table>
            
            <fieldset>

                    {{ Form::open(array('url' => 'products/update/'.$product->id )) }}

                        <div class="form-group">
                            {{Form::label('name', 'Nombre de Producto', array('class'=>'section'))}}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                                {{Form::text('name', $product->name, array('class'=>'form-control date-picker'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('description', 'Descripción del Producto', array('class'=>'section'))}}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                {{Form::text('description', $product->description, array('class'=>'form-control date-picker'))}}
                            </div>
                        </div>

                        <div class="form-actions" style="display:flex; text-align: center;">

                            {{Form::submit('Guardar',array('type'=>'button','class'=>'btn btn-success'))}}

                    {{ Form::close() }}

                            {{ Form::open(array('url' => 'products/delete/'.$product->id )) }}
                            
                                {{Form::submit('Eliminar',array('type'=>'button','class'=>'btn btn-success'))}}
                                
                                {{ HTML::link('products/list', 'Cancelar',array('type'=>'button','class'=>'btn btn-success')); }}
                                
                            {{ Form::close() }}

                        </div>

            </fieldset>            
            
        </div>
        
    </div>
    
</div>
     
@stop