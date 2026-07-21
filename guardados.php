SELECT productos.*
FROM guardados
INNER JOIN productos
ON guardados.id_producto = productos.id
WHERE guardados.id_usuario = ?