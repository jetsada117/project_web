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
                    <span><?php echo htmlspecialchars($row['user_name']) . ' อายุ ' . htmlspecialchars($row['age']) . ' เพศ ' . htmlspecialchars($row['gender'])  . ' กิจกรรม '. htmlspecialchars($row['name'])?></span>
                    <div>
                        <button class="btn btn-acceptwarm" data-bs-toggle="modal" data-bs-target="#acceptModal" data-uid="<?= $row['uid'] ?>" data-eid="<?= $row['eid'] ?>">ยอมรับ</button>
                        <button class="btn btn-declinewarm" data-bs-toggle="modal" data-bs-target="#declineModal" data-uid="<?= $row['uid'] ?>" data-eid="<?= $row['eid'] ?>">ปฏิเสธ</button>
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


<div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="acceptModalLabel">ยืนยันการยอมรับ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการยอมรับคำขอนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <a href="#" id="acceptConfirmBtn">
                    <button type="button" class="btn" style="background-color: #6a00a6; color: white;">ยืนยัน</button>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="declineModal" tabindex="-1" aria-labelledby="declineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="declineModalLabel">ยืนยันการปฏิเสธ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการปฏิเสธคำขอนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <a href="#" id="declineConfirmBtn">
                    <button type="button" class="btn" style="background-color: #6a00a6; color: white;">ยืนยัน</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>

    $('#acceptModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget); 
        const uid = button.data('uid'); 
        const eid = button.data('eid'); 
        const acceptConfirmBtn = document.getElementById('acceptConfirmBtn');
        const acceptUrl = '/request_enroll?action=accept&uid=' + uid + '&eid=' + eid;
        acceptConfirmBtn.href = acceptUrl; 
    });

    
    $('#declineModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget); 
        const uid = button.data('uid'); 
        const eid = button.data('eid');
        const declineConfirmBtn = document.getElementById('declineConfirmBtn');
        const declineUrl = '/request_enroll?action=declined&uid=' + uid + '&eid=' + eid;
        declineConfirmBtn.href = declineUrl;
    });
</script>
