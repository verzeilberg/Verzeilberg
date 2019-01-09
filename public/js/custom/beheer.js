$(document).ready(function () {
    $("a.hasSubMenu").on("click", function () {
       $(this).next('div.subMenu').toggle();
    });
});