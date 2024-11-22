<div class="container">
    <div class="card mt-3">
        <div class="card-header ">
            Spalte erstellen
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3 mt-3">
                    <label class="col-sm-2 col-form-label">
                        Spalten Bezeichnung
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Beschreibung der Spalte">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">
                        Spaltenbeschreibung
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label class="col-sm-2 col-form-label">
                        SortID
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="SortID eingeben">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">
                        Board auswählen
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control custom-select-with-icon" id="boardSelect" name="boardSelect">
                            <option value="board1">Allgemeine Todos</option>
                            <option value="board2">Board 2</option>
                            <option value="board3">Board 3</option>
                            <option value="board4">Board 4</option>
                        </select>
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Speichern</button>
                <button type="submit" class="btn btn-secondary">Abbrechen</button>
            </form>
        </div>

    </div>
</div>