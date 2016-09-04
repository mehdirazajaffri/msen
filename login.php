<?php
include"include/header.php";
?>

<br>
<br>
<br>
<form action="loginphp.php" method="post" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">Email</label>
            <div class="col-xs-6">
                <input type="email" name="username" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Password</label>
            <div class="col-xs-6">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox">Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </fieldset>
</form>
