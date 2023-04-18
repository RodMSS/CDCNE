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
  <h1>Acerca de nosotros</h1>
  <p>Somos una tienda de ropa deportiva enfocada en ofrecer productos de calidad para que nuestros clientes puedan desempeñarse de la mejor manera en sus actividades físicas.</p>

  <h2>Nuestra misión</h2>
  <p>Nuestra misión es ayudar a las personas a lograr sus objetivos deportivos, ofreciéndoles productos de calidad y un excelente servicio al cliente.</p>

  <h2>Nuestra visión</h2>
  <p>Queremos ser la tienda de ropa deportiva más confiable y reconocida en nuestra ciudad, expandiendo nuestro alcance a nivel nacional e internacional.</p>

  <h2>Nuestros valores</h2>
  <ul>
    <p><strong>Calidad:</strong> Nos aseguramos de que todos nuestros productos sean de alta calidad para garantizar la satisfacción de nuestros clientes.</li>
    <p><strong>Servicio al cliente:</strong> Valoramos a nuestros clientes y nos esforzamos por brindarles el mejor servicio posible.</li>
    <p><strong>Innovación:</strong> Nos mantenemos actualizados y en constante evolución para ofrecer productos innovadores y a la vanguardia en el mercado deportivo.</li>
    <p><strong>Sostenibilidad:</strong> Nos preocupamos por el medio ambiente y trabajamos para reducir nuestro impacto ambiental.</li>
  </ul>

  <h2>Nuestro equipo</h2>
  <p>Nuestro equipo está conformado por expertos en la industria deportiva y apasionados por el deporte. Nos esforzamos por mantenernos actualizados en las últimas tendencias y tecnologías para ofrecer los mejores productos a nuestros clientes.</p>
  </div>
</section>
<?php
include 'templates/pie.php';
?>