<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
<div class="container mt-3 pb-3">
    <div class="card">

        <legend class="card-header">
            <div>
                <h3 class="h3">Boards</h3>
            </div>
        </legend>

        <div class="card-body">
            <div class="d-flex justify-content-between mb-3 mt-2">
                <div class="col-auto">
                    <a href="<?= base_url('boards/create') ?>">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus-square"></i> Neu
                        </button>
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bezeichnung</th>
                        <th>Aktionen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($boards as $board): ?>
                        <tr>
                            <td><?= esc($board['id']) ?></td>
                            <td><?= esc($board['board']) ?></td>
                            <td class="actions">
                                <a href="<?= base_url('boards/edit/' . $board['id']) ?>" title="Bearbeiten"
                                   style="text-decoration: none; color: #007bff;">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="<?= base_url('boards/delete/' . $board['id']) ?>" method="post"
                                      onsubmit="return confirm('Sind Sie sicher, dass Sie dieses Board löschen möchten?');">
                                    <button type="submit"
                                            title="Löschen">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>