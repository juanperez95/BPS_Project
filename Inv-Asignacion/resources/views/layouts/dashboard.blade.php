<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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
                    <a href="{{ url('productos') }}" data-active="1">
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
                    <span>Productos</span>
                    <span class="show">Compras</span>
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
                <div class="sidebar-footer">
            <a href="#" class="log-out" onclick="logout(event)">
                <i class='bx bx-log-out'></i>
            </a>
        </div>
    </nav>

    <!-- Script para manejar el cierre de sesión -->
    <script>
        function logout(event) {
            if (event) event.preventDefault();
            fetch('{{ route('logout') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    window.location.href = '{{ route('login') }}';
                }
            });
        }

        // Función para detectar inactividad
        let inactivityTime = function () {
            let time;
            window.onload = resetTimer;
            document.onmousemove = resetTimer;
            document.onkeypress = resetTimer;
            document.onscroll = resetTimer;
            document.onclick = resetTimer;
            
            function logoutAfterInactivity() {
                alert("Se ha cerrado la sesión por inactividad.");
                logout(); // Llama a la función de logout
            }
            
            function resetTimer() {
                clearTimeout(time);
                time = setTimeout(logoutAfterInactivity, 180000); // Tiempo en milisegundos (180000 ms = 3 minutos)
            }
        };

        inactivityTime(); // Inicia la función de detección de inactividad
    </script>
</body>
</html>