<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activity Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="c.css">
    <style>
       
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="#">หน้าแรก</a></li>
            <li class="nav-item"><a class="nav-link" href="#">หน้าสร้างกิจกรรม</a></li>
            <li class="nav-item"><a class="nav-link" href="#">กิจกรรมของคุณ</a></li>
        </ul>
        
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="SEARCH">
            <button class="btn btn-outline-secondary" type="submit">
                <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
            </button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container container-custom9">
    <div class="row w-75">
        <div class="col-md-5">
            <div class="image-box">
                <img src="img\imgtest.png" alt="กิจกรรม">
            </div>
        </div>

        <div class="col-md-7">
            <div class="box">
                <div class="title-banner">แก้ไขกิจกรรม</div>
                <div class="mb-2">
                    <label class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">เพิ่มรายละเอียด</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label">ประเภท</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">เวลา</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-custom btn-add px-4">เพิ่ม</button>
                    <button class="btn btn-custom btn-delete px-4">ลบ</button>
                </div>
            </div>
        </div>
    </