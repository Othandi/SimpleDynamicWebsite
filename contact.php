<?php
    include("includes/header.inc");
?>

<body>
<?php
    include("includes/navi.inc");
?>
<!--Contact Form-->

        <section class="maincontent">
            <h4>If you have any questions or inquiries, feel free to fill up the form below.</h4>
        </section>
        <div class="form">
            <form>
                <label>First Name </label><br>
                <input type="text" required><br>
                <label>Last Name </label><br>
                <input type="text" required><br>
                <label>Country </label><br>
                <input type="text" required><br>
                <label for="concern">Type of Concern</label><br>
                <select name="concern" id="concern">
                        <option value="SMN">Events</option>
                        <option value="PT">Public Transport</option>
                        <option value="AV">Accessible Victoria</option>
                        <option value="VIC">Visitor Information Centres</option>
                        <option value="TP">Terms and Policies</option> 
                </select><br>

                <label>Please describe your concerns below:</label><br>
                <textarea> </textarea><br>
                <button type="submit">Submit</button><br>
            </form>
        </div>
    </body>
    <?php
    include("includes/footer.inc");
    ?>