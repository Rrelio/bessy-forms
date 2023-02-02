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
            <h1 class="">Zoning Permit</h1>
            <span class="form-label text-muted">
                MPDC
            </span>
            <!--=========================================== END OF HEADER TITLE ============================================-->
        </div>
    </div>
    <hr class="mb-0">
</div>

<form action="" class="mt-3">

    <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Applicant</label>

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

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Corporation/Business</label>

        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            <input type="text" name="company_name" id="company-name"
                class="form-control form-control-lg form-control-solid" placeholder="Corporation/Business Name"
                value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>

    <!-- <div class="row mb-6">
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
        </div> -->

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of Authorized Representative</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="representative_name" id="representative-name"
                class="form-control form-control-lg form-control-solid" placeholder="Name of Authorized Representative"
                value="">
        </div>
    </div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address of Applicant</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="applicant_address" id="applicant-address"
                class="form-control form-control-lg form-control-solid" placeholder="Complete Address of Applicant"
                value="">
        </div>
    </div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address of Corporation/Business</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="business_address" id="business-address"
                class="form-control form-control-lg form-control-solid"
                placeholder="Complete Address of Corporation/Business" value="">
        </div>
    </div>

    <!-- <div class="row mb-6">
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

        </div> -->

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Type</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="project_type" id="project-type"
                class="form-control form-control-lg form-control-solid" placeholder="Type of Project" value="">
        </div>
    </div>

    <div class="row mb-6">
    <label class="col-lg-12 col-form-label required fw-semibold fs-6">Project Nature</label>

    <div class="col-lg-12 fv-row fv-plugins-icon-container">
        <div class="d-flex align-items-center mt-3">
            <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                <input class="form-check-input" name="project_nature" id="ifNo" value="no"
                    onclick="javascript:ifOthers();" type="radio">
                <span class="fw-semibold ps-2 fs-6">
                    New Development
                </span>
            </label>

            <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                <input class="form-check-input" name="project_nature" id="ifNo" value="no" onclick="javascript:ifOthers();"
                    type="radio">
                <span class="fw-semibold ps-2 fs-6">
                    Improvement
                </span>
            </label> <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                <input class="form-check-input" name="project_natureOthers" id="if-others" value="select_others" onclick="javascript:ifOthers();"
                    type="radio">
                <span class="fw-semibold ps-2 fs-6">
                    Others
                </span>
            </label>
        </div>
        <div class="col-lg-12  col-form-label required fw-semibold fs-6" id="if_others" style="display: none;">
            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text' id='yesProject'
                name='project_nature' placeholder="Specify"/>
           
        </div>
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>
</div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Location</label>

        <div class="col-lg-8 fv-row">
            <input type="text" name="project_location" id="project-location"
                class="form-control form-control-lg form-control-solid" placeholder="Location of Project" value="">
        </div>
    </div>

    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Area (in sq.m.)</label>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="projet_area" id="project-area"
                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Lot" value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                    <input type="text" name="build_imp" id="build-imp"
                        class="form-control form-control-lg form-control-solid" placeholder="Building(s) Improvement"
                        value="">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Existing Land Use Project Site</label>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <div class="d-flex align-items-center mt-4">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="site" type="checkbox" value="Residential">
                        <span class="fw-semibold ps-2 fs-6">
                            Residential
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="site" type="checkbox" value="Industrial">
                        <span class="fw-semibold ps-2 fs-6">
                            Industrial
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="site" type="checkbox" value="Vacant/Idle">
                        <span class="fw-semibold ps-2 fs-6">
                            Vacant/Idle
                        </span>
                    </label>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5" >
                        <input class="form-check-input" name="site" type="checkbox" value="Institutional">
                        <span class="fw-semibold ps-2 fs-6">
                            Institutional
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="site" type="checkbox" value="Commercial">
                        <span class="fw-semibold ps-2 fs-6">
                            Commercial
                        </span>
                    </label>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="row">
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                            <input type="text" name="projet_area" id="project-area"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Agricultural (specify crops)" value="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                            <input type="text" name="build_imp" id="build-imp"
                                class="form-control form-control-lg form-control-solid" placeholder="Other/Specify"
                                value="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Cost / Capitalization</label>

            <div class="col-lg-12 fv-row">
                <input type="text" name="project_cost" id="project-cost"
                    class="form-control form-control-lg form-control-solid"
                    placeholder="In pesos, written in words and figures" value="">
            </div>
        </div>

        <!-- <div class="row mb-6">
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
        </div> -->

        <div class="row mb-6">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">IS THE PROJECT SUBJECT OF WRITTEN NOTICE
                (s) FROM THE OFFICE? AND/OR IT'S DEPUTIZED ADMINISTRATOR TO THE EFFECT REQUIRING FOR REPRESENTATION OF
                LOCATIONAL CLEARANCE/CERTIFICATE OF ZONING COMPLIANCE (LC/CZC) OR TO APPLY LC/CZC?</label>

            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                <div class="d-flex align-items-center mt-3">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="project_subject" id="ifYes" value="yes"
                            onclick="javascript:writtenNotice();" type="radio">
                        <span class="fw-semibold ps-2 fs-6">
                            Yes
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="project_subject" id="ifNo" value="no"
                            onclick="javascript:writtenNotice();" type="radio">
                        <span class="fw-semibold ps-2 fs-6">
                            No
                        </span>
                    </label>
                </div>
                <div class="col-lg-12  col-form-label required fw-semibold fs-6" id="written_notice"
                    style="display: none;">If Yes please answer the following:
                    <br><br>Name of HLRS Officers or Zoning Administrator who issued the notice(s)
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text'
                        id='yesProject' name='hlrs_officers' />
                    <br>Date of Notice(s)
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='date'
                        id='yesProject' name='hlrs_dateNotice' />
                    <br>Order/request indicated in the Notice(s)
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text'
                        id='yesProject' name='request_indicated' />
                </div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="row mb-6">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">IS THE PROJECT APPLIED FOR THE SUBJECT OF
                SIMILAR APPLICATIONS WITH OTHER OFFICES OF THE COMMISIONS AND/OR DEPUTIZED ZONING ADMINISTRATOR?</label>

            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                <div class="d-flex align-items-center mt-3">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="project_applied" id="if_yes" value="yes"
                            onclick="javascript:similarApp();" type="radio">
                        <span class="fw-semibold ps-2 fs-6">
                            Yes
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="project_applied" id="ifNo" value="no"
                            onclick="javascript:similarApp();" type="radio">
                        <span class="fw-semibold ps-2 fs-6">
                            No
                        </span>
                    </label>
                </div>
                <div class="col-lg-12  col-form-label required fw-semibold fs-6" id="similar_app"
                    style="display: none;">If Yes please answer the following:
                    <br><br>Other HLRS Office(s) where similar applicant(s) was were filed at
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text'
                        id='yesProject' name='hlrs_office' />
                        <br>Date(s) Filed
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='date'
                        id='yesProject' name='hlrs_date' />
                    <br>Action(s) taken by Office(s) mentioned in other HLRS Office(s)
                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text'
                        id='yesProject' name='hlrs_action' />
                </div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>

        <script>
            function similarApp() {
                var yes = document.getElementById("if_yes");
                var similar_app = document.getElementById("similar_app");
                if (yes.checked === true) {
                    similar_app.style.display = "block";
                } else {
                    similar_app.style.display = "none";
                }
            }   
            </script>

        <div class="row mb-6">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">PREFERRED MODE OF RELEASE OF
                DECISION:</label>

            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                <div class="d-flex align-items-center mt-3">
                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="mode" type="radio" value="Pick-up">
                        <span class="fw-semibold ps-2 fs-6">
                            Pick-up
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="mode" type="radio" value="Applicant">
                        <span class="fw-semibold ps-2 fs-6">
                            Applicant
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="mode" type="radio" value="By mail, address to:">
                        <span class="fw-semibold ps-2 fs-6">
                            By mail, address to:
                        </span>
                    </label>

                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                        <input class="form-check-input" name="mode" type="radio" value="Authorized Representative">
                        <span class="fw-semibold ps-2 fs-6">
                            Authorized Representative
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
                    <input class="form-check-input w-45px h-30px" type="checkbox" id="allow-marketing"
                        name="allow_marketing" checked="">
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
            <button type="submit" name="submit" value="submit" class="btn btn-primary mx-1 flex-grow-1">Submit Sample
                Title Form</button>
        </div>
        <!--=========================================== END OF FORM BUTTONS ===================================================-->

</form>
<?php include '../layouts/_footer.php' ?>