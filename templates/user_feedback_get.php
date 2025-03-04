<?php
$feedback = $data['ufeedback']->fetch_assoc();
?>
<form class="container container-customscore" action="/user_feedback?eid=<?= $feedback['eid']?>" method="post" enctype="multipart/form-data">
    <div class="rating-boxscore">
        <h2>ให้คะแนนกิจกรรม</h2>
        <div class="mb-3">
            <label for="suitability">1. ความเหมาะสมของกิจกรรม</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability5" value="5" required>
                <label class="form-check-label" for="suitability5">5</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability4" value="4">
                <label class="form-check-label" for="suitability4">4</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability3" value="3">
                <label class="form-check-label" for="suitability3">3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability2" value="2">
                <label class="form-check-label" for="suitability2">2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability1" value="1">
                <label class="form-check-label" for="suitability1">1</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="duration">2. ระยะเวลาของกิจกรรม</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration5" value="5" required>
                <label class="form-check-label" for="duration5">5</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration4" value="4">
                <label class="form-check-label" for="duration4">4</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration3" value="3">
                <label class="form-check-label" for="duration3">3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration2" value="2">
                <label class="form-check-label" for="duration2">2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration1" value="1">
                <label class="form-check-label" for="duration1">1</label>
            </div>
        </div>
    </div>
    <div class="comment-boxscore">
        <h2>แสดงความคิดเห็นของคุณ...</h2>
        <textarea name="comment" class="form-control" rows="4" placeholder="กรอกความคิดเห็นของคุณที่นี่..."></textarea>
    </div>
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">ส่ง</button>
    </div>
</form>
