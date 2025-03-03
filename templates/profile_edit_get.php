<?php
$user = $data['user']->fetch_assoc();
?>
<div class="container-customeditedit">
    <div class="text-center me-5">
        <span class="edit-titleedit">EDIT</span>
    </div>
    <div class="form-containeredit">
        <form action="/profile_edit" method="post" enctype="multipart/form-data">
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
                <button type="submit" class="buttonecustomedit">บันทึก</button>
                <a href="/profile" class="buttonedit ms-4">ยกเลิก</a>
            </div>
        </form>

    </div>
</div>