<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startseite</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/images/WE-Logo.svg') ?>" width="250px">
        </a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="Startseite_Spalten.html">Tasks</a>
                <a class="nav-link" href="#">Boards</a>
                <a class="nav-link" href="#">Spalten</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Tasks
        </div>
        <div class="card-body">
            <span class="test">Test</span>
        </div>
    </div>
</div>
<footer class="footer mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-6 text-white text-start">
                <span class="text-white"> ©Web-Entwicklung 2024</span>
            </div>
            <div class="col-6 text-white text-end">
                <a class="text-white" href="#" target="_blank">Impressum</a> -
                <a class="text-white" href="#" target="_blank">Datenschutz</a> -
                <a class="text-white" href="#" target="_blank">Kontakt</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
