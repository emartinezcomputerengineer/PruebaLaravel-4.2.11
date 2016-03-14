@extends('layouts.master')
 
@section('sidebar')
    @parent
    <h2> 
        Listado de Productos : {{$counter}} 
      
        {{ HTML::link('salir', 'Salir',array('type'=>'button','class'=>'btn btn-success')); }} 

    </h2>
@stop
 
@section('content')

<div class="container">

    <div class="starter-template">
        
        <div class="body">
            
            <!-- Default panel contents -->
            <div class="panel panel-default">
                
                <div class=panel-heading> 
                    <i class="glyphicon glyphicon-plus"></i>
                    {{ HTML::link('products/new', 'Alta de Productos',array('type'=>'button','class'=>'btn btn-success')); }} 
                </div> 
                
                <!-- Table -->
                <table class=table> 

                    <thead> 
                        <tr> <th>#</th> <th> Producto </th> <th> Descripción </th> <th> Editar Producto </th>  </tr> 
                    </thead> 

                    <tbody>

                        @foreach($products as $product)

                            <tr> <th scope=row>{{$product->id}}</th> <td>{{$product->name}}</td> <td>{{$product->description}}</td> <td> {{ HTML::link('products/'.$product->id, '',array('type'=>'button','class'=>'btn btn-success glyphicon glyphicon-pencil')); }}</td> </tr> 

                        @endforeach

                    </tbody>
                    
                </table> 
                
            </div> 

        </div>
     
    </div>

</div><!-- /.container -->


@stop
