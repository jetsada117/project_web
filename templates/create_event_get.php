<div class="container-customCreate">
    <div class="content-boxCreate mt-5">
        <h4 class="text-center">สร้างกิจกรรม</h4>
        <form action="/create_event" method="POST" enctype="multipart/form-data" onsubmit="return confirmSubmission()">
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
                <button type="submit" class="buttonCreateedit">เพิ่ม</button>
                <button type="reset" class="buttonCreate">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
</div>