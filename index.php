<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechProgramation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assets/img/Logotipo-marca-_1_.ico" type="image/x-icon">
</head>

<body>
  <div>
    <header>
      <nav>
        <nav class="navbar navbar--neon navbar-expand-lg bg-body-tertiary fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#home"><img src="assets/img/Logotipo-marca (1).png"
                alt="TechProgramation Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon close-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-2 mb-2 mb-lg-0 display-flex justify-content-end w-100 gap-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#conocimientos">Conocimientos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projectos">Projectos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <main class="container mt-5 pt-5">
      <section id="home" class="hero">
        <div class="hero__grid">
          <div class="hero__content">
            <small class="hero__badge">DEV_CORE</small>
            <h1 class="hero__title">Frontend <span class="hero__highlight">Developer</span></h1>
            <p class="hero__subtitle">Diseñando interfaces futuristas y experiencias inmersivas con detalle y
              detenimiento.</p>
            <div class="hero__actions">
              <a class="btn btn--primary" href="#projectos">Launch</a>
              <a class="btn btn--secondary" href="#conocimientos">Skills</a>
            </div>
          </div>

          <div class="terminal__hero">
            <div class="hero__terminal">
              <div class="terminal__header">
                <span></span><span></span><span></span>
              </div>
              <pre class="terminal__body" aria-label="Terminal output">
&gt; executing sequence...
&gt; loading dependencies: [ok]
&gt; compiling source assets: [ok]
&gt; initializing visual matrix: [ok]

&gt; system ready_</pre>
            </div>
          </div>
        </div>
      </section>

      <section id="conocimientos">
        <div class="conocimientos-obtenidos">
          <h2>Conocimientos</h2>
          <p>A continuación, te presento algunos de mis conocimientos y habilidades:</p>
          <ul>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>HTML/CSS</li>
            <li>Sass</li>
            <li>WordPress/woocommerce</li>
            <li>Git/GitHub</li>
            <li>Diseño UI/UX</li>
            <li>Inteligencia Artificial (básico/intermedio)</li>
          </ul>
        </div>
        <div class="conocimientos-faltantes">
          <h2>Por aprender</h2>
          <p>Y aqui, te presento algunos de los conocimientos que aún me faltan por desarrollar:</p>
          <ul>
            <li>Python</li>
            <li>Java</li>
            <li>C++</li>
            <li>Desarrollo de aplicaciones móviles</li>
            <li>Inteligencia Artificial (intermedio/avanzado)</li>
            <li>Machine Learning</li>
            <li>Desarrollo de juegos</li>
            <li>Seguridad informática</li>
            <li>Base de datos</li>
            <li>React.js</li>
            <li>Angular.js</li>
            <li>Vue.js</li>
            <li>Node.js</li>
          </ul>
        </div>
      </section>

      <section id="projectos">
        <h2>Proyectos</h2>
        <div class="projecto-card">
          <a href="#"><img src="" alt=""></a>
          <h3>Proyecto 1: Hub-Infraestructura tecnologica (colaboracion)</h3>
          <p>plataforma web de alto rendimiento diseñada específicamente para empresas del sector de telecomunicaciones,
            conectividad y energías renovables.</p>
          <p><span>Html</span><span>JavaScript</span><span>PHP</span><span>Scss/Sass</span></p>
          <a href="">upsi error en base de datos</a>
        </div>
        <div class="projecto-card">
          <a href="https://caminoreal.zaragozadinamica.org/repertorio/" target='_blank'><img
              src="assets/img/Captura de pantalla 2026-03-16 214830.png" alt="Proyecto 2"></a>
          <h3>Proyecto 2: Mariachis CaminoReal (Elaboracion del Repertorio)</h3>
          <p>web para la promoción y organización de eventos musicales de mariachis, encargado de crear la pagina del
            repertorio y administrar SEO, Optimizacion, Seguridad y backup de la web.</p>
          <p><span>WordPress</span><span>Astra</span><span>Reservas</span></p>
          <a href="https://caminoreal.zaragozadinamica.org/repertorio/" target='_blank'>Echa un vistazo →</a>
        </div>
        <div class="projecto-card">
          <a href="https://techprogramation.blog/" target='_blank'><img src="assets/img/Captura de pantalla 2026-03-16 215827.png"
              alt="Proyecto 3"></a>
          <h3>Proyecto 3: Rediseño Pasteleria Fantoba (solitario)</h3>
          <p>Rediseño de la interfaz y experiencia del usuario para la plataforma Fantoba.</p>
          <p><span>WordPress</span><span>WooCommerce</span><span>Astra</span></p>
          <a href="https://techprogramation.blog/" target='_blank'>Echa un vistazo →</a>
        </div>
      </section>

      <section id="contacto">
        <h2>Contacto</h2>
        <p>si tienes alguna pregunta ¡contáctame!</p>
        <form id="contactForm" method="POST" action="send-contact.php" novalidate>
          <input type="text" name="name" placeholder="Tu nombre" required>
          <input type="email" name="email" placeholder="Tu correo electrónico" required>
          <textarea name="message" placeholder="Tu mensaje" required></textarea>
          <button type="submit">Enviar</button>
        </form>
        <div id="contactFeedback" role="status" aria-live="polite" style="margin-top:1rem;"></div>
      </section>
    </main>
    <footer class="text-center py-4 mt-5">
      <p>&copy; 2026 TechProgramation. Todos los derechos reservados.</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script> 
    <script src="Email.js"></script>
    </body>  
    </html>