<?php 
   include '../back-end/db-connect.php';
?>

<html>
    <head>
        <title>Lawrence Munyaka-portfolio</title>
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <script src="../back-end/select-ajax-helper.js" defer></script>
        <script src="../back-end/create-project-ajax.js" defer></script>
        <script src="../back-end/read-projects-ajax.js" defer></script>
        <script src="../back-end/delete-project-ajax.js" defer></script>
        <script src="../back-end/update-project-ajax.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js" defer></script>
    </head>
    <body>
        <header class="bg-light">
            <nav class=" container navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-messages.php">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

       
    