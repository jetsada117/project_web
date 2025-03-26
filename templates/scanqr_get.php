<?php if (isset($_SESSION['message'])) { ?>
    <script>
        window.onload = function() {
            showCustomAlert("<?= htmlspecialchars($_SESSION['message']) ?>");
        };
    </script>
<?php unset($_SESSION['message']);
} ?>
<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;">
        <h2 class="text-center mb-4">Scan QR Code</h2>
        <div class="d-flex justify-content-center mb-4">
            <video id="camera" width="300" height="300" autoplay class="border"></video>
            <canvas id="canvas" hidden></canvas>
        </div>
        <p id="result" class="text-center text-muted mb-4">ผลการสแกนจะปรากฏที่นี่</p>
        <div class="d-flex justify-content-around mb-4">
            <button id="startBtn" class="btn btn-primary">เปิดกล้อง</button>
            <button id="stopBtn" class="btn btn-danger" disabled>ปิดกล้อง</button>
        </div>
        <div class="form-group">
            <label for="fileInput">อัปโหลดไฟล์ QR:</label>
            <input type="file" id="fileInput" accept="image/*" class="form-control">
        </div>
    </div>
</div>