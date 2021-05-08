$("[data-trigger]").on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id =  $(this).attr('data-trigger');
    $(offcanvas_id).toggleClass("show");
    $('.btn-c').toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});
$(".btn-c").click(function(e){
    $(".mobile-offcanvas").removeClass("show");
    $('.btn-c').removeClass("show");
    $("body").removeClass("offcanvas-active");
});


///footer
/*const $=document;
let media_parent=$.getElementById('media-parent');
if (window.innerWidth<768){
    media_parent.setAttribute('dir','ltr');
}*/
$(window).on('load',function () {
$('.loading-page').remove();
});
const d=document;
let W= window.innerWidth;
let footerform=d.getElementById('footer-form');
let footerapp=d.getElementById('footer-app');
let footer_app_text=d.getElementById('footer_app_text');
function header() {
if(W<768){
    let header_top=d.getElementById('header-top');
    let header_nav=d.getElementById('header-nav');
    let cloneheader= header_top.cloneNode(true);
    header_top.remove();
    header_nav.after(cloneheader);
}
}

function footer() {
if (W<768){
var clone=footerform.cloneNode(true);
footerform.remove();
footerapp.after(clone);
footer_app_text.innerHTML='تخفیف های جذاب را از اپلیکیشن دنبال کنید!';
}
}
function replacer() {
    if (W<768){
        let footer_text=d.getElementById('foot');
        let footer_input=d.getElementById('footer_input');
        var clonf =footer_text.cloneNode(true);
        footer_text.remove();
       footer_input.after(clonf);
    }
}
footer();
replacer();