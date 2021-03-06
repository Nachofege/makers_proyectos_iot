<?php
 $serverName ="localhost";
 $userName = 'ignaciofregal';
 include 'passwords.php';
 $dbName = 'ignaciofregal';


 $name = $_GET['name'];
 $description = $_GET['description'];
 $sensor1 = $_GET['sensor1']; 
 $sensor2 = $_GET['sensor2'];
 $noSensors = $_GET['noSensor'];
 $token = bin2hex(random_bytes(10));

//Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Checks connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->Connect_error);
}

 $sql = "INSERT INTO ID (name, description, sensor1, sensor2, noSensor, token) 
 VALUES ('$name', '$description', '$sensor1', '$sensor2', '$noSensors','$token')";
  
  //Te dice que la conexión se ha creado
  if ($conn->query($sql) === TRUE){
    echo "New record created succesfully";
  }else{
    echo "Error: " . $sql  . "<br>" . $conn->error;
  }
  $conn->close();
?>

<!DOCTYPE html>
<html lang="es">
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
                <a href="index.php" class ="navbar-link">Inicio</a>
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
<br><br>
<div class="container ">
        <div class="columns is-centered  is-danger">
            <div class="column is-half is-narrow  is-danger">
                <div class="box is-danger">
                <span class = 'icon'>
                    <i class="fas fa-check"></i>
                </span>
                <span><h2 class = "title is-4 has-text-centered is-dark">New record created succesfully</h2></span>
                <div>El token unico de la placa es:</div>    
                <div class="field has-addons">
                    <div class="control">
                        <input id="token" class="input" type="text" readonly>
                    </div>
                    <div class="control">
                        <a class="button" id="copy-token">
                            <span class="icon">
                                <i class="far fa-clone"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const token='<?php echo $token?>';
        document.getElementById('token').value=token;
        document.getElementById('copy-token').addEventListener('click',function(){
            var copyText = document.getElementById('token');
            copyText.select();
            document.execCommand("Copy");
        })
    </script>
</body>
</html>