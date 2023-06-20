<!DOCTYPE html>
<html lang="en">
<?php include "./common/header.php" ?>

<body>
  <main>
      
      
<div class="circle one"></div>
<div class="circle two"></div>


      <?php include "./common/topnav.php" ?>
        <h1 class ="title" style="margin-top: 20px;" >DesGraph</h1>
      <a href="https://github.com/DesmoSearch" target="_blank" style="text-decoration: none">
        <h2 class ="title subtitle"> DesmoSearch </h2>
      </a>
      <a href="https://github.com/DesModder/DesModder" target="_blank" style="text-decoration: none">
        <h2 class ="title subtitle"> DesModder </h2>
      </a>

<div style="height: 50px;"></div>


<div class="container">
  <div class="row">
    <div class="card">
      <div class="border"></div>
      <div class="filter" href="/share.php"></div>
      <h2>Share/Search</h2>
      <p>Share your graphs to others!<br>Search for other people's creations<br><br>--WIP--</p>
      <div class="shadow"></div>
      <div class="backdrop"></div>
    </div>

    <div class="card">
      <div class="border"></div>
      <div class="filter"></div>
      <h2>Wiki</h2>
      <p>Learn more about Desmos<br>from various sources. <br><br>--WIP--</p>
      <div class="shadow"></div>
      <div class="backdrop"></div>
    </div>
 </div>
  
 <div class="row">
   <div class="card">
     <div class="border"></div>
     <div class="filter"></div>
    <h2>Community</h2>
    <p>Bringing the Desmos<br>community together.<br><br><br></p>
     <div class="shadow"></div>
     <div class="backdrop"></div>
  </div>
  
  <div class="card">
    <div class="border"></div>
    <div class="filter"></div>
    <h2>DesModder</h2>
    <p>Try out the latest preview<br>builds of DesModder<br><br>--WIP--</p>
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


  </main>


</body>

</html>