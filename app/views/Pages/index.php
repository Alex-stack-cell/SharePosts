<?php require APPROOT.'/views/inc/header.php'?>
<div class="p-5 mb-4 bg-light border rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-3"><?= $data['title']?></h1>
        <p class="lead"><?php echo $data['description']?></p>
    </div>
</div>
<?php require APPROOT.'/views/inc/footer.php'?>