<nav class="navbar navbar-expand-lg">
    <div class="container-fluid flex-column align-items-start p-0">
        <!-- Logo -->
        <a class="navbar-brand px-3" href="<?= site_url('/') ?>">
            <img src="<?= base_url('assets/images/WE-Logo.svg') ?>" width="250px">
        </a>

        <!-- Trennlinie -->
        <hr class="w-100 border-top border-2 my-2" style="border-color: #ffffff !important;">

        <!-- Navigationslinks mit Icons -->
        <div class="navbar-nav flex-row px-3">
            <a class="nav-link <?= (uri_string() == 'tasks') ? 'active' : '' ?>" aria-current="page"
               href="<?= site_url('/') ?>">
                <i class="bi bi-list-task me-2"></i>
                <span>Tasks</span>
            </a>
            <a class="nav-link <?= (uri_string() == 'boards') ? 'active' : '' ?>"
               href="<?= base_url('boards') ?>">
                <i class="bi bi-columns-gap me-2"></i>
                <span>Boards</span>
            </a>
            <a class="nav-link <?= (uri_string() == 'spalten') ? 'active' : '' ?>"
               href="<?= site_url('spalten') ?>">
                <i class="bi bi-layout-three-columns me-2"></i>
                <span>Spalten</span>
            </a>
        </div>
    </div>
</nav>