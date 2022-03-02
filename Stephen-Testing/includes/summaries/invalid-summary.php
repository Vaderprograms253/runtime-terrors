<!--
    $errors     list of errors

-->
<form>
    <!-- HEADER -->
    <div class="row">
        <div class="col-12">
            <h3>SUMMARY</h3>
        </div>
    </div>

    <!-- DISPLAY ERRORS -->
    <div class="row">
        <div class="col-12">
            <?php
            // Display each error in the list
            foreach ($errors as $error) {
                echo "<p>$error</p>\n";
            }
            ?>
        </div>
    </div>

    <!-- CANCEL OR EDIT REQUEST -->
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn-secondary">Cancel</button>
            <button id="request-add-edit-btn" type="submit" class="submit-changes">Make Additional Edits</button>
        </div>
    </div>

</form>