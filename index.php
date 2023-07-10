<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M&M - Tienda de Confitería</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="logo">
                <img src="img/logomm.png" alt="">
            </div>
        </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">M&M</span>
                </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link active">
                        <i class='bx bx-home nav_icon'></i>
                        <span class="nav_name">Inicio</span>
                    </a>
                    <a href="productos.php" class="nav_link">
                        <i class='bx bx-store nav_icon'></i>
                        <span class="nav_name">Productos</span>
                    </a>
                    <a href="contacto.php" class="nav_link">
                        <i class='bx bx-envelope nav_icon'></i>
                        <span class="nav_name">Contacto</span>
                    </a>
                    <a href="login.php" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Login</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-50">

        <h4></h4>
    </div>
    <!--Container Main end-->

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function(event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
    <div id="slider">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="slide-content">
                <img src="img/slide1.jpg" alt="" class="slide-image">
                  <h2>Slide 1</h2>
                  <p>Content for Slide 1</p>
               </div>
            </div>
            <div class="slide slide_2">
               <div class="slide-content">
                  <h2>Slide 2</h2>
                  <p>Content for Slide 2</p>
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                  <h2>Slide 3</h2>
                  <p>Content for Slide 3</p>
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content">
                  <h2>Slide 4</h2>
                  <p>Content for Slide 4</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   
</div>
    <footer id="site-footer">
        <p>&copy; 2023. Todos los derechos reservados.</p>
        <p>Diseñado por <a href="https://www.instagram.com/_nollorenpormiyaestoymuerto" target="_blank">Tamara Cano</a></p>
    </footer>
</body>
</html>