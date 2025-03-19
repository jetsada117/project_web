<?php
$events = $data['events'];
?>
<div class="container py-4">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="p-3 rounded-4 shadow my-3" style=" background-color:#EF9A9A">หน้ากิจกรรม</h3>
    </div>
    <div class="row justify-content-start">
        <?php while ($row = $events->fetch_assoc()): ?>
            <div class="col-md-4 my-3 d-flex justify-content-center">
                <div class="activity-cardAct">
                    <a href="/detail_event?eid=<?= $row['eid'] ?>">
                        <div class="activity-cardAct1">
                            <img src="<?php echo htmlspecialchars($row['image']); ?>">
                            <h4 class="mt-3 mb-2 fw-bolder" style="color: #D32F2F;"><?php echo htmlspecialchars($row['name']); ?></h4>
                            <p class="text-wrap">
                                <?php echo nl2br(htmlspecialchars($row['description'])); ?><br>
                                วันที่: <?php echo date("d F Y", strtotime($row['event_date'])); ?><br>
                            </p>
                            <a href="/enroll?eid=<?= $row['eid']; ?>">
                                <button class="btn btn-join" onclick="return confirmSubmission()">เข้าร่วม</button>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>


