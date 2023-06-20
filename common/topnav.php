<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i>
  </div> 

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'index.php') ? 'active' : ''; ?>" 
    href="/index.php">
    <i class="fa fa-fw fa-home">
    </i> Home</a>
  </div>

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'share.php') ? 'active' : ''; ?>" 
    href="/share.php">
    <i class="	fa fa-share-alt">
    </i> Share</a>
  </div>

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'search.php') ? 'active' : ''; ?>"
    href="/search.php">
    <i class="fa fa-fw fa-search">
    </i> Search</a>
  </div>

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'wiki.php') ? 'active' : ''; ?>"
    href="/wiki.php">
    <i class="	fa fa-book">
    </i> Wiki</a>
  </div>

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'posts.php') ? 'active' : ''; ?>"
    href="/posts.php">
    <i class="fa fa-newspaper-o">
    </i> Posts & Updates</a>
  </div>

  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'about.php') ? 'active' : ''; ?>"
    href="/about.php">
    <i class="fa fa-info-circle">
    </i> About</a>
  </div>  
  
  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'desmodder.php') ? 'active' : ''; ?>"
    href="/desmodder.php"><span class="DesmodderIcon"></span> DesModder</a>
  </div>


  <div class="menu-item">
    <a class="<?php echo (basename($_SERVER['PHP_SELF']) === 'acount.php') ? 'active' : ''; ?> , split"
    href="#Account" >
    <i class="fa fa-user-circle">
    </i> Account</a>
  </div>

</div>
  