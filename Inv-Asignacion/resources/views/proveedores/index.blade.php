<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proveedor | Inv-Asignacion</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
  <link  rel="shortcut icon" href="{{ asset('img/logo.png') }}">
  <link rel="stylesheet" href="{{ url('css/tablas.css') }}">
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/logo.png" class="logo" alt="">
      <h3 class="hide">Gestión de inventarios</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Búsqueda Rápida ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="{{ url('asignacion_diadema') }}" data-active="0">
            <div class="icon">
              <i class='bx bx-speaker'></i>
              <i class='bx bxs-speaker'></i>
            </div>
            <span class="link hide">Diademas</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="{{ url('asignacion_componente') }}" data-active="1">
            <div class="icon">
              <i class='bx bx-book-content'></i>
              <i class='bx bxs-book-content'></i>
            </div>
            <span class="link hide">Componentes</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="{{ url('producto') }}" data-active="2">
            <div class="icon">
              <i class='bx bx-purchase-tag'></i>
              <i class='bx bxs-purchase-tag'></i>
            </div>
            <span class="link hide">Productos</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="{{ url('compra') }}" data-active="3">
            <div class="icon">
              <i class='bx bx-basket'></i>
              <i class='bx bxs-basket'></i>
            </div>
            <span class="link hide">Compras</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="4">
          <a href="{{ url('proveedor') }}" class="active" data-active="3.2">
            <div class="icon">
              <i class='bx bx-fridge'></i>
              <i class='bx bxs-fridge'></i>
            </div>
            <span class="link hide">Proveedores</span>
          </a>
        </li>
        <div class="tooltip">
          <span>Diademas</span>
          <span>Componentes</span>
          <span>Productos</span>
          <span>Compras</span>
          <span class="show">Proveedores</span>
        </div>
      </ul>

      <h4 class="hide">Atajos</h4>

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tareas</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="6">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Ayuda</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="7">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Configuración</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Tareas</span>
          <span>Ayuda</span>
          <span>Configuración</span>
        </div>
      </ul>
    </div>

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3>Santiago Forero</h3>
            <h5>Administrador</h5>
          </div>
        </div>
        <a href="#" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">Santiago Forero</span>
        <span>Cerrar Sesión</span>
      </div>
    </div>
  </nav>


  <main>
    <h1>Gestion de Proveedores</h1>
    <p class="text">
      La gestión de proveedores es una de las tareas más importantes dentro de una empresa, ya que se encarga de la adquisición, almacenamiento, distribución y seguimiento de los productos o servicios que se ofrecen a los clientes. La gestión de proveedores es fundamental para que la empresa pueda funcionar de manera eficiente y eficaz, ya que permite controlar los inventarios, reducir costos y mejorar la satisfacción del cliente.
    </p>
    <div class="container mt-5">
            <h2 class="mb-4">Asignaciones realizadas:</h2>
            <input type="text" id="customSearchInput" class="search-input" placeholder="Buscar en la tabla...">
            <div class="table-responsive">
                <table class="custom-table" id="customDataTable">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Espacio 1</th>
                            <th>Espacio 2</th>
                            <th>Espacio 3</th>
                            <th>Espacio 4</th>
                            <th>Espacio 5</th>
                            <th>Espacio 6</th>
                            <th>Espacio 7</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Ocultar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>Diadema 1</td>
                            <td>Diadema 2</td>
                            <td>Diadema 3</td>
                            <td>Diadema 4</td>
                            <td>Diadema 5</td>
                            <td>Diadema 6</td>
                            <td>Diadema 7</td>
                            <td>
                                <button type="button" class="edit-btn">Editar</button>
                            </td>
                            <td>
                              <button type="button" class="delete-btn">Eliminar</button>
                            </td>
                            <td>
                              <button type="button" class="hide-btn">Ocultar</button>
                            </td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    <p class="copyright">
      &copy; 2024 - <span>Savijp</span> Todos los Derechos Reservados.
    </p>
  </main>

  <script src="{{ url('js/dashboard.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="tablas.js"></script>
</body>

</html>
