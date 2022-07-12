<?php
/*
* Archivo header del sitio.
*@package dududu
*@subpackege dududu agencia
*since 1.0
*/ 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font_styles.css">
    <title>404</title>
    <meta name="robots" content="noindex,nofollow" />
</head>
<body class="error_404">
    <!-- La cabecera de las paginas secundarias-->
    <header class="cabecera_estandar">
        <nav  class="menu_estandar">
            <div class="logo_me">
                <a href="index.html">DUDUDU</a>
            </div>
            <div class="pag_sec_me">
                <div class="quienes_somos_me">
                    <a href="about_us.html">QUIENES SOMOS</a>
                </div>
                <div class="servicios_me">
                    <a href="services.html">SERVICIOS</a>
                </div>
                <div class="portafolio_me">
                    <a href="portafolio.html">PORTAFOLIO</a>
                </div>
                <div class="blog_me">
                    <a href="blog.html">BLOG</a>
                </div>
            </div> 
        </nav>
    </header>
    <main class="contenido_p_404">
        <!-- Mensaje de error 404 -->
        <section class="mensaje_error_404">
            <h1>La pagina que bucaba no se encontró (error 404)</h1>
            <h2>Estas pueden ser las razones:</h2>
            <ul>
                <li>La dirección URL o sus contenidos se han eliminado o cambiado de pagina de destino.</li>
                <li>El enlace no se colocó correctamente, el URL se enlazó de forma incorrecta o la dirección que el usuario introdujo en la barra del navegador no concuerda con el URL que estaba buscando.</li>
                <li>El servidor web responsable no está en funcionamiento.</li>
                <li>Quería ver la página 404, si es así felicidades, lo encontró :)</li>
            </ul>
            <p class="solucion_404">En cualquier caso si desea ver otro contenido intente con otra URL.</p>
        </section>
    </main>

    <footer>
        <!-- Contactos y redes sociales en el footer -->
        <aside class="contactanos_redes_footer">
            <div class="contactanos_footer">
                <p>Contactanos directamente:</p><br>
                <p><span>Celular:</span><a href="tel:+51984322484"> 984322484</a></p>
                <p><span>WhatasApp:</span><a href="https://api.whatsapp.com/send?phone=51984322484&text=Hola,%20quisiera%20recibir%20m%C3%A1s%20informaci%C3%B3n%20de:%20"> 984322484</a></p>
                <p><span>Correo:</span><a href="mailto:dududu.desarrollo.web@gmail.com"> dududu.desarrollo.web@gmail.com</a></p>
            </div>
            <div class="redes_footer">
                <p>Siguenos en nuestras redes sociales:</p>
                <div class="redes_fondo">
                    <a href="#"><img src="/assets/icons/contacto/tiktok.svg" alt="tiktok" width="30" height="30"></a>
                </div>
            </div>
        </aside>
        <p>© 2022 Todos los derechos reservados| DUDUDU </p>
    </footer>
</body>
</html>