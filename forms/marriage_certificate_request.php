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
            <!--=============================================== HEADER TITLE ===============================================-->
            <h1 class="">Request for Certification of Marriage</h1>
            <span class="form-label text-muted">
                Local Civil Registrar
            </span>
            <!--=========================================== END OF HEADER TITLE ============================================-->
        </div>
    </div>
    <hr class="mb-0">
</div>

<form action="" class="mt-3">

    <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Husband</label>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="husbands_first_name" id="husbands-first-name"
                        class="form-control form-control-lg form-control-solid" placeholder="Husband's First Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="husbands_middle_name" id="husbands-middle-name"
                        class="form-control form-control-lg form-control-solid" placeholder="Husband's Middle Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="husbands_last_name" id="husbands-last-name"
                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Husband's Last Name"
                        value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Wife</label>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="wifes_first_name" id="wifes-first-name"
                        class="form-control form-control-lg form-control-solid" placeholder="Wife's First Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="wifes_middle_name" id="wifes-middle-name"
                        class="form-control form-control-lg form-control-solid" placeholder="Wife's Middle Name" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="wifes_last_name" id="wifes-last-name"
                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Wife's Last Name"
                        value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- <hr> -->
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Place of Marriage</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="place_of_marriage" id="place-of-marriage"
                class="form-control form-control-lg form-control-solid" placeholder="Place of Marriage"
                value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <!-- <hr> -->
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Marriage</label>

        <div class="col-lg-8 fv-row">
            <input type="date" name="date_of_marriage" id="date-of-marriage"
                class="form-control form-control-lg form-control-solid" placeholder="Date of Marriage"
                value="">
        </div>
    </div>

    <div class="separator my-10"></div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Requester:</label>

        <div class="col-lg-8 fv-row">
            <select class="form-select form-control form-control-solid" aria-label="Default select example" name="requester" required="">
                <option selected="" value="" disabled>Requester</option>
                <option value="1">Document Owner</option>
                <option value="2">Spouse</option>
                <option value="3">Parent</option>
                <option value="3">Sons/Daughters</option>
                <option value="3">Authorized Representative of the Owner</option>
            </select>
            <div class="form-text text-end">
                If the requester is not the document owner him/herself, they must provide an authorization letter upon taking the requested document.
            </div>
        </div>
    </div>
    <!-- <hr> -->
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Purpose:</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="purpose" id="purpose"
                class="form-control form-control-lg form-control-solid" placeholder="Purpose" value="">
        </div>
    </div>
    <!-- <hr> -->
    <div class="row mb-8">
        <label class="col-lg-4 col-form-label fw-semibold fs-6">Remarks:</label>

        <div class="col-lg-8 fv-row">
            <textarea name="remarks" id="remarks" class="form-control form-control-lg form-control-solid w-100" rows="5" placeholder="Remarks..."></textarea>
        </div>
    </div>
    <!-- <hr> -->


        <!--=================================================== END OF YOUR CODE ==============================================-->

        <!--================================================ FORM ALERT ========================================================-->

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
                <h4 class="mb-1 text-primary">Note: </h4>
                <span>Requester can either be the document owner, spouse of owner (if married), with authorization letter - parent, sons/daughters or an authorized representative of the owner.</span>
            </div>
        </div>

        <!--============================================= END OF FORM ALERT ====================================================-->

        <!--=============================================== FORM BUTTONS ======================================================-->
        <div class="d-flex justify-content-center">
            <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
            <button type="submit" name="submit" value="submit" class="btn btn-primary mx-1 flex-grow-1">Submit Request.</button>
        </div>
        <!--=========================================== END OF FORM BUTTONS ===================================================-->
</form>
<?php include '../layouts/_footer.php' ?>