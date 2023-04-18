<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

</br>
<?php
if($_POST){

    $total=0;
    $SID=session_id();

    $Correo=$_POST['email'];
    $Nombre=$_POST['name'];
    $Address=$_POST['address'];
    $Phone=$_POST['phone'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }

    $sentencia=$pdo->prepare(
        "INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`,`Nombre`, `Address`,`Phone`) 
        VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente',:Nombre, :Address, :Phone);");

        $sentencia->bindParam(":ClaveTransaccion",$SID);
        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->bindParam(":Nombre",$Nombre);
        $sentencia->bindParam(":Address",$Address);
        $sentencia->bindParam(":Phone",$Phone);
        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();

    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $sentencia=$pdo->prepare(
        "INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();

    }
    //echo "<h3>".$total."</h3>";//

}
?>

<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'silver',
          layout: 'vertical',
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final¡</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar la cantidad de:
        <h4>$<?php echo number_format($total,2);?></h4>
    </p>
    <p>La factura estar disponible, una vez sea procesado el pago.<br/></p>
    <strong>(Dudas o aclaraciones al correo: MoralesSRodrigo96@outlook.com)</strong>
</div>

<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>


<?php
include 'templates/pie.php';
?>