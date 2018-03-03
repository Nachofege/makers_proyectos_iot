<!DOCTYPE html>
<html>
<head>
    <title>Add new board</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src="scripts/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
    <body>
        <nav class="navbar is-success">
            <div class="navbar-brand"> 
                <a class="navbar-item title is-6">
            <span class="icon">
                <i class="fas fa-cloud"></i>
            </span>
            TechCloud
            </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <a href="index.php" class="navbar-link">Inicio</a>
                </div> 
                <div class="navbar-item">
                <a 
                    href="https://github.com/Nachofege/makers_proyectos_iot" 
                    class="navbar-item button is-dark"
                    target="_blank">
                    <span class="icon">
                        <i class="fab fa-github-alt"></i>
                    </span>
                    
                    <span> GitHub </span>
                </a>
                </div>
            </div>                
        </nav>
        <br></br>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half is-narrow">
                    <div class="box">
                        <h4 class="title is-4 has-text-centered">Información de la nueva placa</h4>
                        <form>
                            <div class="field">
                                <label for="" class="label">Nombre de la placa:</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Descripción corta:</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="¿Qué hace la placa?">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Tipo de placa</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="¿Qué tipo de información te da la placa?">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>