<div class="container-customeditedit">
    <div class="text-center me-5">
        <span class="edit-titleedit">Login</span>
    </div>
    <div class="form-containeredit">
        <form id="registerForm" action="/register" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control my-3" name="user_name" placeholder="USERNAME">
            <input type="email" class="form-control my-3" name="email" placeholder="EMAIL ADDRESS">
            <input type="password" class="form-control my-3" name="password" placeholder="PASSWORD">
            <input type="file" class="form-control my-3" name="user_image">
            <input type="date" class="form-control my-3" name="dob">
            <input type="tel" class="form-control my-3" name="phone" placeholder="เบอร์โทรศัพท์">
            <select class="form-selectedit my-3" name="gender">
                <option selected>เพศ</option>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
                <option value="other">อื่นๆ</option>
            </select>
            <div class="text-center mt-4">
                <button type="button" class="buttonecustomedit" id="openConfirmModal">ลงทะเบียน</button>
            </div>
        </form>
    </div>
</div>


<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; border: 2px solid #a60064;">
            <div class="modal-header" style="background-color: #a60064; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการลงทะเบียน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการลงทะเบียนด้วยข้อมูลนี้?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #f8bad0; color: #a60064;" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn" style="background-color: #6a00a6; color: white;" id="confirmSubmit">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<script>
    const registerForm = document.getElementById("registerForm");
    const registerConfirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

    
    document.getElementById("openConfirmModal").addEventListener("click", function() {
        registerConfirmModal.show();
    });

   
    document.getElementById("confirmSubmit").addEventListener("click", function() {
        registerForm.submit();
    });
</script>
