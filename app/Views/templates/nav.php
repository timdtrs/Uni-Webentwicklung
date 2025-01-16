<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <a href="<?= site_url('/') ?>"><img src="<?= base_url('assets/images/WE-Logo.svg') ?>" width="250px"></a>
        </a>
        <div class="collapse navbar-collaps">
            <div class="navbar-nav">
                <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" aria-current="page"
                   href="<?= site_url('/') ?>">Tasks</a>
                <a class=" nav-link <?= (uri_string() == 'boards') ? 'active' : '' ?>" href="#">Boards</a>
                <a class="nav-link <?= (uri_string() == 'spalten') ? 'active' : '' ?>"
                   href="<?= site_url('spalten') ?>">Spalten</a>
            </div>
        </div>
    </div>
</nav>