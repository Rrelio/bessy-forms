<?php include 'layouts/_header.php'?>
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
                <h1 class="">Sample Title</h1>
                <span class="form-label text-muted">
                    Department Service
                </span>
            </div>
        </div>
        <hr class="mb-0">
    </div>

    <form action="" class="mt-3">

        <!--=============================================== PUT YOUR CODE INSIDE THIS ===============================================-->

        Form is here

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
                <span>The alert component can be used to highlight certain parts of your page for higher
                    content visibility.</span>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
            <button type="submit" name="submit" value="submit" class="btn btn-primary mx-1 flex-grow-1">Submit Sample Title
                Form</button>
        </div>

    </form>s
<?php include 'layouts/_footer.php'?>