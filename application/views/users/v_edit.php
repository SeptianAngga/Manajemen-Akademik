<h2>Edit User</h2>
<?php foreach ($users as $u): ?>
<form action="<?= site_url('users/update') ?>" method="post">
    <input type="hidden" name="id" value="<?= $u->id ?>">
    Username: <input type="text" name="username" value="<?= $u->username ?>"><br>
    Password: <input type="password" name="password" value="<?= $u->password ?>"><br>
    Email: <input type="text" name="email" value="<?= $u->email ?>"><br>
    <input type="submit" value="Update">
</form>
<?php endforeach ?>
