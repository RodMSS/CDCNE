</div>

<br/>
<br/>
<br/>
<style>
  footer {
    background-color: rgba(0, 0, 0, 0.5);;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .footer-section {
    margin: 10px;
    flex: 1;
    min-width: 200px;
  }

  .footer-section h3 {
    font-size: 18px;
  }

  .footer-section ul {
    list-style: none;
    padding: 0;
  }

  .footer-section ul li {
    margin-bottom: 5px;
  }

  .footer-section ul li a {
    color: #fff;
    text-decoration: none;
  }

  .footer-bottom {
    margin-top: 10px;
  }

  .separator {
    height: 2px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.5);
  }
  .footer-section ul li:hover, .footer-section p:hover{
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
  text-decoration: underline;
}
.footer-disclaimer {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}

.footer-disclaimer a {
  margin: 0 20px;
  color: white;
  text-decoration: none;
  font-size: 14px;
}

.footer-disclaimer a:hover {
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
  text-decoration: underline;
}
.social-icons {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-top: 10px;
}

.social-icons a {
  margin-left: 10px;
  color: #fff;
  font-size: 24px;
}
.footer-icons {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-top: 10px;
}

.footer-icons img {
  width: 50px;
  height: 50px;
  margin-left: 25px;
}
.footer-icons img:hover {
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
  text-decoration: underline;
}




</style>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Productos</h3>
      <ul>
        <li><a href="facturacion.php">Faturacion</a></li>
        <li><a href="index.php">Tienda Online</a></li>
        <li><a href="reglas.php">Reglas de Negocio</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Historia</h3>
      <ul>
      <li><a href="historia.php">Nuestra Historia</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Sobre Nosotros</h3>
      <ul>
      <li><a href="aboutus.php"> About us</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Contacto</h3>
      <ul>
        <li>Teléfono: 5566778899</li>
        <li>Email: RMS@outlook.com</li>
        <li>Plutarco Elías Calles11350 Ciudad de México, CDMX
</li>
      </ul>
    </div>

    <div class="separator"></div>
    </div>
    <br/>
    <div class="footer-disclaimer">
    <a href="aviso.php">Aviso de privacidad</a>
    <a href="tyc.php">Términos y condiciones</a>
    </div>
    <br/>
    <div class="separator"></div>
    </div>
    <br/>
    <div class="footer-bottom">
    <ul>
    <li>Derechos de autor &copy; 2023 - RMS&reg;</li>
    </ul>
    <div class="footer-icons">
        <img src="fb.png" alt="Facebook">
        <img src="in.png" alt="Instagram">
        <img src="tw.png" alt="Twitter">
    </a>
    </div>
  </div>
</footer>

</body>
</html>