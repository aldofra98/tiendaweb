<?php
    include 'global/config.php';
    include 'carrito.php';
    include 'templates/cabecera.php' 
?>
<br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])){ // Si tiene algo el Carro

    ?>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width=40%>Descripcion</th>
                <th width=15% class="text-center">Cantidad</th>
                <th width=20% class="text-center">Precio</th>
                <th width=20% class="text-center">Total</th>
                <th width=5% class="text-center">--</th>
            </tr>
            <?php $total=0; ?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
            <tr>
                <td width=40% ><?php echo $producto['NOMBRE']?></td>
                <td width=15% class="text-center"><?php echo $producto['CANTIDAD']?></td>
                <td width=20% class="text-center"><?php echo $producto['PRECIO']?></td>
                <td  width=20% class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
                <td width=5%> 
                    
                <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ;?>">
                <button class="btn btn-primary" name="btnAccion" value="Eliminar" type="submit" type="button">Eliminar</button></td>
                </form>
            </tr>
            <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
            <?php } ?> 
            <tr>
            <td colspan="3" aling="right"><h3>Total</h3></td>
            <td aling="right"><h3><?php echo number_format($total,2);?></h3></td>
            <td></td>
            </tr>
                
            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="aler alert-success">
                        <div class="form-group">
                       <label for="my-input">Correo de Contacto</label>
                       <input id="email" class="form-control" type="email" name="email"
                       placeholder="Por favor escribe tu correo"
                       required>
                   </div> 
                   <small id="emailhelp"
                   class="form-text text-muted">
                       los productos se enviaran a este correo.
            </small>
            </div>
                       <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder"
                       name="btnAccion">
                           proceder a pagar >> </button>
                    </form>

                   
            </td>
            </tr>


        </tbody>
    </table>   
<?php }else{ ?>
    <div class="alert alert-success">
    No hay Productos
    </div>
<?php } ?> 
<?php    include 'templates/pie.php'; ?>
