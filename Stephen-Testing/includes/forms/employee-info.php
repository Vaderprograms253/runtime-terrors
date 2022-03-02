<?php

function getEmployeeInfoForm() {
    return '<!-- Form to get Employee Info for Request -->
            <div class="form-group">
                <div class="row">
                    <div class="col-12"><h4>Employee Info:</h4></div>
                    
                    <div class="col-6">
                        <label for="request-fname">First Name:</label>
                        <input type="text" class="form-control" id="request-fname" name="request-fname">
                        <span class="err" id="request-err-fname">*First Name is required</span>
                    </div>
                    <div class="col-6">
                        <label for="request-lname">Last Name:</label>
                        <input type="text" class="form-control" id="request-lname" name="request-lname">
                        <span class="err" id="request-err-lname">*Last Name is required</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="request-email">Email:</label>
                        <input type="text" class="form-control" id="request-email" name="request-email">
                        <span class="err" id="request-err-email">*Email is required</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="request-message">Message:</label>
                        <textarea type="text" class="form-control" id="request-message" name="request-message"></textarea>
                    </div>
                </div>
            </div>';
}