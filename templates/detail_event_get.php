<?php
$event = $data['event']->fetch_assoc();
$images_result = $data['images'] ?? null;
$num_images = ($images_result) ? $images_result->num_rows : 0;
?>
<div class="containercontent w-100">
    <div class="header-titlecontent">
        <h2>รายละเอียดกิจกรรม</h2>
    </div>
    <div class="row d-flex justify-content-center align-items-center mt-3 w-100">
        <div class="col-md-5 d-flex justify-content-center mb-4 me-5 w-25">
            <div id="eventImageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="Main Image" class="img-detail">
                    </div>
                    <?php if ($num_images > 0): ?>
                        <?php while ($image = $images_result->fetch_assoc()): ?>
                            <div class="carousel-item">
                                <img src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="Additional Image" class="img-detail">
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#eventImageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#eventImageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <div class="col-md-5 ">
            <div class="cardcontent">
                <h4 class="text-center mt-5">รายละเอียดกิจกรรม</h4>
                <p><strong>ชื่อกิจกรรม: </strong><?php echo htmlspecialchars($event['name']); ?></p>
                <p><strong>รายละเอียด: </strong><?php echo htmlspecialchars($event['description']); ?></p>
                <p><strong>วันที่: </strong><?php echo date("d F Y", strtotime($event['event_date'])); ?></p>
                <p><strong>ประเภท: </strong><?php echo htmlspecialchars($event['category']) ?></p>
                <p><strong>เวลา: </strong><?php echo htmlspecialchars($event['start_time']) ?></p>
            </div>
        </div>
    </div>

    <div class="mt-3 d-flex justify-content-center gap-3">
        <button class="btn btn-primary btn-custom" id="joinEvent" data-url="/enroll?eid=<?= $event['eid']; ?>">เข้าร่วม</button>
        <a href="/events">
            <button class="btn btn-danger btn-custom">ยกเลิก</button>
        </a>
    </div>
</div>
<!-- Modal ยืนยันเข้าร่วมกิจกรรม -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #007bff;">
            <div class="modal-header" style="background-color: #007bff; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการเข้าร่วม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการเข้าร่วมกิจกรรมนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <a id="confirmJoin" href="#" class="btn btn-primary">ยืนยัน</a>
            </div>
        </div>
    </div>
</div>

<!-- ปุ่มที่เรียกใช้ Modal -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        let targetUrl = "";
        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

        document.getElementById("joinEvent").addEventListener("click", function() {
            targetUrl = this.getAttribute("data-url");
            confirmModal.show();
        });

        document.getElementById("confirmJoin").addEventListener("click", function() {
            window.location.href = targetUrl;
        });
    });
</script>