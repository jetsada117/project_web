<?php
$user = $data['user']->fetch_assoc();
?>
<div class="container-customeditedit">
    <div class="text-center me-5">
        <span class="edit-titleedit">EDIT</span>
    </div>
    <div class="form-containeredit">
        <form id="profileEditForm" action="/profile_edit" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control my-3" placeholder="USERNAME" name="user_name"
                value="<?php echo htmlspecialchars($user['user_name']); ?>">
            <input type="email" class="form-control my-3" placeholder="EMAIL ADDRESS" name="email"
                value="<?php echo htmlspecialchars($user['email']); ?>">
            <input type="file" class="form-control my-3" name="user_image">
            <input type="date" class="form-control my-3" name="dob"
                value="<?php echo date("Y-m-d", strtotime($user['date_of_birth'])); ?>">
            <input type="tel" class="form-control my-3" placeholder="เบอร์โทรศัพท์" name="phone"
                value="<?php echo htmlspecialchars($user['phone']); ?>">
            <select class="form-selectedit my-3" name="gender">
                <option value="">เพศ</option>
                <option value="male" <?php echo ($user['gender'] == 'male') ? 'selected' : ''; ?>>ชาย</option>
                <option value="female" <?php echo ($user['gender'] == 'female') ? 'selected' : ''; ?>>หญิง</option>
                <option value="other" <?php echo ($user['gender'] == 'other') ? 'selected' : ''; ?>>อื่นๆ</option>
            </select>
            <div class="text-center mt-4">
                <button type="button" class="buttonecustomedit" id="openConfirmModal">บันทึก</button>
                <a href="/profile"> <button type="button" class="buttonedit ms-4">ยกเลิก</button></a>
            </div>
        </form>
    </div>
</div>


<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการแก้ไขข้อมูล</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการบันทึกการแก้ไขข้อมูล?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn" style="background-color: #6a00a6; color: white;" id="confirmSubmit">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<script>
    let profileEditForm = document.getElementById("profileEditForm");
    const editConfirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

  
    document.getElementById("openConfirmModal").addEventListener("click", function() {
        editConfirmModal.show();
    });


    document.getElementById("confirmSubmit").addEventListener("click", function() {
        profileEditForm.submit();
    });
</script>
