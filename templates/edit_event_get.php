<?php
$event = $data['event']->fetch_assoc();
?>

<div class="container-customCreate">
    <div>
        <img class="img-detail" src="<?php echo htmlspecialchars($event['image']); ?>">
    </div>
    <div class="content-boxCreate">
        <h4 class="text-center">แก้ไขกิจกรรม</h4>
        <form action="/edit_event?eid=<?=$event['eid']?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">ชื่อกิจกรรม</label>
                <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($event['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รายละเอียด</label>
                <textarea class="form-control" name="description" rows="3" required><?php echo htmlspecialchars($event['description'])?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">วันที่</label>
                <input type="date" class="form-control" name="event_date" value="<?php echo htmlspecialchars($event['event_date']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ประเภท</label>
                <input type="text" class="form-control" name="category" value="<?php echo htmlspecialchars($event['category']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">เวลา</label>
                <input type="time" class="form-control" name="start_time" value="<?php echo htmlspecialchars($event['start_time']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">อัปโหลดรูปภาพ</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <button type="submit" class="buttonCreate">เพิ่ม</button>
                <button type="reset" class="buttonCreate">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
</div>