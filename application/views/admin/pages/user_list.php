<div class="main-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($homes)): ?>
                <?php $i = 1;
                foreach ($homes as $home): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $home->title ?></td>
                        <td><?= $home->paragraph ?></td>
                        <td><img src="<?= base_url('uploads/' . $home->image) ?>" alt="<?= $home->title ?>" width="100">
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>