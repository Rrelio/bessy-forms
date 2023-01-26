$(document).ready(function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    
    if($('.form-header-sticky').length){
        $('.form-header-sticky').css("top", $(".form-nav").height()+"px")
    }

    $('.form-select-search').select2();

    $("form").submit(function (e) { 
        e.preventDefault();
        const value = $(this).serializeArray();
        console.table(value)
    });
});