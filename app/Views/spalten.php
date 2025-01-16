<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Spalten
        </div>
        <div class="card-body">

            <pre>
                <?php var_dump($spalten); ?>
            </pre>
            <a class="btn btn-primary mb-2" href="<?= site_url('spalten/erstellen') ?>" role="button">
                Erstellen
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
                <?php foreach ($spalten as $spalte): ?>
                    <tr>
                        <td><?= $spalte['id'] ?></td>
                        <td><?= $spalte['board_name'] ?></td>
                        <td><?= $spalte['sortid'] ?></td>
                        <td><?= $spalte['spalte'] ?></td>
                        <td><?= $spalte['beschreibung'] ?></td>
                        <td>
                            <a href="<?= site_url('spalten/bearbeiten/' . $spalte['id']) ?>" class="icon-button">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="<?= site_url('spalten/loeschen/' . $spalte['id']) ?>" class="icon-button">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
