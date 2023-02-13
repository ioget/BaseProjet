<style>
    .alert-danger
    {
        color: red;
    }
 
</style>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>



<form action="/news/create" method="post">
    <!-- protection des attaques ----->
    <?= csrf_field() ?>

    <label for="title">Title</label>
       <input type="input" name="title" value="<?= set_value('title') ?>"> <br/>
       <div class="alert-danger">
           <?= validation_show_error('title') ?>
        </div> 
    <br>

    <label for="body">Text</label>
        <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea> <br/>
        <div class="alert-danger">
           <?= validation_show_error('body') ?>
        </div> 
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>



