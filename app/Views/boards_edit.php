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