<style>
    .alert-danger {
        color: red;

    }

    .form-group {
        display: flex;
        flex-direction: column;

    }

    .form-label {
        display: flex;
        align-items: center;
    }

    .form-control {
        height: 15px;
        margin-left: 5px;
    }
</style>

<h2><?= esc($title) ?></h2>


<?php $val = set_value('username') ?>

<form action="/news/insert" method="post">

    <?= csrf_field() ?>

    <div class="form-group">
        <div class="form-label">
            <div>
                <h5>Username</h5>
            </div>
            <?= form_input(["name" => "username", "value" => "{$val}", "size" => "50", "required" => true, "class" => "form-control"]) ?>
        </div>
        <div class="alert-danger">
            <?= validation_show_error('username') ?>
        </div>
    </div>

    


    <div class="form-group">
        <div class="form-label">
            <div>
                <h5>Password</h5>
            </div>
                <input type="password" name="password"  class="form-control" value="<?= set_value('password') ?>" size="50" required />
        </div>
        <div class="alert-danger">
            <?= validation_show_error('password') ?>
        </div>
    </div>


    


    <div class="form-group">
        <div class="form-label">
            <div>
                <h5>Password Confirm</h5>
            </div>
            <?= form_password(["name" => "passconf", "value" => "", "size" => "50", "type" => "password", "required" => true , "class" => "form-control"]) ?>
        </div>
        <div class="alert-danger">
            <?= validation_show_error('passconf') ?>
        </div>
    </div>


  

    <div class="form-group">
        <div class="form-label">
            <div>
                 <h5>Email Address</h5>
            </div>
                 <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" size="50" />
        </div>
        <div class="alert-danger">
            <?= validation_show_error('email') ?>
        </div>
    </div>

    <div><input type="submit" value="Submit" /></div>


</form>