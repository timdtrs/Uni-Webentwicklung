<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Personen
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-Mail</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($personen as $person) : ?>
                    <tr>
                        <td>
                            <?= $person['id'] ?>
                        </td>
                        <td>
                            <?= $person['vorname'] ?>
                        </td>
                        <td>
                            <?= $person['name'] ?>
                        </td>
                        <td>
                            <?= $person['email'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>