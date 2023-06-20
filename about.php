<!DOCTYPE html>
<html lang="en">
<?php include "./common/header.php" ?>
<body>

<div class="circle one"></div>
<div class="circle two"></div>

    <?php include "./common/topnav.php" ?>

    <div style="height: 50px;"></div>
    <h2 class ="title subtitle"> Find your community </h2>
    <div style="height: 50px;"></div> 


<div class="container">
    <div class="row">
        <div class="card">
            <div class="border"></div>
            <div class="filter" href="/share.php"></div>
            <img src="https://www.redditinc.com/assets/images/site/reddit-logo.png" alt="Reddit Logo" width="150" height="150">
        <p>Reddit</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>
    
        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/636e0a69f118df70ad7828d4_icon_clyde_blurple_RGB.svg" alt="Discord Logo" width="150" height="150">
        <p>Discord</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>
        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#1D9BF0" width="150" height="150" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="none" class="u01b__icon-home"> 
                <path opacity="0" d="M0 0h24v24H0z"></path> 
                <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path> 
            </svg>
        <p>Twitter</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>
    </div>
  
    <div class="row">
        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube Logo" width="150" height="150">
        <p>YouTube</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>

        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
        <p>By the Desmos Community.<br><br>For the Desmos Community.</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>

        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="FaceBook Logo" width="150" height="150">
        <p>FaceBook</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>


    </div>
 
    <div class="row">
        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/2wPYyq9Ejn4.png" alt="Instagram Logo" width="150" height="150">
        <p>Instagram</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>

        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png" alt="TikTok Logo" width="150" height="150">
        <p>TikTok</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>

        <div class="card">
            <div class="border"></div>
            <div class="filter"></div>
            <img src="https://cdn-icons-png.flaticon.com/512/733/733609.png" alt="GitHub Logo" width="150" height="150">
        <p>GitHub</p>
            <div class="shadow"></div>
            <div class="backdrop"></div>
        </div>

    </div>

</div>

<svg>
  <filter id='noiseFilter'>
    <feTurbulence 
      type='fractalNoise' 
      baseFrequency='0.6' 
      stitchTiles='stitch'/>
  </filter>
</svg>

<svg>
  <filter id='noiseFilter2'>
    <feTurbulence 
      type='fractalNoise' 
      baseFrequency='0.6' 
      stitchTiles='stitch'/>
  </filter>
  <clipPath id="rounded-clip">
        <rect x="0" y="0" width="300" height="300" rx="20" ry="20"/>
  </clipPath>
</svg>

<svg>
  <filter id='noiseFilter3'>
    <feTurbulence 
      type='fractalNoise' 
      baseFrequency='0.6' 
      stitchTiles='stitch'/>
  </filter>
  <clipPath id="rounded-clip2">
        <rect x="0" y="0" width="230" height="70" rx="20" ry="20"/>
  </clipPath>
</svg>

<button id="open-dialog-btn">Open Dialog</button>

<dialog id="my-dialog">
  <h2>Dialog Title</h2>
  <p>This is the content of the dialog.</p>
  <button id="close-dialog-btn">Close</button>
</dialog>

<script>
  var dialog = document.getElementById('my-dialog');
  var openBtn = document.getElementById('open-dialog-btn');
  var closeBtn = document.getElementById('close-dialog-btn');

  openBtn.addEventListener('click', function() {
    dialog.showModal();
  });

  closeBtn.addEventListener('click', function() {
    dialog.close();
  });
</script>



</body>
</html>