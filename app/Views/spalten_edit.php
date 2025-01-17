<div class="container">
    <div class="card mt-3">
        <div class="card-header ">
            Spalte erstellen, bearbeiten oder löschen
        </div>
        <div class="card-body">
            <form action="<?= site_url('/Spalten/submit_edit/' . $todo) ?>" method="post">
                <input hidden type="text" name="spaltenid" id="task_name" class="form-control"

                       value="<?= isset($spalten[0]['spaltenid']) ? $spalten[0]['spaltenid'] : null ?>">
                <div class="row mb-3 mt-3">
                    <label class="col-sm-2 col-form-label">
                        Spalten Bezeichnung
                    </label>
                    <div class="col-sm-10">
                        <input name="spalte"
                            <?= $todo == '2' ? 'disabled' : '' ?>

                               value="<?= isset($spalten[0]['spalte']) ? $spalten[0]['spalte'] : "" ?>"
                               class="form-control <?= (isset($error['spalte'])) ? 'is-invalid' : '' ?>"
                               placeholder="Bezeichnung der Spalte">
                        <div class="invalid-feedback">
                            <?= (isset($error['spalte'])) ? $error['spalte'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">
                        Spaltenbeschreibung
                    </label>
                    <div class="col-sm-10">
                        <textarea name="spaltenbeschreibung"
                                  class="form-control  <?= (isset($error['spaltenbeschreibung'])) ? 'is-invalid' : '' ?>"
                                   <?= $todo == '2' ? 'disabled' : '' ?>
                                  rows="5"><?= isset($spalten[0]['spaltenbeschreibung']) ? $spalten[0]['spaltenbeschreibung'] : "" ?></textarea>
                        <div class="invalid-feedback">
                            <?= (isset($error['spaltenbeschreibung'])) ? $error['spaltenbeschreibung'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label class="col-sm-2 col-form-label">
                        SortID
                    </label>
                    <div class="col-sm-10">
                        <input name="sortid"
                            <?= $todo == '2' ? 'disabled' : '' ?>
                               value="<?= isset($spalten[0]['sortid']) ? $spalten[0]['sortid'] : "" ?>"
                               class="form-control <?= (isset($error['sortid'])) ? 'is-invalid' : '' ?>"
                               placeholder="SortID eingeben">
                        <div class="invalid-feedback">
                            <?= (isset($error['sortid'])) ? $error['sortid'] : '' ?>
                        </div>
                    </div>
                </div>
                <button <?= $todo == '2' ? 'hidden' : '' ?> type="submit" class="btn btn-success">Speichern</button>
                <button <?= $todo != '2' ? 'hidden' : '' ?> type="submit" class="btn btn-danger">Löschen</button>
                <a href="/spalten" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>

    </div>
</div>