<h2>Scan QR Code</h2>
<video id="camera" width="300" height="300" autoplay style="display: none;"></video>
<canvas id="canvas" hidden></canvas>
<p id="result">ผลการสแกนจะปรากฏที่นี่</p>

<button id="startBtn">เปิดกล้อง</button>
<button id="stopBtn" disabled>ปิดกล้อง</button>

<div style="margin-top: 20px;">
    <label for="fileInput">อัปโหลดไฟล์ QR:</label>
    <input type="file" id="fileInput" accept="image/*">
</div>

