

<form id="add-confirm-form" class="summaryForm" action="processingDataEntry.php" method="post">

    <!-- Summary Header -->
    <div class="row">
        <div class="col-12">
            <div class="border-bottom border-dark mb-3 mx-auto">
                <h3>Summary</h3>
            </div>
        </div>
    </div>

    <!-- Organization -->
    <div class="row">
        <div class="col-12"><!-- AFTER -->
            <p class="text-center"><?php echo $org; ?></p>
        </div>
    </div>


    <!-- Location -->
    <div class="row">
        <div class="col-12"> <!-- AFTER -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Location:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $location; ?></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Medical Records -->
    <div class="row">
        <div class="col-12"><h5>Medical Records</h5></div>
    </div>
    <div class="row">
        <div class="col-12"> <!-- AFTER -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($medPhone); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($medFax); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Film Library -->
    <div class="row">
        <div class="col-6"><h5>Film Library</h5></div>
    </div>
    <div class="row">
        <div class="col-12"> <!-- AFTER -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($filmPhone); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($filmFax); ?></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Image Types -->
    <div class="row">
        <div class="col-12"> <!-- AFTER -->
            <div class="row">
                <div class="col-6 pr-1">
                    <p>Image Types:</p>
                </div>
                <div class="col-6 pl-2">
                    <p class="text-right"><?php
                        if ($imageTypes[0] !== "") {
                            $lastIndex = count($imageTypes) -1;
                            for ($imageType = 0; $imageType < $lastIndex; $imageType++) {
                                echo "$imageTypes[$imageType], ";
                            }
                            echo "$imageTypes[$lastIndex]";
                        }
                        ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Push Images -->
    <div class="row">
        <div class="col-12"> <!-- AFTER -->
            <div class="row">
                <div class="col-8">
                    <p>Push Images?</p>
                </div>
                <div class="col-4">
                    <p class="text-right"><?php echo $push; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Input to tell server that the new facility form was submitted -->
    <input type="hidden" name="formName" value="add-summary">


    <!-- PLACE FOR ORIGINAL DATA TO BE PASSED TO SERVER -->
    <input type="hidden" id="add-organization" name="add-organization" value="<?php echo $_POST["add-organization"];?>">
    <input type="hidden" id="add-location" name="add-location" value="<?php echo $_POST["add-location"];?>">
    <input type="hidden" id="add-med-phone" name="add-med-phone" value="<?php echo $_POST["add-med-phone"];?>">
    <input type="hidden" id="add-med-fax" name="add-med-fax" value="<?php echo $_POST["add-med-fax"];?>">
    <input type="hidden" id="add-film-phone" name="add-film-phone" value="<?php echo $_POST["add-film-phone"];?>">
    <input type="hidden" id="add-film-fax" name="add-film-fax" value="<?php echo $_POST["add-film-fax"];?>">
    <input type="hidden" id="add-push" name="add-push" value="<?php echo $_POST["add-push"];?>">

    <!-- Image Types -->
    <?php
        // Print an input for each Image type to reconstruct array on submission of summary
        foreach ($imageTypes as $type) {
            echo '<input type="hidden" name="add-image-types[]" value="'.$type.'">';
        }
    ?>




    <!-- OPTIONS -->
    <div class="row mt-4">
        <div class="col-12">
            <button type="button" class="btn btn-secondary d-inline" data-dismiss="modal">Cancel</button>
            <button id="<?php echo $summaryIDPrefix; ?>-add-edit-btn" type="button" class="submit-changes btn d-inline text-white">Make Additional Edits</button>
            <button type="submit" class="submit-changes btn d-inline text-white">Add Facility</button>
        </div>
    </div>
</form>