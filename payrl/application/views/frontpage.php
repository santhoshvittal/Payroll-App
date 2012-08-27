<div style="width: 320px; margin: 0 auto;">
   <div class='well'>
   <h3>Login</h3>
   </div>
   <!-- <? if (!empty($error)): ?> -->
      <div class="alert alert-error">
         <b>Error!</b> <?= $error ?>
      </div>
   <!-- <? elseif (!empty($info)): ?> -->
      <div class="alert alert-info">
         <b>Info.</b> <?= $info ?>
      </div>
   <!-- <? endif; ?> -->
   <form class="well" method="POST">
      <div class="alert alert-error">
         <b>Error!</b> 
      </div>
      <label>Username</label>
      <input type="text" name="username" style="width: 260px;" <? if (!empty($username)): ?> value="<?= $username ?>" <? endif; ?>>
      <label>Password</label>
      <input type="password" name="password" style="width: 260px;">
      <button type="submit" class="btn btn-inverse">Login</button>
   </form>
</div>
