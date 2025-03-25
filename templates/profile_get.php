<?php
$user = $data['user']->fetch_assoc();
?>
<div class="profile-container">
    <div class="profile-card">
        <img src="<?php echo htmlspecialchars($user['image']); ?>" alt="Profile Picture" class="profile-img">
        <h4>ชื่อผู้ใช้: <?php echo htmlspecialchars($user['user_name']); ?></h4>
        <p><strong>อีเมล: <?php echo htmlspecialchars($user['email']); ?></strong></p>
        <p><strong>วันเกิด: <?php echo date("d F Y", strtotime($user['date_of_birth'])); ?></strong></p>
        <p><strong>เบอร์โทร: <?php echo htmlspecialchars($user['phone']); ?></strong></p>
        <p><strong>เพศ: <?php echo htmlspecialchars($user['gender']); ?></strong></p>
        <a href="/profile_edit">
            <button class="btn-profile">แก้ไขข้อมูล</button>
        </a>
        <a href="/logout">
            <button class="btn-profile">ออกจากระบบ</button>
        </a>
    </div>
</div>