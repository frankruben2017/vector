<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>V3ctoR</title>
     

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
              <li class="active"> <a href="{{ url('register') }}"> <span class="glyphicon glyphicon-user"></span>Registrarse</a></li>
              <li class="active"> <a href="{{ url('/') }}" ><span class="glyphicon glyphicon-log-in"></span>Iniciar</a></li>
           
           @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                  <ul class="dropdown-menu" role="menu">
                    <li>
                     <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
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
     
 @yield('content')




       
       {!!Html::script('js/jquery.min.js')!!}
       {!!Html::script('js/app.js')!!}
       {!!Html::script('js/laravel.js')!!}
       
       
        
      


</body>
</html>