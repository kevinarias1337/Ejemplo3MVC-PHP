<?php require_once "view/header.php"; ?>
        <h2>Menú productos</h2>
        <br>
        <form name="form1" method="POST" action="./?accion=guardarProductos">
        
        <p>Categoria:
            <select name="selcategorias">
                <option value="">Seleccione...</option>
                <?php foreach($consultaCategorias as $datos): ?>
                <option value="<?php echo $datos['id']; ?>"><?php echo $datos['nombre']; ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>Nombre producto: <input type="text" name="txtnombre"></p>
        <p>Precio: <input type="text" name="txtprecio"></p>

        <p><input type="submit" name="btnguardarproducto" value="Guardar producto"></p>
        </form>
        <br>
        
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>categoria</th>
                        <th>Nombre producto</th>
                        <th>Precio</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($consultaProductos as $dato): ?>
                    <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['categoria']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                        <td><?php echo $dato['precio']; ?></td>
                        <td><a href="./?accion=modificarProductos&id=<?php echo $dato['id']; ?>">Modificar</a></td>
                        <td><a href="./?accion=eliminarProductos&id=<?php echo $dato['id']; ?>">Eliminar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <br>
        <br>
        <br>
        <a href="./">Volver</a>
<?php require_once "view/footer.php"; ?>