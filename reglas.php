<?php
include 'templates/cabecera.php';
?>
<style>
    #rules {
  background-color: #f8f8f8;
  padding: 50px 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

h2 {
  font-size: 36px;
  margin-bottom: 30px;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
  text-align: left;
  padding-left: 20px;
  position: relative;
}

p:before {
  content: "\2022";
  position: absolute;
  left: 0;
  top: 7px;
  font-size: 20px;
}

</style>
<section id="rules">
  <div class="container">
    <h2>Reglas de Negocio</h2>
    <ul>
      <p>Todos nuestros productos son de alta calidad y están diseñados para mejorar el rendimiento deportivo de nuestros clientes.</p>
      <p>Ofrecemos una garantía de satisfacción del 100%. Si por alguna razón no estás satisfecho con tu compra, puedes devolverla en un plazo de 30 días para obtener un reembolso completo.</p>
      <p>Aceptamos pagos en efectivo, tarjetas de crédito y débito, así como transferencias electrónicas. No aceptamos cheques personales.</p>
      <p>Para los pedidos en línea, los envíos son gratuitos a todo México en compras superiores a $500 MXN. Los pedidos inferiores a esa cantidad tienen un costo de envío de $50 MXN.</p>
      <p>Para cualquier consulta o reclamo, puedes contactar a nuestro equipo de atención al cliente por teléfono o correo electrónico. Estamos aquí para ayudarte en todo lo que necesites.</p>
    </ul>
  </div>
</section>
<?php
include 'templates/pie.php';
?>