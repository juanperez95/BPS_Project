<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Inv-Asignacion</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('css/tablas.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
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
                    <a href="{{ url('asignaciones') }}" data-active="0">
                        <div class="icon">
                            <i class='bx bx-speaker'></i>
                            <i class='bx bxs-speaker'></i>
                        </div>
                        <span class="link hide">Asignaciones</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="{{ url('productos') }}" class="active" data-active="1">
                        <div class="icon">
                            <i class='bx bx-purchase-tag'></i>
                            <i class='bx bxs-purchase-tag'></i>
                        </div>
                        <span class="link hide">Productos</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="{{ url('compras') }}" data-active="2">
                        <div class="icon">
                            <i class='bx bx-basket'></i>
                            <i class='bx bxs-basket'></i>
                        </div>
                        <span class="link hide">Compras</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="{{ url('proveedores') }}" data-active="3">
                        <div class="icon">
                            <i class='bx bx-fridge'></i>
                            <i class='bx bxs-fridge'></i>
                        </div>
                        <span class="link hide">Proveedores</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span>Asignaciones</span>
                    <span class="show">Productos</span>
                    <span>Compras</span>
                    <span>Proveedores</span>
                </div>
            </ul>

            <h4 class="hide">Atajos</h4>

            <ul>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" data-active="4">
                        <div class="icon">
                            <i class='bx bx-notepad'></i>
                            <i class='bx bxs-notepad'></i>
                        </div>
                        <span class="link hide">Tareas</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="5">
                        <div class="icon">
                            <i class='bx bx-help-circle'></i>
                            <i class='bx bxs-help-circle'></i>
                        </div>
                        <span class="link hide">Ayuda</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="6">
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
        <h1>Productos</h1>
        <p class="text">
            La gestión de productos es un proceso fundamental en cualquier empresa, ya que permite controlar la entrada, procesamiento y salida de productos, así como generar informes y realizar análisis de tendencias y desempeño.
        </p>
        
        <div class="container mt-5">
            <h2 class="mb-4">Productos en stock:</h2>
            <input type="text" id="customSearchInput" class="search-input" placeholder="Buscar en la tabla...">
            <button type="button" class="create-btn">Crear nuevo producto</button>
            <div class="table-responsive">
                <table class="custom-table" id="customDataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CATEGORIA</th>
                            <th>DESCRIPCION</th>
                            <th>STOCK</th>
                            <th>ENTREGA</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                            <th>OCULTAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id_producto }}</td>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->categoria_producto }}</td>
                            <td>{{ $producto->descripcion_producto }}</td>
                            <td>{{ $producto->stock_producto }}</td>
                            <td>{{ $producto->entrega_producto }}</td>
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <p class="copyright">
            &copy; 2024 - <span>Savijp</span> Todos los Derechos Reservados.
        </p>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="{{ url('js/dashboard.js') }}"></script>
    <script src="tablas.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("customSearchInput");
            const table = $('#customDataTable').DataTable({
                "paging": true,
                "info": true,
                "searching": true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                    "infoFiltered": "(filtrado de _MAX_ entradas en total)",
                    "search": "Buscaste:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });

            // Función de búsqueda personalizada
            searchInput.addEventListener("keyup", function() {
                table.search(searchInput.value).draw();
            });

            // Función para cargar datos desde la base de datos
            function loadData() {
                // Datos de ejemplo, reemplaza con una llamada AJAX para obtener datos de la base de datos
                const data = [
                    
                ];

                data.forEach(row => {
                    table.row.add(row).draw();
                });
            }

            // Funciones de edición, eliminación y ocultación
            $('#customDataTable tbody').on('click', '.edit-btn', function () {
                const row = table.row($(this).parents('tr'));
                alert("Editar fila: " + row.index());
                // Lógica de edición aquí
            });

            $('#customDataTable tbody').on('click', '.delete-btn', function () {
                table.row($(this).parents('tr')).remove().draw();
            });

            $('#customDataTable tbody').on('click', '.hide-btn', function () {
                $(this).parents('tr').hide();
            });

            function createNewAssignment() {
                const newRow = ["Producto nuevo", "Fecha nueva", "Solicitante nuevo", "Operación nueva", "Cantidad nueva", "Caso nuevo", "Serial nuevo"];
                const rowNode = table.row.add(newRow).draw().node();

                $(rowNode).find('td').eq(7).html('<button class="edit-btn">Editar</button>');
                $(rowNode).find('td').eq(8).html('<button class="delete-btn">Eliminar</button>');
                $(rowNode).find('td').eq(9).html('<button class="hide-btn">Ocultar</button>');
            }

            document.querySelector(".create-btn").addEventListener("click", createNewAssignment);

            loadData();
        });
    </script>
</body>

</html>
