<div class="container d-flex flex-column align-items-center justify-content-center w-100 h-100 mt-5">
    <h2 class="text-center mb-3">กรุณาสแกน QR Code เพื่อเช็คอิน</h2>
    <p class="text-center mb-3">User ID: <?= htmlspecialchars($data['uid']) ?></p>
    <p class="text-center mb-3">Event ID: <?= htmlspecialchars($data['eid']) ?></p>
    <p class="text-center mb-3">OTP: <?= htmlspecialchars($_SESSION['otp']) ?></p>
    <div class="text-center">
        <img src="<?= htmlspecialchars($data['qrCodeDataUri']) ?>" alt="QR Code">
    </div>
</div>