<div class="container mt-4 pb-3">
    <div class="card">
        <legend class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <div>
                    <span class="h3">Board bearbeiten</span>
                </div>
            </div>
        </legend>
        <div class="card-body">
            <!-- Fehlermeldungen anzeigen -->
            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Erfolgsmeldung anzeigen -->
            <?php if (session()->has('success')): ?>
                <div class="alert alert-success">
                    <?= session('success') ?>
                </div>
            <?php endif; ?>

            <!-- Formular -->
            <form action="<?= base_url('boards/update/' . $board['id']) ?>" method="post">
                <div class="mb-3">
                    <label for="board" class="form-label">Bezeichnung des Boards</label>
                    <input type="text" class="form-control" id="board" name="board" value="<?= esc($board['board']) ?>"
                           required>
                </div>
                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="<?= base_url('boards') ?>" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </div>
</div>