<?php 
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me and email</p>
        <form method="post">
            <label for="name">Name</label><input type="text" name="name" id="name" />
        </form>
    </div>
</div>

<?php include("inc/footer.php"); ?>