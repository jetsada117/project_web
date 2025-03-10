<?php
$activities = $data['history'];
?>

<div class="container container-custom mt-5">
    <h2>ประวัติการเข้าร่วม</h2>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>ชื่อกิจกรรม</th>
                <th>YEAR/MONTH/DATE</th>
                <th>สถานะ</th>
                <th>แก้ไข</th>
                <th>เช็คชื่อ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activities as $activity): ?>
                <tr>
                    <td><?php echo htmlspecialchars($activity['name']); ?></td>
                    <td><?php echo htmlspecialchars($activity['event_date']); ?></td>
                    <td><?php echo htmlspecialchars($activity['status']); ?></td>
                    <td>
                        <?php if ($activity['status'] == 'accepted' && $activity['is_participated'] == 0) { ?>
                            <a href="/checkin?eid=<?= $activity['eid'] ?>">
                                เช็คชื่อ
                            </a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($activity['status'] == 'accepted') { ?>
                            <a href="/user_feedback?eid=<?= $activity['eid'] ?>">
                                <button class="btn btn-danger">feedback</button>
                            </a>
                        <?php } ?>
                        <a href="/history_delete?eid=<?= $activity['eid'] ?>">
                            <button class="btn btn-danger"  onclick="return confirmSubmission()">ลบประวัติ</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>