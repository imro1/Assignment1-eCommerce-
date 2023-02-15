<?php $this->view('shared/header','View Message'); ?>

<div class="main">
    <h1>Message History</h1>

    <table style = "margin-left: auto;
  margin-right: auto;">
        <tr>
            <th>Email</th>
            <th>Message</th>
        </tr>

        <?php foreach ($data as $item): ?>
            <?php $obj = json_decode($item); ?>
            <tr>
                <td><?= htmlentities($obj->email) ?></td>
                <td><?= htmlentities($obj->message) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

<?php $this->view('shared/footer'); ?>
