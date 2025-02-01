<div class="container mt-4 pb-3">
    <div class="card">
        <legend class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <div>
                    <span class="h3">Neues Board anlegen</span>
                </div>
            </div>
        </legend>
        <div class="card-body">
            <form action="<?= base_url('boards/submit') ?>" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Bezeichnung des Boards</label>
                    <input type="text" class="form-control" id="board" name="board" required>
                </div>
                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="<?= base_url('boards') ?>" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </div>
</div>