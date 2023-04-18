<?php
include 'templates/cabecera.php';
?>
<style>
    #about {
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
<section id="about">
  <div class="container">
    <h2>Nuestra historia</h2>
    <p>¡Bienvenidos a 'RMS CLOTHES'! Somos una tienda de ropa deportiva con sede en la Ciudad de México, enfocada en brindar a nuestros clientes productos de alta calidad para ayudarlos a alcanzar sus objetivos deportivos.</p>
    <p>Nuestra historia comienza hace más de 20 años, cuando nuestro fundador, Rodrigo, era un apasionado atleta de alto rendimiento. Rodrigo notó que en México no había tiendas de ropa deportiva que ofrecieran productos de alta calidad a precios accesibles, por lo que decidió crear su propia marca.</p>
    <p>En 2001, Carlos lanzó RMS CLOTHES, una marca de venta y distribucion de ropa deportiva que se centró en brindar a los atletas e individuos mexicanos los mejores productos para mejorar su rendimiento. Desde entonces, hemos trabajado incansablemente para crear productos de alta calidad, utilizando tecnología de punta para garantizar el máximo confort y rendimiento en cada prenda.</p>
    <p>Hoy en día, RMS CLOTHES se ha convertido en una de las marcas líderes de ropa deportiva en México, con una amplia variedad de productos para deportes como running, entrenamiento, yoga, ciclismo y muchos más. Estamos orgullosos de poder ofrecer productos de alta calidad a precios accesibles, y esperamos seguir brindando a nuestros clientes el mejor servicio y productos deportivos durante muchos años más.</p>
  </div>
</section>
<?php
include 'templates/pie.php';
?>