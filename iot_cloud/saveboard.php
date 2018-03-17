<?php  
$serverName = "localhost";
$userName = "ignaciofregal";
include 'password.php';
$dbName ="ignaciofregal";

$name = $_GET['name'];
$desc = $_GET['desc'];
$sensor1 = $_GET['sensor1'];
$sensor2 = $_GET ['sensor2'];
$noSensor = $_GET ['nosensor'];


// Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql  ="INSERT INTO ignaciofregal ( Name, Description, Sensor1, Sensor2, NoSensor) VALUES ('$name', '$desc', '$sensor1', '$sensor2', '$noSensor')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src='scripts/script.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Board saved</title>
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


</body>
</html>