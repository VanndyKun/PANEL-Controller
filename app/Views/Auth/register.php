<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center pt-5">
    <div class="col-lg-4">
        <?= $this->include('Layout/msgStatus') ?>
        <div class="card shadow-sm mb-5">
            <div class="card-header h5 p-3">
                Register
            </div>
            <div class="card-body">
                <?= form_open() ?>

                 <div class="card-body">
                <form action="/register" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="f17b5372505ea094e08aca6c53290296" />                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="text-info form-control mt-2" name="username" id="username" placeholder="Your username" minlength="4" maxlength="24" value="" required>
                    </div>
                <div class="form-group mb-3 position-relative">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" class="text-warning form-control mt-2" name="password" id="password" placeholder="Your password" minlength="6" maxlength="24" required>
                        <i id="toggle-password" class="bi bi-eye toggle-password position-absolute top-50 end-2 translate-middle-y"></i></div>
                    </div>
                <div class="form-group mb-3 position-relative">
                    <label for="password2">Confirm Password</label>
                    <div class="password-container">
                        <input type="password" name="password2" id="password2" class="text-warning form-control mt-2" placeholder="Confirm password" minlength="6" maxlength="24" required>
                        <i id="toggle-password2" class="bi bi-eye toggle-password position-absolute top-50 end-2 translate-middle-y"></i></div>
                    </div>
                <div class="form-group mb-3">
                    <label for="referral">Referral Code</label>
                    <input type="text" name="referral" id="referral" class="text-info form-control mt-2" placeholder="Referral code" value="" maxlength="25" required>
                    </div>
                <input type="hidden" name="ip" value="Mozilla/5.0 (Linux; Android 9; Redmi 6A Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/126.0.6478.71 Mobile Safari/537.36" required>
                <div class="form-group mb-2 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-outline-warning"><i class="bi bi-box-arrow-in-right"></i> Register</button>
                    <a href="/login" class="btn btn-outline-warning">Login</a></div>
                </form>            </div></div>
</div></div><script>
    document.addEventListener('keydown', function (e) {
        if (e.key === ' ' && e.target.tagName === 'INPUT' && e.target.type !== 'checkbox') {
            e.preventDefault();
        }});
    window.onload = function() {
        var togglePassword = function(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.getElementById(iconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("bi-eye");
                eyeIcon.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("bi-eye-slash");
                eyeIcon.classList.add("bi-eye");
            } };
        document.getElementById("toggle-password").addEventListener("click", function() {
            togglePassword("password", "toggle-password");
        });
        document.getElementById("toggle-password2").addEventListener("click", function() {
            togglePassword("password2", "toggle-password2");
        });};
</script>
            </div>
<?= $this->endSection() ?>