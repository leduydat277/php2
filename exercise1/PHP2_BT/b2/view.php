<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_user as $value): ?>
        <tr>
            <td><?= $value->id ?></td>
            <td><?= $value->name ?></td>
            <td><?= $value->age ?></td>
            <td><?= $value->address ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>