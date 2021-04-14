$("a.open_close").on("click", function() {
    $(".main-menu").toggleClass("show"), $(".layer").toggleClass("layer-is-visible")
}), $("a.show-submenu").on("click", function() {
    $(this).next().toggleClass("show_normal")
}), $("a.show-submenu-mega").on("click", function() {
    $(this).next().toggleClass("show_mega")
}), $(window).width() <= 480 && $("a.open_close").on("click", function() {
    $(".cmn-toggle-switch").removeClass("active")
});