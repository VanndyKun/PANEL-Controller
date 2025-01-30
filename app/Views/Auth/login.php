<?= $this->extend('Layout/Starter') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center pt-5">
    <div class="col-lg-4">
        <?= $this->include('Layout/msgStatus') ?>
        <div class="card shadow-sm mb-5">
            <div class="card-header h5 p-3">
                Login
            </div>
            <div class="card-body">
                <?= form_open() ?>

                 <div class="card-body">
                <form action="/login" method="post" accept-charset="utf-8">
<!--<input type="hidden" name="csrf_test_name" value="f17b5372505ea094e08aca6c53290296"/>-->
                    <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="text-info form-control mt-2" name="username" id="username" placeholder="Your username" minlength="4" maxlength="24" value="" required>
                                        <?php if ($validation->hasError('username')) : ?>
                        <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                    <?php endif; ?>
                    </div>
                <div class="form-group mb-3 position-relative">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" class="text-warning form-control mt-2" name="password" id="password" placeholder="Your password" minlength="4" maxlength="24" required>
                                            <?php if ($validation->hasError('password')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif; ?>
                        <i id="toggle-password" class="bi bi-eye toggle-password position-absolute top-50 end-2 translate-middle-y"></i></div>
                    </div>
                <input type="hidden" name="ip" value="Mozilla/5.0 (Linux; Android 9; Redmi 6A Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/126.0.6478.71 Mobile Safari/537.36" required>
                <div class="form-group mb-2 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-outline-warning"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                    <a href="/register" class="btn btn-outline-warning">Register</a></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            </div>
<?= $this->endSection() ?>