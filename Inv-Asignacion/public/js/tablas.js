// script.js
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("customSearchInput");
    const table = document.getElementById("customDataTable").getElementsByTagName("tbody")[0];

    // Función de búsqueda
    searchInput.addEventListener("keyup", function() {
        const filter = searchInput.value.toLowerCase();
        const rows = table.getElementsByTagName("tr");
        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName("td");
            let found = false;
            for (let j = 0; j < cells.length - 1; j++) {
                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            rows[i].style.display = found ? "" : "none";
        }
    });

    // Función para cargar datos desde la base de datos
    function loadData() {
        // Ejemplo de datos, reemplazar con llamada AJAX a la base de datos
        const data = [
            ["Producto 1", "A", "B", "C", "D", "E", "F", "G"],
            ["Producto 2", "H", "I", "J", "K", "L", "M", "N"]
        ];

        data.forEach(row => {
            const tr = document.createElement("tr");
            row.forEach(cell => {
                const td = document.createElement("td");
                td.textContent = cell;
                tr.appendChild(td);
            });

            // Añadir columna de funciones
            const funcTd = document.createElement("td");
            funcTd.innerHTML = `
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
                <button class="hide-btn">Ocultar</button>
            `;
            tr.appendChild(funcTd);
            table.appendChild(tr);
        });

        // Añadir eventos a los botones de funciones
        document.querySelectorAll(".edit-btn").forEach(btn => {
            btn.addEventListener("click", editRow);
        });
        document.querySelectorAll(".delete-btn").forEach(btn => {
            btn.addEventListener("click", deleteRow);
        });
        document.querySelectorAll(".hide-btn").forEach(btn => {
            btn.addEventListener("click", hideRow);
        });
    }

    function editRow(event) {
        const row = event.target.parentElement.parentElement;
        alert("Editar fila: " + row.rowIndex);
        // Añadir lógica de edición aquí
    }

    function deleteRow(event) {
        const row = event.target.parentElement.parentElement;
        row.remove();
    }

    function hideRow(event) {
        const row = event.target.parentElement.parentElement;
        row.style.display = "none";
    }

    function createNewAssignment() {
        const newRow = document.createElement("tr");
        const columns = ['Producto', 'Espacio 1', 'Espacio 2', 'Espacio 3', 'Espacio 4', 'Espacio 5', 'Espacio 6', 'Espacio 7'];
        columns.forEach(column => {
            const newCell = document.createElement("td");
            newCell.textContent = column + ' nuevo';
            newRow.appendChild(newCell);
        });

        const funcTd = document.createElement("td");
        funcTd.innerHTML = `
            <button class="edit-btn">Editar</button>
            <button class="delete-btn">Eliminar</button>
            <button class="hide-btn">Ocultar</button>
        `;
        newRow.appendChild(funcTd);
        table.appendChild(newRow);

        // Añadir eventos a los botones de funciones de la nueva fila
        funcTd.querySelector(".edit-btn").addEventListener("click", editRow);
        funcTd.querySelector(".delete-btn").addEventListener("click", deleteRow);
        funcTd.querySelector(".hide-btn").addEventListener("click", hideRow);
    }

    document.querySelector(".create-btn").addEventListener("click", createNewAssignment);

    loadData();
});
