<div class="d-flex flex-row align-items-center justify-content-center w-100 h-100">
    <div class="bg-white p-6 rounded-lg shadow-lg justify-content-center w-25 mt-5 p-5">
        <div class="text-center mb-4 mt-3">
            <img alt="A placeholder image of a lock icon representing security" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/eMdsdRxh3TmqMEaBUq4S1ygKqTLeJ9T1165gwVd7nog.jpg" width="100" />
        </div>
        <h2 class="text-center text-2xl font-semibold mb-3">
            OTP Verification
        </h2>
        <p class="text-center text-gray-600 mb-4">
            Enter the OTP sent to your mobile number
        </p>
        <?php
    
      
        $_SESSION['otp_expiry'] = time() + 300; 
        echo "   OTP ของคุณคือ: " . $_SESSION['otp'];
        ?>
        <form action="/checkin" method="post">

            <div class="d-flex justify-content-center mb-4">
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num1" />
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num2" />
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num3" />
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num4" />
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num5" />
                <input class="otp-input border border-gray-300 rounded" maxlength="1" type="text" name="num6" />

            </div>
            <button class="w-100 bg-primary text-white py-2 rounded duration-200 " type="submit">
                Verify
            </button>
        </form >
        <div class="text-center mt-3">
            <p class="text-gray-600">
                Didn't receive the code?
                <a class="text-blue-500 hover:underline" href="#">
                    Resend
                </a>
            </p>
        </div>
    </div>
</div>