<?php include '../layouts/_header.php'?>

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
                <h1 class="">Sample Title</h1>
                <span class="form-label text-muted">
                    Department Service
                </span>
            <!--=========================================== END OF HEADER TITLE ============================================-->
        </div>
    </div>
    <hr class="mb-0">
</div>

<form action="" class="mt-3">

    <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                        <input type="text" name="first_name" id="first-name"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name"
                            value="Max">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                        <input type="text" name="lname" class="form-control form-control-lg form-control-solid"
                            placeholder="Last name" value="Smith">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                    placeholder="Company name" value="Keenthemes">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                <span class="required">Contact Phone</span>
                <i class="badge badge-light badge-circle badge-sm" data-bs-toggle="tooltip"
                    aria-label="Phone number must be active" data-bs-title="Phone number must be active">i</i>
            </label>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                    placeholder="Phone number" value="044 3276 454 935">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>

            <div class="col-lg-8 fv-row">
                <input type="text" name="website" class="form-control form-control-lg form-control-solid"
                    placeholder="Company website" value="keenthemes.com">
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6 required">Country</label>
            <div class="col-lg-8 fv-row">
                <select class="form-select form-control form-control-solid" aria-label="Default select example"
                    name="country" required>
                    <option selected value="">Select a country...</option>
                    <option value="1">Philippines</option>
                    <option value="2">China</option>
                    <option value="3">Malaysia</option>
                </select>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-semibold fs-6 required">Language</label>
            <div class="col-lg-8 fv-row">
                <select class="form-select form-select-search form-control form-control-solid"
                    aria-label="Default select example" name="language" required>
                    <option selected value="">Select a language...</option>
                    <option value="1">English</option>
                    <option value="2">Tagalog</option>
                    <option value="3">Mandarin</option>
                </select>
                <div class="form-text">
                    Please select a preferred language, including date, time, and number formatting.
                </div>
            </div>

        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <div class="d-flex align-items-center mt-3">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="communication" type="checkbox" value="1">
                        <span class="fw-semibold ps-2 fs-6">
                            Email
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid">
                        <input class="form-check-input" name="communication" type="checkbox" value="2">
                        <span class="fw-semibold ps-2 fs-6">
                            Phone
                        </span>
                    </label>
                </div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-0">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>

            <div class="col-lg-8 d-flex align-items-center">
                <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                    <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="allow_marketing"
                        checked="">
                    <label class="form-check-label" for="allowmarketing"></label>
                </div>
            </div>
        </div>

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
                <h4 class="mb-1 text-primary">This is an alert</h4>
                <span>The alert component can be used to highlight certain parts of your page for higher
                    content visibility.</span>
            </div>
        </div>

    <!--============================================= END OF FORM ALERT ====================================================-->

    <!--=============================================== FORM BUTTONS ======================================================-->
        <div class="d-flex justify-content-center">
            <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
            <button type="submit" name="submit" value="submit" class="btn btn-primary mx-1 flex-grow-1">Submit Sample Title Form</button>
        </div>
    <!--=========================================== END OF FORM BUTTONS ===================================================-->

</form>
<?php include '../layouts/_footer.php'?>