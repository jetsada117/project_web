<div class="container-customeditedit">
    <div class="text-center me-5">
        <span class="edit-titleedit">Login</span>
    </div>
    <div class="form-containeredit">
        <form action="/register" method="post" enctype="multipart/form-data" onsubmit="return confirmSubmission()">
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
                <button type="submit" class="buttonecustomedit">ลงทะเบียน</button>
            </div>
        </form>
    </div>
</div>