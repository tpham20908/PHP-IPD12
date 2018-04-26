<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center" style="background-image: url('https://images.unsplash.com/photo-1503900311769-9f25e9f06068?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=06a1037d8bae296720cc24369d7090d6&auto=format&fit=crop&w=1506&q=80'); color: white; min-height: 520px;">
    <div class="container">
        <h1><?php echo $data["title"]; ?></h1>
        <p class="lead"><?php echo $data["description"]; ?></p>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

