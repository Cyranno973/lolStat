<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-icons-iconfont@5.0.1/dist/material-design-icons.min.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>



    <script src="js/jquery.js"></script>
    <script src="plugin/tinymce/tinymce.min"></script>
    <script src="plugin/tinymce/init-tinymce"></script>
    <link rel='stylesheet' href='css/style.css'>
    <title><?= $title ?></title>
</head>

<body>



<div id="wrapper">
    <div class="overlay"> <!--<svg class="curve2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,240C480,224,600,160,720,122.7C840,85,960,75,1080,106.7C1200,139,1320,213,1380,250.7L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>--></div>
    <!--


         <!-- Sidebar -->


    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav ">
            <?php
            if (isset($_SESSION['membre'])) {
                ?>
                <li><a><?= $_SESSION['membre'] ?></a></li>

                <?php if ($_SESSION['powerUser'] == 1) { ?>
                    <li><a href="index.php?action=showChapters" class='active'>Home</a></li>
                    <li><a href="index.php?action=listMembres">Gestion des Membres</a></li>
                    <li><a href="index.php?action=listChapters">Gestion des Chapitres</a></li>
                    <li><a href="index.php?action=listComments">Gestion des Commentaires</a></li>
                    <li><a href="index.php?action=listAlerts">Gestion des Alerts</a></li>
                <?php } ?>
                <li><a href="view/deconnexion.php">DECONNEXION</a></li>
            <?php } else { ?>


                <li><a href="index.php?action=showChapters" class='active'>Home</a></li>
                <li> <a href="index.php?action=inscription">Inscription</a></li>
                <li><a href="index.php?action=connexion">Connexion</a></li>

            <?php } ?>


    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <div class="">

                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->






<script src='js/main.js'></script>
</body>

</html>
