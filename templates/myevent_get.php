<?php
$events = $data['events'];
?>
<div class="container">
    <div class="containeryour mt-4">
        <h3 class="text-center">กิจกรรมของคุณ</h3>
        <div class="container-boxyou p-4">
            <div class="activity-box p-3">
                <div class="row mb-2">
                    <div class="col-4 fw-bold">ชื่อกิจกรรม</div>
                    <div class="col-3 text-end fw-bold">DATE/MONTH/YEAR</div>
                </div>
                <?php while ($event = $events->fetch_assoc()): ?>
                    <div class="row align-items-center d-flex justify-content-between mt-3">
                        <div class="col"><u> <?php echo htmlspecialchars($event['name']) ?></u></div>
                        <div class="col text-center"><?php echo htmlspecialchars($event['event_date']) ?></div>
                        <div class="col text-end">
                            <a href="/edit_event?eid=<?= $event['eid']?>">แก้ไข</a> | <a href="/member_event?eid=<?= $event['eid']?>">ดูรายชื่อ</a> | <a href="/feedback?eid=<?= $event['eid']?>">FEEDBACK</a>
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