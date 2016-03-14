<!doctype html>

<html lang="es">
    
    <head>
        
        <meta charset="UTF-8">
	<title> Prueba Técnica </title>
        
        <!--{{ HTML::style('/light-blue/css/application.css')}}-->
        {{ HTML::style('/css/master.css')}}
        {{ HTML::style('/css/listado.css')}}
        
        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script type="text/javascript" src="./js/quickpager.jquery.js"></script>
        <script type="text/javascript" src="./js/paging.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        

    </head>
    
    <body>
        
        <div class="header">
            
            <h1><i class="fa fa-cogs"></i> 
                
                
                     <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                @section('sidebar')
                              
                                @show 
                            </div>
                        </div>
                    </nav>                
                    
                 
            </h1>
          
        </div>

        <div class='container' style="position: relative; top: 65px;">
            
            @yield('content')
            
        </div>
        
    </body>

</html>
