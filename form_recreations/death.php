<?php include '../layouts/_header.php' ?>
<div class="form-header-sticky bg-white py-2">
    <div class="d-flex">
        <div class="d-flex align-items-center">
            <span class="svg-icon svg-icon-primary svg-icon-2hx">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                        fill="currentColor" />
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                </svg>
            </span>
        </div>
        <div class="ms-5">
            <h1 class="">Request for Certification of Death</h1>
            <span class="form-label text-muted">
                Local Civil Register
            </span>
        </div>
    </div>
    <hr class="mb-0">
</div>

<form action="" class="mt-3">

    <!--=============================================== PUT YOUR CODE INSIDE THIS ===============================================-->

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Deceased:</label>

        <div class="col-lg-8">
            <div class="row">

            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="last_name" id="last-name"
                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name"
                        value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="first_name" id="first-name"
                        class="form-control form-control-lg form-control-solid" placeholder="First Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="middle_name" id="middle-name"
                        class="form-control form-control-lg form-control-solid" placeholder="Middle Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Place of Death:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="place_of_death" id="place-of-death"
                class="form-control form-control-lg form-control-solid" placeholder="Place of Death" value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Death:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="date" name="date_of_death" id="date-of-death"
                class="form-control form-control-lg form-control-solid" placeholder="Date of Death" value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Requester:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="requester_name" id="requester-name"
                class="form-control form-control-lg form-control-solid" placeholder="Requester" value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Relationship to the Deceased:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="rel_dec" id="rel-dec" class="form-control form-control-lg form-control-solid"
                placeholder="Relationship to the Deceased" value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Purpose:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="purpose" id="Purpose" class="form-control form-control-lg form-control-solid"
                placeholder="Purpose" value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <hr>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Remarks:</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <textarea class="form-control form-control-lg form-control-solid" name="remarks" id="Remarks" cols="30"
                rows="2"></textarea>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <!--=================================================== END OF YOUR CODE ===================================================-->

    <div class="separator my-10"></div>

    <div class="alert alert-primary d-flex align-items-center p-5">
        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor">
                </rect>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor">
                </rect>
            </svg>
        </span>

        <div class="d-flex flex-column">
            <h4 class="mb-1 text-primary">This is an alert</h4>
            <span><strong> Requester (in hierarchical order) can either be the spouse of the document owner (if married), with authorization letter - parent, sons/daughters of the deceased.</strong></span>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary mx-1 flex-grow-1">Submit Request</button>
    </div>

</form>
<?php include '../layouts/_footer.php' ?>