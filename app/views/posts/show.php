<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?=URLROOT?>/posts" class="btn"><i class="fa fa-backward"></i> Back</a>
<br>
<h2>
    <?=$data['post']->title?>
</h2>
<div class="bg-secondary text-white p-2 mb-3">
    Written by <?=$data['user']->name?> on <?=$data['post']->created_at?>
</div>
<p>
    <?php echo $data['post']->body?>
</p>
<?php if($data['post']->user_id == $_SESSION['user_id']) :?>
<hr>
<a href="<?=URLROOT?>/posts/edit/<?=$data['post']->id?>" class="btn btn-dark">Edit</a>
<form class="float-end" action="<?=URLROOT?>/posts/delete/<?=$data['post']->id?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
<?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>