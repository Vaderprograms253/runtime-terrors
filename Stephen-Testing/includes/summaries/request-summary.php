


<form id="request-confirm-form" class="summaryForm" action="" method="post">
    <!-- Employee Info -->
    <div class="row">
        <div class="col-12">
            <div class="border-bottom border-dark mb-3 mx-auto">
                <h3 class="mt-2">Employee Info</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <?php echo "<p class='d-block mb-1'>$fname $lname</p><p class='d-block'>$email</p>"; ?>
        </div>
        <div class="col-7">
            <?php echo "<p>$message</p>"; ?>
        </div>
    </div>

    <!-- Summary Header -->
    <div class="row">
        <div class="col-12">
            <div class="border-bottom border-dark mb-3 mx-auto">
                <h3 class="mt-2">Summary</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Current:</h4>
        </div>
        <div class="col-6">
            <h4>Request:</h4>
        </div>
    </div>


    <!-- Organization -->
    <div class="row">
        <div class="col-6"><!-- BEFORE -->
            <h5><?php echo $orgBefore; ?></h5>
        </div>
        <div class="col-6"><!-- AFTER -->
            <h5><?php echo $org; ?></h5>
        </div>
    </div>


    <!-- Location -->
    <div class="row">
        <div class="col-6"> <!-- BEFORE -->
            <p><?php echo $locationBefore; ?></p>
        </div>
        <div class="col-6"> <!-- AFTER -->
            <p><?php echo $location; ?></p>
        </div>
    </div>


    <!-- Medical Records -->
    <div class="row">
        <div class="col-6"><h5>Medical Records</h5></div>
        <div class="col-6"><h5>Medical Records</h5></div>
    </div>
    <div class="row">
        <div class="col-6"> <!-- BEFORE -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $medPhoneBefore; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $medFaxBefore; ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $medPhone; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $medFax; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Film Library -->
    <div class="row">
        <div class="col-6"><h5>Film Library</h5></div>
        <div class="col-6"><h5>Film Library</h5></div>
    </div>
    <div class="row">
        <div class="col-6"><!-- BEFORE -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $filmPhoneBefore; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $filmFaxBefore; ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $filmPhone; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $filmFax; ?></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Image Types -->
    <div class="row">
        <div class="col-6"> <!-- BEFORE -->
            <h5>Image Types</h5>
            <p><?php
                if ($imageTypesBefore[0] !== "") {
                    $lastIndex = count($imageTypesBefore) -1;
                    for ($imageType = 0; $imageType < $lastIndex; $imageType++) {
                        echo "$imageTypesBefore[$imageType], ";
                    }
                    echo "$imageTypesBefore[$lastIndex]";
                }
                ?></p>
        </div>
        <div class="col-6"> <!-- AFTER -->
            <h5>Image Types</h5>
            <p><?php
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
    <!-- Push Images -->
    <div class="row">
        <div class="col-6"> <!-- BEFORE -->
            <h5>Push Images?</h5>
            <p><?php echo $pushBefore; ?></p>
        </div>
        <div class="col-6"> <!-- AFTER -->
            <h5>Push Images?</h5>
            <p><?php echo $push; ?></p>
        </div>
    </div>


    <!-- OPTIONS -->
    <div class="row mt-4">
        <div class="col-12">
            <button type="button" class="btn btn-secondary d-inline" data-dismiss="modal">Cancel</button>
            <button id="request-add-edit-btn" type="button" class="submit-changes btn d-inline text-white">Make Additional Edits</button>
            <button type="submit" class="submit-changes btn d-inline text-white">Send Request</button>
        </div>
    </div>
</form>