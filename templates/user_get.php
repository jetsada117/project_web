<?php
$users = $data['users']->fetch_all(MYSQLI_ASSOC);
$counts = $data['count']->fetch_all(MYSQLI_ASSOC);
$countMap = [];
foreach ($counts as $count) {
    $countMap[$count['created_by']] = $count['total_count'];
}
?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">User List</h1>
    <form class="input-group mb-3" action="/user" method="GET">
        <input type="text" id="searchInput" name="search" class="form-control" placeholder="Search username or gmail">
        <button class="btn btn-primary" id="searchButton" type="submit">Search</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>จำนวนกิจกรรม</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="userList">
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user["user_name"]); ?></td>
                    <td><?php echo htmlspecialchars($user["email"]); ?></td>
                    <td><?php echo htmlspecialchars($user["phone"]); ?></td>
                    <td><?php echo date("d F Y", strtotime($user['date_of_birth'])); ?></td>
                    <td><?php echo htmlspecialchars($user["gender"]); ?></td>
                    <td><?php echo isset($countMap[$user['uid']]) ? htmlspecialchars($countMap[$user['uid']]) : '0'; ?></td>
                    <td><a href="/user_data?uid=<?= htmlspecialchars($user['uid']); ?>">ดูข้อมูล</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>