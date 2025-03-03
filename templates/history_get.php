<?php
$activities = $data['history'];
?>

<div class="container container-custom mt-5">
    <h2>ประวัติการเข้าร่วม</h2>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>ชื่อกิจกรรม</th>
                <th>DATE/MONTH/YEAR</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activities as $activity): ?>
                <tr>
                    <td><?php echo htmlspecialchars($activity['name']); ?></td>
                    <td><?php echo htmlspecialchars($activity['event_date']); ?></td>
                    <td>
                        <a href="/user_feedback">
                            <button class="btn btn-danger">feedback</button>
                        </a>
                        <a href="/history_delete?eid=<?= $activity['eid']?>">
                            <button class="btn btn-danger">ลบประวัติ</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>