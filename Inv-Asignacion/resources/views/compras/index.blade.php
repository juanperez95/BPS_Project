<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras | Inv-Asignacion</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('css/tablas.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>

<body>
    @include('layouts.dashboard')

    <main>
        <h1>Compras</h1>
        <p class="text">
        La gestión de compras es una herramient esencial para mantener el control sobre los productos que se adquieren en la empresa, ya que permite registrar cada una de las compras realizadas, y así tener un seguimiento de los productos que se encuentran en inventario. De esta manera, se pueden realizar informes sobre las compras realizadas, como por ejemplo, el valor total de las compras, los productos más comprados, entre otros.
        </p>
        
        <div class="container mt-5">
            <h2 class="mb-4">Compras realizadas:</h2>
            <input type="text" id="customSearchInput" class="search-input" placeholder="Buscar en la tabla...">
            <button type="button" class="create-btn">Registrar compra</button>
            <button type="button" class="show-btn">Ver elementos ocultos</button>
            <div class="table-responsive">
                <table class="custom-table" id="customDataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FECHA</th>
                            <th>ORDEN NUMERO:</th>
                            <th>CANTIDAD</th>
                            <th>PROVEEDOR</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                            <th>OCULTAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)
                        <tr>
                            <td>{{ $compra->id_compra }}</td>
                            <td>{{ $compra->fecha_compra }}</td>
                            <td>{{ $compra->orden_compra}}</td>
                            <td>{{ $compra->cantidad_compra }}</td>
                            <td>{{ $compra->proveedor_id }}</td>
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

    @include('compras.create')

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

            document.querySelector(".create-btn").addEventListener("click", function() {
                const modal = document.getElementById("createComprasModal");
                modal.style.display = "block";
            });

            loadData();
        });
    </script>
</body>

</html>
