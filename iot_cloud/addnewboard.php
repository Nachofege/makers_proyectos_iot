<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src='scripts/script.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    
    <nav class = 'navbar is-primary'><!-- hacemos una nav bar con color turquesa (ver bulma.io) -->
        <div class ='navbar-brand'>
            <span class="icon"><i class="fas fa-cloud"></i></span> 
            <span><h2 class = "navbar-item is-size-6">Maker Proyects Iot Cloud</h2></span>
        
        </div>
        <div class='navbar-end'>
            <div class="navbar-item">
                <a href="" class ="navbar-link">Inicio</a>
            </div>
            <div class = 'navbar-item'> <!--creamos un apartado item y dentro de este item creamos un botón (el botón lleva al repositorio)-->
                <a 
                    href = 'https://github.com/cerradamartos/makerProyectosIot' 
                    class ='button is-dark'
                    target="_blank"
                    >
                        <span class ="icon">
                        <i class="fab fa-github"></i>
                        </span>
                <span>Github</span> 
                </a>
            </div>
        </div>

    </nav>
    <br>
    <br>

   
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half is-narrow">
                <div class="box">
                <form>
                    <h4 class="title is-4 has-text-centered">Cualidades de la placa</h4>
                    <div class="field">
                         <label for="" class="label">Nombre de la placa:</label>
                            <div class="control">
                              <input type = 'text' class="input" placeholder='Nombre'>

                            </div>      
                    </div>
                    <div class="field">
                         <label for="" class="label">Descripción corta:</label>
                            <div class="control">
                              <input type = 'text' class="input" placeholder='¿Qué hace la placa?'>
                            </div>      
                    </div>
                    
                </form>
                </div>    
            </div>
        </div>
    </div>  
</body>
</html>