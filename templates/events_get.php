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
                            <a href="/enroll?eid=<?= $row['eid']; ?>" class="btn btn-join">เข้าร่วม</a>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการเข้าร่วม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการเข้าร่วมกิจกรรมนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn" style="background-color: #6a00a6; color: white;" id="confirmJoin">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let targetUrl = ""; 

   
        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

    
        document.querySelectorAll(".btn-join").forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault(); 
                targetUrl = this.getAttribute("href"); 
                confirmModal.show(); 
            });
        });


        document.getElementById("confirmJoin").addEventListener("click", function() {
            window.location.href = targetUrl; 
        });
    });
</script>