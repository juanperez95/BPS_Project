<!-- create.blade.php -->
<div id="createProductosModal" class="modal-unique">
    <div class="modal-content-unique">
        <span class="close-btn-unique">&times;</span>
        <h2>Registrar producto</h2>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <label for="nombre_producto">Nombre del producto:</label>
            <input type="text" id="nombre_producto" name="nombre_producto" required>

            <label for="categoria_producto">Categoria del producto:</label>
            <input type="select" id="categoria_producto" name="categoria_producto">

            <label for="descripcion_producto">Cantidad de productos:</label>
            <input type="text" id="descripcion_producto" name="descripcion_producto">

            <label for="entrega_producto">Fecha de entrega de los productos:</label>
            <input type="date" id="entrega_producto" name="entrega_producto">

            <button type="submit">Crear</button>
        </form>
    </div>
</div>

<!-- Estilos para el modal -->
<style>
    .modal-unique {
        display: none; 
        position: fixed; 
        z-index: 1000; 
        left: 0;
        top: 0;
        width: 100%;
        height: 100%; 
        overflow: auto; 
        background-color: rgba(0,0,0,0.5); 
        padding-top: 60px;
    }

    .modal-content-unique {
        background-color: #fff;
        margin: 5% auto; 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        width: 90%;
        max-width: 500px; 
        animation: fadeIn-unique 0.3s;
    }

    @keyframes fadeIn-unique {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    .close-btn-unique {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close-btn-unique:hover,
    .close-btn-unique:focus {
        color: #000;
        text-decoration: none;
    }

    .modal-unique h2 {
        margin-top: 0;
        font-size: 24px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    .modal-unique label {
        display: block;
        margin: 15px 0 5px;
        font-weight: bold;
    }

    .modal-unique input {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .modal-unique button[type="submit"] {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .modal-unique button[type="submit"]:hover {
        background-color: #218838;
    }
</style>

<!-- Scripts para abrir y cerrar el modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var modal = document.getElementById("createProductosModal");
        var btn = document.querySelector(".create-btn");
        var span = document.getElementsByClassName("close-btn-unique")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
