<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La Sindone de Turin</title>
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <link href="../public/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        //iniciar base de datos
        include ('../app/config/config.php');
        include ('../app/config/conexion.php');
        //echo $URL;

        session_start();
        if (isset($_SESSION['sesion_email'])) {
            //echo "Existe una sesion y ha pasado por el login";
        } else {
            //echo 'No existe sesion y no ha pasado por el login';
            header('Location: ' . $URL . '/index.php');
        }
        $email_sesion = $_SESSION['sesion_email'];
        $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$email_sesion' AND estado = '1' ");
        $query_usuario->execute();

        $sesion_usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
        foreach ($sesion_usuarios as $sesion_usuario) {
            $sesion_nombres = $sesion_usuario['nombres'];
        }
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">La Sindone de Turin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Foro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Tienda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../login/controller_cerrar_sesion.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Bienvenido</h1> <?php echo $sesion_nombres ?>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="../public/images/cara-tela.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Enero 1, 2023</div>
                            <h2 class="card-title">Historia</h2>
                            <p class="card-text">La Sindone de Turin es un lienzo de lino de aproximadamente 4.41 mts. de largo y 1.13 mts de ancho. En la tela se puede apreciar la figura de un hombre desnudo, con manchas de sangre en todo el cuerpo. Otra cosa notable son marcas simétricas y paralelas que se encuentran a los lados de la figura central, son quemaduras que fueron consecuencia de un incendio en 1532 en Chambery, Francia</p>
                            <a class="btn btn-primary" href="#!">Leer más →</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="../public/images/primera_foto.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Enero 1, 2023</div>
                                    <h2 class="card-title h4">Analisis Cientifico</h2>
                                    <p class="card-text">Este lienzo es el artefacto mas estudiados en la historia, aunque la ciencia pudo analizarla de cerca desde hace mas de 100 años</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="../public/images/hombre/deformacionesCaidas.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2023</div>
                                    <h2 class="card-title h4">Autopsia</h2>
                                    <p class="card-text">Han habido varios especialistas en medicina forense que se han encargado de analizar desde un punto de vista forense la figura del Hombre de la Sindone.</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="../public/images/hombre/sudario-de-oviedo-foto2.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Enero 1, 2023</div>
                                    <h2 class="card-title h4">Entierro</h2>
                                    <p class="card-text">En el primer plano la cabeza estaba inclinada hacia la derecha y recargada sobre el hombro derecho. Al intentar envolverle la cabeza notan que el brazo les impide rodear por completo el lienzo, por lo que hacen un doblez en la tela, generando dos manchas simetricas en el sudario.</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="../public/images/hombre/eucaristia.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Enero 1, 2023</div>
                                    <h2 class="card-title h4">Otras reliquias</h2>
                                    <p class="card-text">La Sindone de Turin tiene relacion con otras reliquias del cristianismo, que pudieron pertenecer a Jesucristo.</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">←</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">→</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Buscar un articulo</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Escriba su busqueda" aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Buscar!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; AreCodes 2023</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>