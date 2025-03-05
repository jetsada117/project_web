<?php
$activities = $data['feedbacks']->fetch_all(MYSQLI_ASSOC); 
$count = 1;
?>
<div class="container container-customstatistics">
    <h2>สถิติ</h2>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>อันดับ</th>
                <th>ชื่อกิจกรรม</th>
                <th>ยอดเข้าร่วม</th>
                <th>RATING</th>
                <th>วันที่</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activities as $activity): ?>
                <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $activity["name"]; ?></td>
                    <td><?php echo $activity["total_participants"]; ?></td>
                    <td><?php echo $activity["average_rating"]; ?></td>
                    <td><?php echo $activity["event_date"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="text-center mt-3">
    <a href="/myevent" class="btn-back">ย้อนกลับ</a>
</div>