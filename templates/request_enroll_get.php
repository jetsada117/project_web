<?php
$enrollments = $data['requests']->fetch_all(MYSQLI_ASSOC);
?>
<div class="container-customwarn">
    <div class="notification-boxwarmwarn">
        <div class="titlewarn">
            <i class="bi bi-bell-fill"></i>
            <span>การแจ้งเตือน</span>
        </div>
        <?php
        if (count($enrollments) > 0) {
            foreach ($enrollments as $row): ?>
                <div class="alert alert-light">
                    <span><?php echo htmlspecialchars($row['user_name']) . ' อายุ ' . htmlspecialchars($row['age']) . ' เพศ ' . htmlspecialchars($row['gender']) ?></span>
                    <div>
                        <a class="btn btn-acceptwarm" href="/request_enroll?action=accept&uid=<?= $row['uid'] ?>&eid=<?= $row['eid'] ?>">ยอมรับ</a>
                        <a class="btn btn-declinewarm" href="/request_enroll?action=declined&uid=<?= $row['uid'] ?>&eid=<?= $row['eid'] ?>">ปฏิเสธ</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <div class="alert alert-warning mt-3">
                <strong>ไม่มีการร้องขอเข้าร่วมกิจกรรมใหม่</strong>
            </div>
        <?php } ?>
    </div>
</div>