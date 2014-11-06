<div style="width: 320px; margin: 0 auto;">
   <h3>Login <?php echo $_nama; ?></h3>
   <? if (!empty($error)): ?>
      <div class="alert alert-error">
         <b>Error!</b> <?= $error ?>
      </div>
   <? elseif (!empty($info)): ?>
      <div class="alert alert-info">
         <b>Info.</b> <?= $info ?>
      </div>
   <? endif; ?>
   <form class="well" method="POST">
      <label>Username</label>
      <input type="text" name="username" style="width: 260px;" 
         <? if (!empty($username)): ?> 
         value="<?= $username ?>" <? endif; ?> placeholder="Entry UserID....">
      <label>Password</label>
      <input type="password" name="password" style="width: 260px;" placeholder="Entry Password...">
      <button type="submit" class="btn btn-primary">Login</button>
   </form>
</div>
