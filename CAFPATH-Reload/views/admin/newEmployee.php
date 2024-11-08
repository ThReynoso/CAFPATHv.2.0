<body class="new-employee-body">
    <div class="new-employee-container">
        <h1 class="title">Registrar Empleado</h1>
        <form class="new-employee-form" action="../../app/Controllers/newEmployees.php" method="POST">
            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="lastname">Apellido:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="input-group">
                <label for="surname">Segundo Apellido:</label>
                <input type="text" id="surname" name="surname">
            </div>
            <div class="input-group">
                <label for="role">Rol:</label>
                <select id="role" name="role" required>
                    <option value="R001">Supervisor</option>
                    <option value="R002">Operador</option>
                    <option value="R003">Transportista</option>
                </select>
            </div>
            <div class="input-group">
                <label for="warehouse_code">Almacén:</label>
                <select id="warehouse_code" name="warehouse_code" required>
                    <?php
                    include '../../config/connection.php';

                    $sql = "SELECT code, name FROM Warehouse";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['code'] . "'>" . $row['name'] . "</option>";
                        }
                    } else {
                        echo "<option value='WH001'>Almacén Principal (WH001)</option>";
                        echo "<option value='WH002'>Almacén Materia Prima (WH002)</option>";
                        echo "<option value='WH003'>Almacén Producto Terminado (WH003)</option>";
                        echo "<option value='WH004'>Almacén Refacciones (WH004)</option>";
                        echo "<option value='WH005'>Almacén Empaque (WH005)</option>";
                    }

                    $conn->close(); 
                    ?>
                </select>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>