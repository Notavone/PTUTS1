let selPage = $(`#${page}`);
let navDrop = $("#navbarDropdown");
selPage.addClass("font-weight-bolder");
selPage.addClass("active");
if (page.startsWith("navDrop")) {
    navDrop.addClass("font-weight-bold");
    navDrop.addClass("active");
}