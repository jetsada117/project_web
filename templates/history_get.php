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
                            <button class="btn btn-primary btn-checkin" data-eid="<?= $activity['eid'] ?>">เช็คชื่อ</button>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($activity['status'] == 'accepted') { ?>
                            <a href="/user_feedback?eid=<?= $activity['eid'] ?>">
                                <button class="btn btn-warning">Feedback</button>
                            </a>
                        <?php } ?>
                        <button class="btn btn-danger btn-delete" data-eid="<?= $activity['eid'] ?>">ลบประวัติ</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">ยืนยันการลบประวัติ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">คุณแน่ใจหรือไม่ว่าต้องการลบประวัตินี้?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <a id="confirmDeleteBtn" class="btn btn-danger">ยืนยัน</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmCheckinModal" tabindex="-1" aria-labelledby="confirmCheckinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">ยืนยันการเช็คชื่อ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">คุณแน่ใจหรือไม่ว่าต้องการเช็คชื่อเข้าร่วมกิจกรรมนี้?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <a id="confirmCheckinBtn" class="btn btn-primary">ยืนยัน</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteConfirmModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
        const checkinConfirmModal = new bootstrap.Modal(document.getElementById('confirmCheckinModal'));

   
        document.querySelectorAll(".btn-delete").forEach(button => {
            button.addEventListener("click", function() {
                const eid = this.getAttribute("data-eid");
                document.getElementById("confirmDeleteBtn").setAttribute("href", "/history_delete?eid=" + eid);
                deleteConfirmModal.show();
            });
        });

     
        document.querySelectorAll(".btn-checkin").forEach(button => {
            button.addEventListener("click", function() {
                const eid = this.getAttribute("data-eid");
                document.getElementById("confirmCheckinBtn").setAttribute("href", "/checkin?eid=" + eid);
                checkinConfirmModal.show();
            });
        });
    });
</script>
