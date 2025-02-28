<?php
$events = $data['events'];
?>
<h1>รายการเหตุการณ์ทั้งหมด</h1>
<?php while ($event_data = $events->fetch_assoc()): ?>
    <div class="event-item">
        <h2><?php echo htmlspecialchars($event_data['name']); ?></h2>
        <p><strong>คำอธิบาย:</strong> <?php echo htmlspecialchars($event_data['description']); ?></p>
        <p><strong>หมวดหมู่:</strong> <?php echo htmlspecialchars($event_data['category']); ?></p>
        <p><strong>วันที่จัดกิจกรรม:</strong> <?php echo htmlspecialchars($event_data['event_date']); ?></p>
        <p><strong>เวลาเริ่มต้น:</strong> <?php echo htmlspecialchars($event_data['start_time']); ?></p>
        <?php if (!empty($event_data['image'])): ?>
            <img src="images/<?php echo htmlspecialchars($event_data['image']); ?>" alt="Image for <?php echo htmlspecialchars($event_data['name']); ?>">
        <?php endif; ?>
    </div>
<?php endwhile; ?>