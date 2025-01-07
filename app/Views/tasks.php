<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Tasks
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" href="<?= site_url('Tasks/crud_edit/0') ?>" role="button">
                Neu
            </a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Bezeichnung</th>
                    <th>Erinnerungsdatum</th>
                    <th>Notiz</th>
                    <th>Bearbeiten</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task) : ?>
                    <tr>
                        <td>
                            <?= $task['task'] ?>
                        </td>
                        <td>
                            <?= $task['erinnerungsdatum'] ?>
                        </td>
                        <td>
                            <?= $task['notiz'] ?>
                        </td>
                        <td>
                            <button class="btn">
                                <a href="<?= site_url('Tasks/crud_edit/1/' . $task['id']) ?>">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button class="btn">
                                <a href="<?= site_url('Tasks/crud_edit/2/' . $task['id']) ?>">
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

