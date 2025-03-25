<?php
$activities = $data['history'];
?>

<div class="container container-custom mt-5">
    <h2 class="text-center mb-5">ประวัติการเข้าร่วม</h2>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>ชื่อกิจกรรม</th>
                <th>YEAR/MONTH/DATE</th>
                <th>สถานะ</th>
                <th>เช็คชื่อ</th>
                <th>การจัดการ</th>
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
                            <a class="btn btn-primary btn-checkin" href="/checkin?eid=<?= $activity['eid']?>">เช็คชื่อ</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($activity['status'] == 'accepted') { ?>
                            <a href="/user_feedback?eid=<?= $activity['eid'] ?>">
                                <button class="btn btn-warning">Feedback</button>
                            </a>
                        <?php } ?>
                        <a class="btn btn-danger btn-delete" href="/history_delete?eid=<?= $activity['eid']?>" onclick="return confirmSubmission()">ลบประวัติ</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>