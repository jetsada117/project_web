<form action="/login" method="post" class="container-customLogin">
    <div class="login-container">

        <h3 style="font-weight: bold">LOG IN</h3>
        <div class="form-group mb-3">
            <label for="Email" class="mb-2">Email:</label><br>
            <input type="text" class="form-control " name="email" placeholder="Email">
        </div>

        <div class="password-wrapperlogin my-4">
            <label for="password" class="mb-2">Password:</label><br>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            <span class="toggle-passwordlogin" onclick="togglePassword()">👁️</span>
        </div>
        <button type="submit" class="buttonCreatelogin mt-4">เข้าสู่ระบบ</button>
    </div>
</form>