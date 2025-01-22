<div class="container">
    <div class="card mt-3">
        <div class="card-header" <?= $todo != '0' ? 'hidden' : '' ?>>
            Task erstellen
        </div>
        <div class="card-header" <?= $todo != '1' ? 'hidden' : '' ?>>
            Task bearbeiten
        </div>
        <div class="card-header" <?= $todo != '2' ? 'hidden' : '' ?>>
            Task löschen
        </div>
        <div class="card-body">
            <form action="<?= site_url('/Tasks/submit_edit/' . $todo) ?>" method="post">
                <input hidden type="text" name="id" id="task_name" class="form-control"
                       value="<?= isset($tasks[0]['id']) ? $tasks[0]['id'] : null ?>">
                <div class="row mb-3 mt-3">
                    <label class="col-sm-2 col-form-label">Taskbezeichnung</label>
                    <div class="col-sm-10">
                        <input type="text" name="task_bezeichnung" id="task_name" class="form-control"
                               placeholder="Beschreibung der Spalte"
                            <?= $todo == '2' ? 'disabled' : '' ?>
                               value="<?= isset($tasks[0]['task']) ? $tasks[0]['task'] : "" ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID der Taskart</label>
                    <div class="col-sm-10">
                        <input type="number" name="taskart_id" class="form-control"
                               value="<?= isset($tasks[0]['taskartenid']) ? $tasks[0]['taskartenid'] : "" ?>"
                            <?= $todo == '2' ? 'disabled' : '' ?>
                               placeholder="Taskart ID" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID der Person</label>
                    <div class="col-sm-10">
                        <input type="number" name="personen_id" class="form-control"
                               value="<?= isset($tasks[0]['personenid']) ? $tasks[0]['personenid'] : "" ?>"
                            <?= $todo == '2' ? 'disabled' : '' ?>
                               placeholder="Personen ID" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID der Spalte</label>
                    <div class="col-sm-10">
                        <select name="spalten_id" class="form-control" <?= $todo == '2' ? 'disabled' : '' ?> required>
                            <option value="">Bitte wählen</option>
                            <?php foreach ($spalten as $id): ?>
                                <option value="<?= htmlspecialchars($id) ?>"
                                    <?= isset($tasks[0]['spaltenid']) && $tasks[0]['spaltenid'] == $id ? 'selected' : '' ?>>
                                    <?= $id ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Erinnerungsdatum</label>
                    <div class="col-sm-10">
                        <input type="date" name="erinnerungsdatum"
                               class="form-control" <?= $todo == '2' ? 'disabled' : '' ?>
                               value="<?= isset($tasks[0]['erinnerungsdatum']) ? date('Y-m-d', strtotime($tasks[0]['erinnerungsdatum'])) : '' ?>">

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Notiz</label>
                    <div class="col-sm-10">
                        <textarea name="notiz" class="form-control"

                                  <?= $todo == '2' ? 'disabled' : '' ?>
                                  placeholder="Notiz"><?= isset($tasks[0]['notiz']) ? $tasks[0]['notiz'] : "" ?></textarea>
                    </div>
                </div>

                <button <?= $todo == '2' ? 'hidden' : '' ?> type="submit" class="btn btn-success">Speichern</button>
                <button <?= $todo != '2' ? 'hidden' : '' ?> type="submit" class="btn btn-danger">Löschen</button>
                <a href="/" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </div>
</div>
