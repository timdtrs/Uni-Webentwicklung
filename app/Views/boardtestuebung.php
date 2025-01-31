<div class="container mt-4 pb-3">
    <div class="card">
        <legend class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <div>
                    <span class="h3">Tasks</span>
                </div>
                <div class="d-flex">
                    <? if (1 == 1) : ?>
                        <?php require(APPPATH . 'Views/tasks/boardauswahl.php'); ?>
                    <? endif; ?>
                </div>
            </div>
        </legend>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3 mt-2">
                <div class="col-auto">
                    <a href="<?= base_url('tasks/task') ?>">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i> Neu</button>
                    </a>
                </div>

                <div class="d-flex">
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" id="suchetasks" name="suchetasks"
                                   placeholder="Suchen">
                            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>

                    </div>
                </div>
            </div>
            <? $taskssortid = 100 ?>
            <div class="d-flex flex-row flex-nowrap overflow-auto">
                <? foreach ($boardsundtasks as $item) : ?>
                    <div class="me-3">
                        <div class="card mb-3" style="width: 20em">
                            <div class="card-header bg-light">
                                <h3 class="card-title h5 mb-1">
                                    <?= $item['spalte'] ?>
                                </h3>
                                <small class="mb-0 text-muted">
                                    <?= $item['spaltenbeschreibung'] ?>
                                </small>
                            </div>
                            <div class="card-body">
                                <div class="spalte dragula-container" id="spalte<?= $item['spaltenid'] ?>"
                                     spaltenid="<?= $item['spaltenid'] ?>">
                                    <? $anzahlsubitems = 0 ?>

                                    <? if (!empty($item['tasks'])): ?>

                                        <? foreach ($item['tasks'] as $task) : ?>
                                            <? if ($task['tasksid'] != NULL) : ?>
                                                <? $taskssortid = $task['taskssortid'] ?>
                                                <? $anzahlsubitems += 1 ?>
                                                <div id="task<?= $task['tasksid'] ?>" tasksid="<?= $task['tasksid'] ?>"
                                                     sortid="<?= $task['taskssortid'] ?>"
                                                     class="card mb-3 cursor-grab task<?= $item['spaltenid'] ?> taskkarte"
                                                     suchtext="<?= $task['suchtext'] ?>">
                                                    <div id="<?= $task['tasksid'] ?>" class="card-body">
                                                        <!-- Titel -->
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <a href="<?= base_url('tasks/task/' . $task['tasksid'] . '/1') ?>">
                                                                <?= '<i class="' . $task['taskartenicon'] . ' fa-fw" title="' . $task['taskart'] . '"></i>' . ' ' . $task['task'] ?>
                                                            </a>
                                                            <?php require('boardmenu.php'); ?>
                                                        </div>

                                                        <!-- Kontakt und Erinnerungsdatum -->
                                                        <div class="mb-1 d-flex justify-content-between">
                                                            <div class="text-secondary">
                                                                <?= (isset($task['taskkontaktdatum']) && $task['taskkontaktdatum'] != '') ?
                                                                    '<i class="fa-regular fa-calendar fa-fw"></i> ' . date('d.m.y', strtotime($task['taskkontaktdatum'])) : '' ?>
                                                            </div>
                                                            <? if (isset($task['taskerinnerungsdatum']) && $task['taskerinnerungsdatum'] != '' && $task['taskerinnerung']) : ?>
                                                                <div class="text-secondary">
                                                                    <?= '<i class="fa-regular fa-bell fa-fw' . (date('y-m-d', strtotime($task['taskerinnerungsdatum'])) <= date('y-m-d') ? ' text-danger ' : '') . '"></i> ' . date('d.m.y H:i', strtotime($task['taskerinnerungsdatum'])) ?>
                                                                </div>
                                                            <? endif; ?>
                                                        </div>
                                                        <!-- Dokumentenart, Mitarbeiter, etc -->
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                            </div>
                                                            <span class="rounded-circle text-xs personenkuerzel"
                                                                  title=" <?= $task['person'] ?>"
                                                                  style="color: <?= $task['vordergrundfarbe'] . ';' ?> background: <?= $task['hintergrundfarbe'] . ';' ?>">
                                                            <?= $task['personenkuerzel'] ?>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <? endif; ?>
                                        <? endforeach; ?>
                                    <? endif; ?>
                                    <div class="pt-3" id="taskend" sortid="<?= $taskssortid + 100 ?>"></div>
                                </div>
                                <a href="<?= base_url('tasks/task/0/0/' . $item['spaltenid'] . '/') ?>">
                                    <button class="btn btn-primary w-100" type="button" name="btnNeu" id="btnNeu">
                                        <i class="fas fa-plus-square"></i> Neu
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
