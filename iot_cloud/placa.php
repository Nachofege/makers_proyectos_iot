<?php
    $serverName ="localhost";
    $userName = 'ignaciofregal';
    include 'passwords.php';
    $dbName = 'ignaciofregal';

    $id=$_GET['id'];

    $conn = new mysqli($serverName, $userName, $password, $dbName);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $board_query="SELECT *FROM ID WHERE id=$id";
    
    $board_result=$conn->query($board_query);

    $data=array();

    if($board_result->num_rows>0){
        
        while($row = $board_result->fetch_assoc()){
            $data=$row;
        }
    }else{
        echo "No existe la placa";
    }
    
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">

            <title>Board saved</title>

            <link rel="stylesheet" href="styles/stylesheet.css">
            <link rel="stylesheet" href="styles/bulma.css">
            <script src='scripts/script.js'></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        </head>
        <body>
            
            <nav class = 'navbar is-primary'><!-- hacemos una nav bar con color turquesa (ver bulma.io) -->
                <div class ='navbar-brand'>
                    <div class="navbar-item">
                    <span class="icon">
                    <i class="fas fa-cloud"></i>
                    </span>  
                    <h2 class = "title is-6">Maker Proyects Iot Cloud</h2>
                    </div>
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
            <div class="container">
                <div class="columns is-centered  is-danger">
                    <div class="column is-half is-narrow  is-danger">
                        <div class="box is-danger">
                            <span><h2 class = "title is-4 has-text-centered is-dark">Datos de la placa</h2></span>
                            <div class="titulo-placa title is-5 has-text-centered">
                                Nombre:
                                <span id="titulo-placa">
                                </span>
                            </div> 
                            <div class="titulo-placa title is-5 has-text-centered">
                                Identificacion unica:
                                <span id="token-placa">
                                </span>
                            </div> 
                        </div>
                    </div>
                </div>      
            </div>
            <script>
                const datosPlaca = <?php echo json_encode($data)?>;
                console.log(datosPlaca);
                document.getElementById('titulo-placa').textContent=datosPlaca.Name;
                document.getElementById('token-placa').textContent=datosPlaca.token;
            </script>
        </body>
    </html>