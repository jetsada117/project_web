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
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#eventImageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                    if ($num_images > 0):
                        for ($i = 0; $i < $num_images; $i++):
                    ?>
                            <button type="button" data-bs-target="#eventImageCarousel" data-bs-slide-to="<?= $i + 1 ?>" aria-label="Slide <?= $i + 2 ?>"></button>
                    <?php
                        endfor;
                    endif;
                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="Main Image" class="img-detail">
                    </div>
                    <?php
                    if ($num_images > 0):
                        $images_result->data_seek(0);

                        while ($image = $images_result->fetch_assoc()):
                    ?>
                            <div class="carousel-item">
                                <img src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="Additional Image" class="img-detail">
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
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
        <a href="/enroll?eid=<?= $event['eid']; ?>">
            <button class="btn btn-primary btn-custom" onclick="return confirmSubmission()">เข้าร่วม</button>
        </a>
        <a href="/events">
            <button class="btn btn-danger btn-custom">ยกเลิก</button>
        </a>
    </div>
</div>