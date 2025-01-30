<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= BASE_NAME ?> - <?= isset($title) ? $title : 'Panel' ?></title>
    <?= $this->renderSection('css') ?>

    <?= link_tag('assets/css/natacode.css') ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Start menu -->
    <?= $this->include('Layout/Header') ?>
    <!-- End of menu -->
    <main>
               <!-- Start content -->
               
                        <style>
    .password-container {
        position: relative;
    }
    .password-container input[type="password"] {
        padding-right: 40px; 
    }
    .password-container .toggle-password {
        position: absolute;
        top: 45%;
        right: 10px;
        cursor: pointer;
        background: transparent;
        border: none;
        z-index: 2;
    }
</style>
               
            <?= $this->renderSection('content') ?>

            <!-- End of content -->
        </div>
    </main>
 <footer class="border-top py-3 text-center" style="background-color: white;">

        <div class="container">
            <small style="color: black;">© <span id="liveDateTime"></span> </small>


<script>
function ordinalSuffix(i) {
    var j = i % 10,
        k = i % 100;
    if (j == 1 && k != 11) {
        return i + "st";
    }
    if (j == 2 && k != 12) {
        return i + "nd";
    }
    if (j == 3 && k != 13) {
        return i + "rd";
    }
    return i + "th";
}

function updateDateTime() {
    var now = new Date();
    var day = ordinalSuffix(now.getDate());
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var month = monthNames[now.getMonth()];
    var year = now.getFullYear();
    var time = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true });
    var dateTimeString = day + ' ' + month + ' ' + year + ' - ' + time;
    document.getElementById('liveDateTime').textContent = dateTimeString;
}

// Update the date/time immediately, then set an interval to update every second
updateDateTime();
setInterval(updateDateTime, 1000);
</script>

        </div> 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.0/sweetalert2.all.min.js" integrity="sha512-0UUEaq/z58JSHpPgPv8bvdhHFRswZzxJUT9y+Kld5janc9EWgGEVGfWV1hXvIvAJ8MmsR5d4XV9lsuA90xXqUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="assets/js/natacode.js" type="text/javascript"></script>
    
    <?= script_tag('assets/js/natacode.js') ?>

<script>
     document.addEventListener('DOMContentLoaded', () => {

  var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");

   if(disclaimer){
       disclaimer.remove();
   }  
 });
       </script>    
       
       <div>
           
       </div>
       
         </nav>
    <div id="telegram-button-container">
        <a id="telegram-button" href="https://t.me/KunVanndy" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/240px-Telegram_logo.svg.png" alt="telegram" />
        </a>
    </div>
</header>

<style>

@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}

.blinking-text {
  animation: blink 1s infinite;
}

    #telegram-button-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    #telegram-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #0088cc;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    #telegram-button:hover {
        background-color: #006699;
    }

    #telegram-button img {
        width: 24px;
        height: 24px;
    }
</style>

<script>
    document.getElementById("telegram-button").addEventListener("click", function(e) {
        e.preventDefault();
        window.open("https://t.me/KunVanndy", "_blank");
    });
</script>
       

    <?= $this->renderSection('js') ?>

</body>

</html>