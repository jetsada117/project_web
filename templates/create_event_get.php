<div class="container-customCreate">
    <div class="content-boxCreate mt-5">
        <h4 class="text-center">สร้างกิจกรรม</h4>
        <form id="eventForm" action="/create_event" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">ชื่อกิจกรรม</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รายละเอียด</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">วันที่</label>
                <input type="date" class="form-control" name="event_date" required>
            </div>
            <div class="mb-3">
                <label class="form-label me-5">ประเภท</label>
                <select class="form-selectedit my-3" name="category">
                    <option value="การออกกำลังกาย">ออกกำลังกาย</option>
                    <option value="การแข่งขัน">การแข่งขัน</option>
                    <option value="การท่องเที่ยว">การท่องเที่ยว</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">เวลา</label>
                <input type="time" class="form-control" name="start_time" required>
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
                <button type="button" class="buttonCreateedit" id="openConfirmModal">เพิ่ม</button>
                <button type="reset" class="buttonCreate">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
</div>


<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการสร้างกิจกรรม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการสร้างกิจกรรมนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn" style="background-color: #6a00a6; color: white;" id="confirmCreate">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let eventForm = document.getElementById("eventForm");
        const createConfirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));


        document.getElementById("openConfirmModal").addEventListener("click", function(event) {
            createConfirmModal.show();
        });


        document.getElementById("confirmCreate").addEventListener("click", function() {
            eventForm.submit();
        });
    });
</script>
