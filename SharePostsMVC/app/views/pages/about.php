<?php require APPROOT . '/views/inc/header.php'; ?>
<header class="masthead text-center" style="background-image: url('https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8aa38437c9b977558f5b430d68773742&auto=format&fit=crop&w=752&q=80'); color: white; min-height: 520px;">
    <div class="container pt-3">
        <h1><?php echo $data["title"]; ?></h1>
        <p><?php echo $data["description"]; ?></p>
    </div>
</header>

<?php require APPROOT . '/views/inc/footer.php'; ?>