<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="#">หน้าสร้างกิจกรรม</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">กิจกรรมของคุณ</a></li>
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="SEARCH">
                <button class="btn btn-outline-secondary" type="submit">
                    <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
                </button>
            </form>
        </div>
    </nav>

    <div class="container-customeditedit">
        <div class="text-center me-5">
            <span class="edit-titleedit">EDIT</span>
        </div>
        <div class="form-containeredit">
            <form>
                <input type="text" class="form-control my-3" placeholder="USERNAME">
                <input type="email" class="form-control my-3" placeholder="EMAIL ADDRESS">
                <input type="password" class="form-control my-3" placeholder="PASSWORD">
                <input type="file" class="form-control my-3">
                <input type="date" class="form-control my-3">
                <input type="tel" class="form-control my-3" placeholder="เบอร์โทรศัพท์">
                <select class="form-selectedit my-3">
                    <option selected>เพศ</option>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่นๆ</option>
                </select>
                <div class="text-center mt-4">
                    <button type="submit" class="buttonecustomedit">บันทึก</button>
                    <button type="reset" class="buttonedit ms-4">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>