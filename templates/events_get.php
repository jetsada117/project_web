<?php
$events = $data['events'];
?>
<div class="container py-4">
    <div class="d-flex justify-content-center align-items-center">
        <h2 class="p-3 bg-white rounded-4 shadow my-3">หน้ากิจกรรม</h2>
    </div>
    <div class="scroll-container">
        <?php
        while ($row = $events->fetch_assoc()): ?>
            <div class="col-md-3 my-3">
                <div class="activity-cardAct">
                    <div class="activity-cardAct1">
                        <img src="<?php echo htmlspecialchars($row['image']); ?>">
                        <h5 class="mt-2"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="text-wrap">
                            <?php echo nl2br(htmlspecialchars($row['description'])); ?><br>
                            วันที่: <?php echo date("d F Y", strtotime($row['event_date'])); ?><br>
                        </p>
                        <button class="btn btn-join">เข้าร่วม</button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>