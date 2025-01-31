<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
<div class="container mt-4 pb-3">
    <div class="card">
        <!-- Kopfbereich der Karte -->
        <legend class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <div>
                    <span class="h3">Boards</span>
                </div>
                <div class="d-flex">
                    <!-- Optional: Hier können Sie eine Boardauswahl einfügen -->
                    <?php // require(APPPATH . 'Views/tasks/boardauswahl.php'); ?>
                </div>
            </div>
        </legend>
        <!-- Hauptinhalt der Karte -->
        <div class="card-body">
            <!-- Such- und Button-Bereich -->
            <div class="d-flex justify-content-between mb-3 mt-2">
                <div class="col-auto">
                    <a href="<?= base_url('boards/create') ?>"> <!-- Korrigierte URL -->
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus-square"></i> Neu
                        </button>
                    </a>
                </div>

                <div class="d-flex">
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" id="sucheboards" name="sucheboards"
                                   placeholder="Suchen">
                            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabelle der Boards -->
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
                                <!-- Bearbeiten-Icon mit Link zum Bearbeiten-Formular -->
                                <a href="<?= base_url('boards/edit/' . $board['id']) ?>" title="Bearbeiten"
                                   style="text-decoration: none; color: #007bff;">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Löschen-Icon mit Formular -->
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