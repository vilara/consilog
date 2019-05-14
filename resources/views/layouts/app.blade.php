@include('include.head')

<body>

    <div id="app">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    
    <a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    	 <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    

    
    
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Início <span class="sr-only">(current)</span></a>
      </li>
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administração
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a  class="dropdown-item"  href="{{ route('usuarios.index') }}">Usuários</a>
            <a  class="dropdown-item"  href="{{ route('comandos.index') }}">Comandos</a>
            <a  class="dropdown-item"  href="{{ route('oms.index') }}">OM</a>
            <a  class="dropdown-item"  href="{{ route('funcoes.index') }}">Funções</a>
        </div>
      </li>
      
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="{{ route('usuarios.create') }}">Usuário</a>
            <a class="dropdown-item" href="{{ route('oms.create') }}">OM</a>
        </div>
      </li>
      
     
    </ul>
    
     <ul class="navbar-nav ml-auto">
     
      @guest
      
        <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        
        @if (Route::has('register'))
         <li class="nav-item">
              <a class="nav-link" href="{{ route('usuarios.create') }}">{{ __('Cadastrar') }}</a>
         </li>
        @endif
      
      @else
      
       <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
           </a>
           
           
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
           
           <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
           >
           {{ __('Logout') }}
           </a>
           
           
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
           
           </div>
       </li>
      
      
      @endguest
     
     </ul>
    
    
<!--     <form class="form-inline my-2 my-lg-0"> -->
<!--       <input class="form-control mr-sm-2" type="text"> -->
<!--       <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button> -->
<!--     </form> -->
    
    
    </div>
    
    </nav>
    
    
    
    
<!--  __________________________________________________________________________________ -->
     
     


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    @include('include.footer')


