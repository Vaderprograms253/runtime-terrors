<!--
    Set the following Variables before include():

    $modalID            used to identify modal in JavaScript
    $formIDPrefix       unique prefix to assign to form ids
    $modalHeader        Header displayed at the top of modal
    $formAction         address to link form to
    $formMethod         method used to pass form data
    $additionalFields   place to add extra inputs to form
    $formSubmitText     text displayed on submit button
-->

<div class="modal" id="<?php echo $modalID; ?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3><?php echo $modalHeader; ?></h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <form id="<?php echo $formIDPrefix; ?>-form" action="<?php echo $formAction; ?>" method="<?php echo $formMethod; ?>">
                    <!-- ORGANIZATION -->
                    <div class="form-group">
                        <label for="<?php echo $formIDPrefix; ?>-organization">Organization:</label>
                        <input type="text" class="form-control" id="<?php echo $formIDPrefix; ?>-organization"
                               name="<?php echo $formIDPrefix; ?>-organization">
                        <div class="err" id="<?php echo $formIDPrefix; ?>-err-organization">*Required</div>
                    </div> <!-- Organization -->

                    <!-- LOCATION -->
                    <div class="form-group">
                        <label for="<?php echo $formIDPrefix; ?>-location">Location:</label>
                        <input type="text" id="<?php echo $formIDPrefix; ?>-location" class="form-control"
                               name="<?php echo $formIDPrefix; ?>-location" list="<?php echo $formIDPrefix; ?>-location-list">
                        <datalist class="d-none" id="<?php echo $formIDPrefix; ?>-location-list">
                            <option>Bellevue, WA</option>
                            <option>Edmonds, WA</option>
                            <option>Issaquah, WA</option>
                            <option>Seattle, WA</option>
                            <option>Tacoma, WA</option>
                        </datalist>
                    </div> <!-- Location -->

                    <!-- PHONE AND FAX -->
                    <div class="form-group">

                        <!-- Headers -->
                        <div class="row">
                            <div class="col-6">
                                <h4>Medical Records</h4>
                            </div>
                            <div class="col-6">
                                <h4>Film Library</h4>
                            </div>
                        </div>

                        <!-- Phone numbers -->
                        <div class="row">
                            <!-- ===== MEDICAL RECORDS ===== -->
                            <div class="col-6">
                                <!-- Phone -->
                                <label for="<?php echo $formIDPrefix; ?>-med-phone">Phone:</label>
                                <input type="tel" class="form-control mb-2" id="<?php echo $formIDPrefix; ?>-med-phone"
                                       placeholder="(---) --- ----" name="<?php echo $formIDPrefix; ?>-med-phone">
                                <!-- Fax -->
                                <label for="<?php echo $formIDPrefix; ?>-med-fax">Fax:</label>
                                <input type="tel" class="form-control" id="<?php echo $formIDPrefix; ?>-med-fax"
                                       placeholder="(---) --- ----" name="<?php echo $formIDPrefix; ?>-med-fax">
                                <!-- Inline Error Message for Medical Records -->
                                <span class="err" id="<?php echo $formIDPrefix; ?>-err-direct-line">
                                    *Please enter both Phone and Fax</span>
                            </div> <!-- Medical Records -->

                            <!-- ===== FILM LIBRARY ===== -->
                            <div class="col-6">
                                <!-- Phone -->
                                <label for="<?php echo $formIDPrefix; ?>-film-phone">Phone:</label>
                                <input type="tel" class="form-control mb-2" id="<?php echo $formIDPrefix; ?>-film-phone"
                                       placeholder="(---) --- ----" name="<?php echo $formIDPrefix; ?>-film-phone">
                                <!-- Fax -->
                                <label for="<?php echo $formIDPrefix; ?>-film-fax">Fax:</label>
                                <input type="tel" class="form-control" id="<?php echo $formIDPrefix; ?>-film-fax"
                                       placeholder="(---) --- ----" name="<?php echo $formIDPrefix; ?>-film-fax">
                                <!-- Inline Error Message for Film Library -->
                                <span class="err" id="<?php echo $formIDPrefix; ?>-err-film-library">
                                    *Please enter both Phone and Fax</span>
                            </div> <!-- Film Library -->
                        </div> <!-- Row -->
                        <span class="err" id="<?php echo $formIDPrefix; ?>-err-medical-film">
                            *Please enter both Phone and Fax for Medical Records or Film Library</span>
                    </div> <!-- Phone/Fax Group -->

                    <!-- PUSH IMAGES -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6"><h4>Image Type</h4></div><!-- Image type checkbox selection -->
                            <div class="col-6"><h4>Push Images?</h4></div>
                        </div>

                        <div class="row">
                            <!-- Image type checkbox selection -->
                            <div class="col-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="XR" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="X-ray">XR</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="US" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="Ultrasound">US</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="MRI" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="Magnetic Resonance Imaging">MRI</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="CT" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="CT Scan">CT</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="MG" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="Mammogram">MG</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="PATH" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="Pathology/ Labs">PATH</abbr>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="DEXA" name="<?php echo $formIDPrefix; ?>-image-types[]"><abbr title="Bone Density Scan">DEXA</abbr>
                                    </label>
                                </div>
                                <div class="err" id="<?php echo $formIDPrefix; ?>-err-image-type">*Please select at least one image type</div>
                            </div>

                            <!-- Push Images -->
                            <div class="col-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="<?php echo $formIDPrefix; ?>-push-yes"
                                           name="<?php echo $formIDPrefix; ?>-push" class="custom-control-input"
                                           value="yes">
                                    <label class="custom-control-label" for="<?php echo $formIDPrefix; ?>-push-yes">Yes</label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="<?php echo $formIDPrefix; ?>-push-no"
                                           name="<?php echo $formIDPrefix; ?>-push" class="custom-control-input"
                                           value="no">
                                    <label class="custom-control-label" for="<?php echo $formIDPrefix; ?>-push-no">No</label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="<?php echo $formIDPrefix; ?>-push-no*"
                                           name="<?php echo $formIDPrefix; ?>-push" class="custom-control-input"
                                           value="no*">
                                    <label class="custom-control-label" for="<?php echo $formIDPrefix; ?>-push-no*">No*</label>
                                </div>
                                <div class="err" id="<?php echo $formIDPrefix; ?>-err-push-image">*Please select an option</div>
                            </div> <!-- Push img col-6 -->
                        </div> <!-- Row -->
                    </div> <!-- Images Form Group -->


                    <!-- PLACE FOR EXTRA FIELDS (EMPLOYEE INFO) -->
                    <?php echo $additionalFields; ?>

                    <!-- PLACE FOR ORIGINAL DATA TO BE PASSED TO SERVER -->
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-organization" name="<?php echo $formIDPrefix; ?>-ori-organization">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-location" name="<?php echo $formIDPrefix; ?>-ori-location">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-med-phone" name="<?php echo $formIDPrefix; ?>-ori-med-phone">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-med-fax" name="<?php echo $formIDPrefix; ?>-ori-med-fax">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-film-phone" name="<?php echo $formIDPrefix; ?>-ori-film-phone">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-film-fax" name="<?php echo $formIDPrefix; ?>-ori-film-fax">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-push" name="<?php echo $formIDPrefix; ?>-ori-push">

                    <!-- Image Types -->
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-xr" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-us" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-mri" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-ct" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-mg" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-path" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">
                    <input type="hidden" id="<?php echo $formIDPrefix; ?>-ori-image-dexa" name="<?php echo $formIDPrefix; ?>-ori-image-types[]">

                    <!-- Name used to identify most recently submitted form -->
                    <input type="hidden" name="formName" value="<?php echo $formIDPrefix; ?>">

                    <!-- FORM BUTTONS -->
                    <div class="btn-submit mt-4">
                        <button type="button" class="btn btn-secondary d-inline" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="submit-changes btn display-2 text-white"><?php echo $formSubmitText; ?></button>
                    </div>
                </form>
            </div> <!-- Modal body -->
        </div> <!-- Modal content -->
    </div> <!-- dialog -->
</div> <!-- Modal -->