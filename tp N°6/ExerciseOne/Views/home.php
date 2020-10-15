<?php 
    include_once('header.php');
?>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1>Cellphones</h1>
    </div>
    <!-- <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a class="drop" href="#">Actions</a>
          <ul>
            <li><a href="">ADD</a></li>
            <li><a href="">LIST/REMOVE</a></li>
      </ul>
    </nav> -->
  </header>
</div>
<div class="wrapper row2 bgded" style="background-image:url('./Views/img/cool.jpg');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="#">WELCOME</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- #######################################################################3 -->
<div class="wrapper row3 img-login">
  <div class="div-login"><br>
    <h1 class="text-login">LOGIN TO MANAGE</h1>
</div>
  <div class="div-login">  
    <form action="<?php echo FRONT_ROOT."Home/Login"?>" method="post">
        <input class="input-login" type="text" name="username" placeholder="Nombre Usuario" required>
        <input class="input-login" type="password" name="password" placeholder="Contraseña" required>
        <button class="btn-login btn" type="submit" name="btnLogin">Ingresar</button>
      </form>
  </div>
</div>






<?php 
if(isset($message))
{
?>
<div class="alert alert-danger" role="alert">
<?php echo $message?>
</div>
<?php }  ?>