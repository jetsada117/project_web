<?php
$feedback = $data['feedbacks']->fetch_all(MYSQLI_ASSOC);
?>
<div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2 class="fw-bold">ความคิดเห็น </h2>
    <div class="comment-container_Comment">
        <?php
        if (count($feedback) > 0) {
            foreach ($feedback as $comment): ?>
                <div class="comment-boxComment"><?php echo htmlspecialchars($comment['feedback']); ?></div>
            <?php endforeach; ?>
        <?php } else { ?>
            <div class="comment-boxComment">ไม่มีความคิดเห็น</div>
        <?php } ?>
    </div>
    <a href="/myevent"><button  class="btn-back">กลับ</button></a>
    
</div>