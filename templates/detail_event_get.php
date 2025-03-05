<?php
$event = $data['event']->fetch_assoc();
?>

<div class="containercontent">
    <div class="header-titlecontent">รายละเอียดกิจกรรม</div>
    <div class="row align-items-center">
        <div class="col-md-5 d-flex justify-content-center mb-4">
            <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="Image" class="img-fluid border rounded img-detail">
        </div>
        <div class="col-md-5">
            <div class="cardcontent">
                <h4 class="text-center mt-5">รายละเอียดกิจกรรม</h4>
                <p><strong>ชื่อกิจกรรม:</strong><?php echo htmlspecialchars($event['name']); ?></p>
                <p><strong>รายละเอียด:</strong><?php echo htmlspecialchars($event['description']); ?></p>
                <p><strong>วันที่:</strong><?php echo date("d F Y", strtotime($event['event_date'])); ?></p>
                <p><strong>ประเภท:</strong><?php echo htmlspecialchars($event['category']) ?></p>
                <p><strong>เวลา:</strong><?php echo htmlspecialchars($event['start_time']) ?></p>
            </div>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-center gap-3">
        <a href="/enroll?eid=<?= $event['eid'];?>">
            <button class="btn btn-primary btn-custom" onclick="return confirmSubmission()">เข้าร่วม</button>
        </a>
        <a href="/events">
            <button class="btn btn-danger btn-custom" onclick="return confirmSubmission()">ยกเลิก</button>
        </a>
    </div>
</div>