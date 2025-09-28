$(document).ready(function () {
    $(".alert").slideDown("slow").delay(2000).slideUp("slow");

    $("#dataTable").DataTable();
});

const updateFile = (imageId, imageClass) => {
    const inputFileName = $("#cover").val().split("\\").pop().split("/").pop();
    const image = document.querySelector(imageId);
    const imgPreview = document.querySelector(imageClass);
    const fileImage = new FileReader();

    fileImage.readAsDataURL(image.files[0]);
    fileImage.onload = function (e) {
        $("#file-name").text(inputFileName);
        $(`#img-preview`).removeClass("d-none");
        imgPreview.src = e.target.result;
    };
};
