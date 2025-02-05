<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h3>Spalten</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" href="<?= site_url('Spalten/crud_edit/0') ?>" role="button">
                Neu
            </a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Board</th>
                    <th>Sortid</th>
                    <th>Spalte</th>
                    <th>Spaltenbeschreibung</th>
                    <th>Bearbeiten</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($spalten as $spalte) : ?>
                    <tr>
                        <td>
                            <?= $spalte['spaltenid'] ?>
                        </td>
                        <td>
                            <?= $spalte['board'] ?>
                        </td>
                        <td>
                            <?= $spalte['sortid'] ?>
                        </td>
                        <td>
                            <?= $spalte['spalte'] ?>
                        </td>
                        <td>
                            <?= $spalte['spaltenbeschreibung'] ?>
                        </td>
                        <td>
                            <button class="btn">
                                <a href="<?= site_url('Spalten/crud_edit/1/' . $spalte['spaltenid']) ?>">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button class="btn">
                                <a href="<?= site_url('Spalten/crud_edit/2/' . $spalte['spaltenid']) ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>