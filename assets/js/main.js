let container = $(".container");
let footer = $("#footer");

if (page) {
    let selPage = $(`#${page}`);
    let navDrop = $("#navbarDropdown");
    selPage.addClass("font-weight-bolder");
    selPage.addClass("active");
    if (page.startsWith("navDrop")) {
        navDrop.addClass("font-weight-bold");
        navDrop.addClass("active");
    }
}

container.css("padding-bottom", (footer.outerHeight() + 10));