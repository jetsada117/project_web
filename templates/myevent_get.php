<?php
$events = $data['events'];
?>
<div class="container">
    <div class="containeryour mt-4">
        <h3 class="text-center">กิจกรรมของคุณ</h3>
        <div class="container-boxyou p-4">
            <div class="activity-box p-5">
                <div class="row mb-2">
                    <div class="col-3 fw-bold">ชื่อกิจกรรม</div>
                    <div class="col-3 text-center fw-bold">YEAR/MONTH/DATE</div>
                </div>
                <?php while ($event = $events->fetch_assoc()): ?>
                    <div class="row align-items-center d-flex justify-content-between mt-3">
                        <div class="col-3"><u> <?php echo htmlspecialchars($event['name']) ?></u></div>
                        <div class="col-3 text-center"><?php echo htmlspecialchars($event['event_date']) ?></div>
                        <div class="col-3 text-center">
                            <a href="/edit_event?eid=<?= $event['eid']?>">แก้ไข</a> | <a href="/member_event?eid=<?= $event['eid']?>">ดูรายชื่อ</a> | <a href="/feedback?eid=<?= $event['eid']?>">FEEDBACK</a>
                        </div>
                        <div class="col-3 text-center">
                            <a href="/scanqr">เช็คชื่อผู้เข้าร่วม</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="/statistics" class="custom-btnYour_Activities">ดูสถิติ</a>
        </div>
    </div>
</div>