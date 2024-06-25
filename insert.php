<?php
    include("includes/header.inc");
?>

<body>
<?php
    include("includes/navi.inc");
?>

    <div class="insert">
        <form action="insertpost.php" method="post" enctype="multipart/form-data">
            <label for="name">First Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <br>
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <br>
            <label for="venue">Venue:</label>
            <input type="venue" id="venue" name="venue">
            <br>
            <br>
            <label for="topic">Topic:</label>
            <input type="topic" id="topic" name="topic">
            <br>
            <br>
            <label for="details">Details:</label>
            <input type="details" id="details" name="details">
            <br>
            <br>
            <label for="photo">Insert image:</label>
            <input type="file" id="photo" name="photo" accept="photo/*">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
    <?php
    include("includes/footer.inc");
    ?>