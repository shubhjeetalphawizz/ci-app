<div class="main-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($homes)): ?>
                <?php foreach ($homes as $home): ?>
                    <tr>
                        <td>1</td>
                        <td><?= $home->title ?></td>
                        <td><?= $home->paragraph ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No home found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>