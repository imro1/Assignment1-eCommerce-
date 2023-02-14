<?php $this->view('shared/header','View Message'); ?>

<div class="main">
    <h1>Message History</h1>

    <?php foreach ($data as $item): ?>
        <p>
            <b><?= htmlentities($item->email) ?></b><br>
            <?= htmlentities($item->message) ?><br>
        </p>
    <?php endforeach; ?>
</div>
<?php $this->view('shared/footer'); ?>
