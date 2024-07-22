<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('css/login.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
  <title>Inv-Asignacion | Inicio de sesión</title>
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="{{ route('login.store') }}" method="POST" class="sign-in-form">
          @csrf
          <h2 class="title">Iniciar sesión | Inv Asignacion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Correo electrónico" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Contraseña" required />
          </div>
          <input type="submit" value="Iniciar sesión" class="btn solid" />
          @if(session('mensaje'))
          <div class="alert alert-danger">
            {{ session('mensaje') }}
          </div>
          @endif
          <p class="social-text">O inicia sesión con tus redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        
        <form class="sign-up-form needs-validation" action="{{ route('register.user.store') }}" method="POST" novalidate>
          <h2 class="title">Registrarse | Inv Asignacion</h2>
          @csrf
      
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
      
          <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Usuario" placeholder="Usuario" />
          </div>
          <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="Email" placeholder="Correo electrónico" />
          </div>
          <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="Email confirmacion" placeholder="Correo electrónico confirmación" />
          </div>
          <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Contraseña" placeholder="Contraseña" />
              <i id="password-toggle-icon" class="fas fa-eye" onclick="togglePasswordVisibility()"></i>
          </div>
          <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Contraseña confirmacion" placeholder="Contraseña confirmación" />
          </div>
          <input type="submit" class="btn" value="Registrarse" />
          <p class="social-text">O regístrate con tus redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿Eres nuevo aquí?</h3>
          <p>
            Regístrate y accede al sistema. Al registrarte, podrás disfrutar de todas las funcionalidades que ofrece el sistema, como la capacidad de asignar componentes a tus empleados, de realizar un seguimiento de las compras realizadas y de visualizar informes detallados sobre el asignamiento de tus componentes. 
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrarse
          </button>
        </div>
        <img src="{{ url('img/log.svg') }}" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>
            Inicia sesión con tu cuenta para acceder a todas las funcioneses del sistema.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Iniciar sesión
          </button>
        </div>
        <img src="{{ url('img/register.svg') }}" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="{{ url('js/login.js') }}"></script>
</body>
</html>