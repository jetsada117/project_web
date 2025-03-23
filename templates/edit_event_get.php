<?php
$event = $data['event']->fetch_assoc();
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let targetForm = document.querySelector("form[name='eventForm']"); 
        const editConfirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));


        document.getElementById("openConfirmModal").addEventListener("click", function(event) {
            event.preventDefault();
            editConfirmModal.show();
        });


        document.getElementById("confirmJoin").addEventListener("click", function() {
            targetForm.submit(); 
        });
    });
</script>
<div class="container-customCreate">
    <div>
        <img class="img-detail" src="<?php echo htmlspecialchars($event['image']); ?>">
    </div>
    <div class="content-boxCreate mt-5">
        <h4 class="text-center">แก้ไขกิจกรรม</h4>
        <form name="eventForm" action="/edit_event?eid=<?= $event['eid'] ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">ชื่อกิจกรรม</label>
                <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($event['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รายละเอียด</label>
                <textarea class="form-control" name="description" rows="3" required><?php echo htmlspecialchars($event['description']) ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">วันที่</label>
                <input type="date" class="form-control" name="event_date" value="<?php echo htmlspecialchars($event['event_date']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label me-5">ประเภท</label>
                <select class="form-selectedit my-3" name="category">
                    <option value="การออกกำลังกาย" <?php echo ($event['category'] == 'การออกกำลังกาย') ? 'selected' : ''; ?>>ออกกำลังกาย</option>
                    <option value="การแข่งขัน" <?php echo ($event['category'] == 'การแข่งขัน') ? 'selected' : ''; ?>>การแข่งขัน</option>
                    <option value="การท่องเที่ยว" <?php echo ($event['category'] == 'การท่องเที่ยว') ? 'selected' : ''; ?>>การท่องเที่ยว</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">เวลา</label>
                <input type="time" class="form-control" name="start_time" value="<?php echo htmlspecialchars($event['start_time']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">อัปโหลดรูปภาพ</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">อัปโหลดรูปภาพเพิ่มเติม (ได้มากกว่า 1 ภาพ)</label>
                <input type="file" class="form-control" name="image_more[]" multiple>
            </div>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <button type="button" class="buttonCreateedit" id="openConfirmModal">แก้ไข</button>
                <button type="reset" class="buttonCreate">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">แก้ไขหรือไม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการแก้ไขกิจกรรมนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn" style="background-color: #6a00a6; color: white;" id="confirmJoin">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>