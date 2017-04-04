  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Admin</title>
        <script type="text/javascript">
            $.ajaxSetup({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
           });
        </script>
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/styles.css')!!}
        {!!Html::style('css/font-awesome.css')!!}
        {!!Html::style('css/font-awesome.min.css')!!}
  </head>
  <body>
   
  <header id="main-header">
     <div class="container">
      <div class="row">
       <div class="col-md-3">
          <h1 id="main-logo"> <a href="index.html"> <span> V3ctor demo site</span></a>V3ctoR</h1>
       </div>
        <div class="col-md-9">
          <ul id='main-menu' class="nav nav-pills">
              @if (Auth::guest())
                <li class="active"> <a href="{{ url('register') }}"> <span class="glyphicon glyphicon-user">Registrarse</a></li>
                <li class="active"> <a href="{{ url('/') }}" ><span class="glyphicon glyphicon-log-in"></span>Iniciar</a></li>
             
             @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-user"> </i>
                    {{ Auth::user()->name }} <span class="caret "></span>
                   </a>

                    <ul id ="main-drop" class="dropdown-menu" role="menu">
                      <li>
                       <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                       </form>
                      </li>

                    </ul>
                   </li>
              @endif
            </ul> 
       </div>
      </div>
      </div>

    </header>
       


  <div id="main-content" class="contenido"> 
     <div class="container">
       
    <div class="row-fluid">
     <div class="container">
       <div class="row">
         
                    
          <div class="col-md-3" id="panel-left">
                 <div class="panel-group" id="accordion">
                          
                     <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-book">
                              </span>Catalogo</a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                         <a href="{!!URL::to('/cataloge/create') !!}"> <i class="fa fa-plus fa-fw"></i> Agregar</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                           <a href="{!!URL::to('cataloge') !!}"> <i class="fa fa-list-ol fa-fw"></i> Listar</a>
                                      </td>
                                  </tr>
                                                                   
                              </table>
                          </div>
                      </div>
                  </div>

                   <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                              </span>Solicitud</a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <a href="{!!URL::to('solicitud') !!}"> <i class="fa fa-list-ol fa-fw"></i> Listar</a>

                                      </td>
                                  </tr>
                                                                    
                              </table>
                          </div>
                      </div>
                  </div>

                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                              </span>Usuario</a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <a href="{!!URL::to('/usuario/create') !!}"> <i class="fa fa-user-plus" aria-hidden="true"></i> Agregar</a>

                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                           <a href="{!!URL::to('/usuario/create') !!}"> <i class="fa fa-list-ol fa-fw"></i> Listar</a>
                                      </td>
                                  </tr>
                                  
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                              </span>Reportes</a>
                          </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <span class="glyphicon glyphicon-usd"></span><a href="">Sales</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="glyphicon glyphicon-user"></span><a href="">Customers</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="glyphicon glyphicon-tasks"></span><a href="">Products</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="glyphicon glyphicon-shopping-cart"></span><a href="">Shopping Cart</a>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
         
      

    <div class="col-md-9">
       
           @yield('content')
     </div>    

   </div>
    
  </div>

  </div>
  <div class="clearfix"></div>
 </div> 
 </div>  
   

   
    <footer> 
     <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3>Proximas versiones de V3ctor</h3>
          <ul id="next-vectors">
            <li> <a href="index.html"> Primera version en abril 2017</a></li>
            <li><a href="index.html"> Segunda version en mayo 2017</li>
          </ul>
        </div>
        <div class="col-md-6 col-md-offset-1">
          <h3> Suscribete</h3>
          <form  id='subs-form 'action="">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="email" id="email" class="form-control" 
                  placeholder="tu correo electronico">
                </div>
              </div>
              <div class="col-md-4">
                <button class="btn btn-custom">Aceptar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   </footer>
  
   



         
       {!!Html::script('js/jquery.min.js')!!}
       {!!Html::script('js/app.js')!!}
       {!!Html::script('js/laravel.js')!!}
         
         
          
        


  </body>
  </html>