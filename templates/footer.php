<div id="customAlert" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #333; color: white; padding: 20px; border-radius: 5px;">
    <span id="alertMessage"></span>
    <button onclick="closeAlert()" style="margin-left: 10px; background: red; color: white; border: none; padding: 5px; cursor: pointer;">ปิด</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsQR/1.4.0/jsQR.min.js"></script>

<script>
    function confirmSubmission() {
        return confirm("Are you sure you want to confirm?");
    }
</script>

<script>
    function showCustomAlert(message) {
        document.getElementById("alertMessage").innerHTML = message;
        document.getElementById("customAlert").style.display = "block";
    }

    function closeAlert() {
        document.getElementById("customAlert").style.display = "none";
    }
</script>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

<script>
    function handleScannedUrl(url) {
        const resultText = document.getElementById('result');
        resultText.textContent = "สแกนสำเร็จ: " + url;

        window.location.href = url;
    }

    async function startCamera() {
        const video = document.getElementById('camera');
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const resultText = document.getElementById('result');

        try {
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                videoStream = await navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: 'environment'
                    }
                });
                video.srcObject = videoStream;
                video.style.display = 'block';
                video.style.backgroundColor = 'transparent'; // Ensure no background color

                video.onloadedmetadata = function() {
                    document.getElementById('startBtn').disabled = true;
                    document.getElementById('stopBtn').disabled = false;
                    scanning = true;

                    interval = setInterval(() => {
                        if (!scanning) return;

                        if (video.readyState === video.HAVE_ENOUGH_DATA) {
                            canvas.width = video.videoWidth;
                            canvas.height = video.videoHeight;
                            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);

                            if (typeof jsQR === 'function') {
                                const code = jsQR(imageData.data, imageData.width, imageData.height);

                                if (code) {
                                    stopCamera();
                                    handleScannedUrl(code.data);
                                }
                            } else {
                                resultText.textContent = "ไลบรารี jsQR ไม่ได้ถูกโหลด";
                                stopCamera();
                            }
                        }
                    }, 500);
                };
            } else {
                document.getElementById('result').textContent =
                    "กรุณาใช้งานผ่าน HTTPS เพื่อเข้าถึงกล้อง";
            }

        } catch (error) {
            console.error("Error accessing camera:", error);
            resultText.textContent = "ไม่สามารถเข้าถึงกล้องได้: " + error.message;
        }
    }

    function stopCamera() {
        const video = document.getElementById('camera');

        // Reset video element to initial state
        video.style.display = 'block';
        video.style.backgroundColor = 'white'; // Set background to white
        video.srcObject = null; // Clear the video source

        scanning = false;
        clearInterval(interval);

        if (videoStream) {
            videoStream.getTracks().forEach(track => track.stop());
            videoStream = null;
        }

        document.getElementById('startBtn').disabled = false;
        document.getElementById('stopBtn').disabled = true;
    }

    function scanQRFromFile(file) {
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const resultText = document.getElementById('result');

        if (typeof jsQR !== 'function') {
            resultText.textContent = "ไลบรารี jsQR ไม่ได้ถูกโหลด";
            return;
        }

        const reader = new FileReader();
        reader.onload = function(event) {
            const img = new Image();
            img.onload = function() {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                if (code) {
                    handleScannedUrl(code.data);
                } else {
                    resultText.textContent = "ไม่พบ QR code ในรูปภาพที่อัปโหลด";
                }
            };
            img.src = event.target.result;
        };
        reader.readAsDataURL(file);
    }

    document.getElementById('startBtn').addEventListener('click', startCamera);
    document.getElementById('stopBtn').addEventListener('click', stopCamera);
    document.getElementById('fileInput').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            scanQRFromFile(e.target.files[0]);
        }
    });
</script>
</body>

</html>