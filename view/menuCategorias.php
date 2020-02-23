<?php require_once "view/header.php"; ?>
        <h2>Menú categorias</h2>
        <br>
        <form name="form1" method="POST" action="./?accion=guardarCategorias">
        <p>Nombre categoria: <input type="text" name="txtnombre"></p>
        <p><input type="submit" name="btnguardarcategoria" value="Guardar categoria"></p>
        </form>
        <br>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $dato): ?>
                <tr>
                    <td><?php echo $dato['id']; ?></td>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><a href="./?accion=modificarCategorias&id=<?php echo $dato['id']; ?>">Modificar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <a href="./">Volver</a>
<?php require_once "view/footer.php"; ?>