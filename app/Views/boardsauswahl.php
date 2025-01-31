<button class="btn btn-primary dropdown-toggle me-2" type="button" id="dropdownBoards" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
    <?php foreach ($boards as $item): ?>
        <?= $item['id'] == $boardsid ? $item['board'] : '' ?>
    <? endforeach ?>
</button>
<div class="dropdown-menu" aria-labelledby="dropdownBoards">
    <?php foreach ($boards as $item): ?>
        <a class="dropdown-item" href="<?= base_url('tasks/tasks/' . $item['id']) ?>"><?= $item['board'] ?></a>
    <? endforeach ?>
</div>

<!-- bei tasks board view, foreach tasksundboards as items
jede spalte bekommt card element
in soalte foreach $item[tasks] -> tasks wieder ausgeben als card element

d-flex auto-overflow flex-nowrap in div

$data['boardsundtasks'] = $this->MainModel->getBoardsundTasks($boardsid);


for ($i = 0; $i < count($data['boardsundtasks']); $i++) {
$data['boardsundtasks'][$i]['tasks'] = json_decode('[' . $data['boardsundtasks'][$i]['tasks'] . ']', true);
} !-->