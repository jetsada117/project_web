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
        <button class="btn-profile" id="logoutButton">ออกจากระบบ</button>
    </div>
</div>


<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="logoutModalLabel">ยืนยันการออกจากระบบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการออกจากระบบ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <a href="/logout">
                    <button type="button" class="btn" style="background-color: #6a00a6; color: white;">ยืนยัน</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const logoutButton = document.getElementById("logoutButton");
    const logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));

   
    logoutButton.addEventListener("click", function() {
        logoutModal.show();
    });
</script>
