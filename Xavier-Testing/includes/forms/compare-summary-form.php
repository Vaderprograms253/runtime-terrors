<form id="<?php echo $summaryIDPrefix; ?>-confirm-form" class="summaryForm" action="<?php echo $summaryFormAction; ?>" method="post">

    <!-- Used to display employee info -->
    <?php echo $summaryExtra; ?>

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
            <h4><?php echo $summaryOldHeader; ?></h4>
        </div>
        <div class="col-6">
            <h4><?php echo $summaryNewHeader; ?></h4>
        </div>
    </div>


    <!-- Organization -->
    <div class="row">
        <div class="col-6"><!-- BEFORE -->
            <p class="text-center"><?php echo $orgBefore; ?></p>
        </div>
        <div class="col-6"><!-- AFTER -->
            <p class="text-center"><?php echo $org; ?></p>
        </div>
    </div>


    <!-- Location -->
    <div class="row">
        <div class="col-6"> <!-- BEFORE -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Location:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo $locationBefore; ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
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
                    <p class="text-right"><?php echo formatPhoneNum($medPhoneBefore); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($medFaxBefore); ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
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
        <div class="col-6"><h5>Film Library</h5></div>
    </div>
    <div class="row">
        <div class="col-6"><!-- BEFORE -->
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Phone:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($filmPhoneBefore); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="d-block">Fax:</p>
                </div>
                <div class="col-9">
                    <p class="text-right"><?php echo formatPhoneNum($filmFaxBefore); ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
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
        <div class="col-6"> <!-- BEFORE -->
            <div class="row">
                <div class="col-6 pr-1">
                    <p>Image Types:</p>
                </div>
                <div class="col-6 pl-2">
                    <p class="text-right"><?php
                        $startPoint = 0;
                        $lastIndex = count($imageTypesBefore);
                            for ($imageType = 0; $imageType < $lastIndex; $imageType++) {
                                if ($imageTypesBefore[$imageType] !== "") {
                                    echo "$imageTypesBefore[$imageType]";
                                    $startPoint = $imageType + 1;
                                    break;
                                }
                            }
                            for ($imageType = $startPoint; $imageType < $lastIndex; $imageType++) {
                                if ($imageTypesBefore[$imageType] !== "") {
                                    echo ", $imageTypesBefore[$imageType]";
                                }
                            }
                        ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
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
        <div class="col-6"> <!-- BEFORE -->
            <div class="row">
                <div class="col-8">
                    <p>Push Images?</p>
                </div>
                <div class="col-4">
                    <p class="text-right"><?php echo $pushBefore; ?></p>
                </div>
            </div>
        </div>
        <div class="col-6"> <!-- AFTER -->
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

    <!-- Value to tell the server that the form submitted -->
    <input type="hidden" name="<php echo $summaryIDPrefix; ?>-submit-status" value="true">
    <input type="hidden" name="formName" value="<?php echo $summaryIDPrefix; ?>-summary">

    <!-- OPTIONS -->
    <div class="row mt-4">
        <div class="col-12">
            <button type="button" class="btn btn-secondary d-inline" data-dismiss="modal">Cancel</button>
            <button id="<?php echo $summaryIDPrefix; ?>-add-edit-btn" type="button" class="submit-changes btn d-inline text-white">Make Additional Edits</button>
            <button type="submit" class="submit-changes btn d-inline text-white"><?php echo $summarySubmitText; ?></button>
        </div>
    </div>
</form>