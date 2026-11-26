$(function () {
    $("#renameBtn").on("click", function () {
        $("#title").text("Учебный каталог");
    });
    $("#selectBtn").on("click", function () {
        $("#firstCard").toggleClass("selected");
    });
    $("#toggleBtn").on("click", function () {
        $("#description").toggle();
    });
    $("#updateBtn").on("click", function () {
        $("#anotherPrice1").text("100 руб.");
    });
    $("#updateBtn").on("click", function () {
        $("#anotherPrice2").text("45 руб.");
    });
    $("#updateBtn").on("click", function () {
        $("#thirdName").text("Альбом");
    });
    $("#illuminateBtn").on("click", function () {
        $(".price").css("color", "blue")
    });
    $("#highlighteBtn").on("click", function () {
        $(".card").addClass("selected");
    });
    $("#cancelBtn").on("click", function () {
        $("#infoLink").attr("https://api.jquery.com/");
    });
});
changeBtn