<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a class="simple-text logo-normal">
      {{ __('GIMNASIO BIDELGI') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      


      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample1" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Adm. de Servicios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample1">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Grupo de Entrenamiento') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Horario') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Disciplina') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Categoria') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Descuento') }} </span>
              </a>
            </li>


          </ul>
        </div>
      </li>


       
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample2" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Mantenimiento') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample2">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Casillero') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Sala') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Aparato') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management3') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample3" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Inscripcion') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample3">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Casillero') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Inscripcion') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample4" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Adm. General') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample4">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('clientes.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Cliente') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('instructores.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"> {{ __('Instructor') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('administradores.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"> {{ __('Administrador') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample5" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Adm. de Usuario') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample5">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Usuario') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample6" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Control General') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample6">
          <ul class="nav">
           
          </ul>
        </div>
      </li>
       

    

      <!--<li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>-->
      
    </ul>
  </div>
</div>
