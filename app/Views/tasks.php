<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex flex-row justify-content-between">
                <h3>Tasks</h3>

                <div class="d-flex flex-row gap-4">
                    <div class="d-flex">
                        <div class="col-auto">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" id="sucheboards" name="sucheboards"
                                       placeholder="Suchen">
                                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown">
                            <?= $board[0]['board'] ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <?php foreach ($boards as $board) : ?>
                                <a class="dropdown-item"
                                   href="<?= base_url('tasks/tasks/' . $board['id']) ?>"><?= $board['board'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <a href="<?= site_url('Tasks/crud_edit/0/-1') ?>"">
            <button class="btn btn-primary mb-2" type="button" name="btnNeu" id="btnNeu">
                <i class="fas fa-plus-square"></i> Neu
            </button>
            </a>
            <div class="d-flex flex-row flex-nowrap overflow-auto gap-2">
                <?php foreach ($spalten as $spalte) : ?>
                    <div class="card spalte" style="min-width: 20em">
                        <div class="card-header">
                            <h3 class="card-title h5 mb-1">
                                <?= $spalte['spalte'] ?>
                            </h3>
                            <small class="mb-0 text-muted">
                                <?= $spalte['spaltenbeschreibung'] ?>
                            </small>
                        </div>
                        <div class="card-body">
                            <?php foreach ($spalte['tasks'] as $task) : ?>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="text-primary">
                                                <span
                                                        class="badge rounded-pill text-center <?= $task['taskart'] == 'Bug' ? 'bg-warning' : 'bg-info' ?>"><?= $task['taskart'] ?></span>
                                                <span class="text-center"><?= $task['task'] ?> </span>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm">
                                                    <a href="<?= site_url('Tasks/crud_edit/1/' . $task['id'] . '/' . $spalte['spaltenid']) ?>">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-sm">
                                                    <a href="<?= site_url('Tasks/crud_edit/2/' . $task['id'] . '/' . $spalte['spaltenid']) ?>">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="text-secondary d-flex flex-row justify-content-between">
                                            <div class="w-6">
                                                <?= (isset($task['deadline']) && $task['deadline'] != '') ?
                                                    '<i class="fa-regular fa-calendar fa-fw"></i> ' . date('d.m.y', strtotime($task['deadline'])) : '' ?>
                                            </div>
                                        </div>
                                        <div>
                                            <?= $task['notiz'] ?>
                                        </div>

                                        <div class="d-flex flex-row col-12 mt-auto">
                                            <div class="col-10">

                                            </div>
                                            <div class="badge rounded-pill text-center text-bg-primary fs-7 col-2">
                                                <?= (isset($task['vorname']) && $task['vorname'] != '') ?
                                                    $task['vorname'][0] : '' ?><?= (isset($task['name']) && $task['name'] != '') ?
                                                    $task['name'][0] : '' ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="card-footer">
                            <a href="<?= site_url('Tasks/crud_edit/0/-1/' . $spalte['spaltenid']) ?>"">
                            <button class="btn btn-primary w-100" type="button" name="btnNeu" id="btnNeu">
                                <i class="fas fa-plus-square"></i> Neu
                            </button>
                            </a>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>

</div>

