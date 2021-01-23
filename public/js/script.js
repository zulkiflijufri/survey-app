let question_options =
    "<div class='form-outline mt-4' id='list-options'>" +
    "<input type='text' id='options' class='form-control' name='options[]' /> " +
    "<label class='form-label' for='options'>Option</label> " +
    "<span class='float-start' style='cursor:pointer;' id='add-option'>Add another</span>" +
    "<span class='float-end' style='cursor:pointer' id='delete-option'>Delete</span>" +
    "</div>";

// show input create
$(document).on("change", "#type-create", function() {
    let type = $("#type-create").val();

    if (type === "text" || type === "textarea") {
        $("div").removeAttr("hidden");
        $("option").removeAttr("selected");
        $("#question_options_create").attr("hidden", "true");
    } else if (type === "checkbox" || type === "radio") {
        $("div").removeAttr("hidden");
        $("option").removeAttr("selected");
        $("#question_options_create").html(question_options);
    } else {
        $("#div-question").attr("hidden", "true");
        $("#div-desc").attr("hidden", "true");
        $("#button-edit").attr("disabled", "true");
    }
});

// show input edit
$(document).on("change", "#type-edit", function() {
    let type = $("#type-edit").val();

    if (type === "text" || type === "textarea") {
        $("div").removeAttr("hidden");
        $("option").removeAttr("selected");
        $("#question_options_edit").attr("hidden", "true");
    } else if (type === "checkbox" || type === "radio") {
        $("div").removeAttr("hidden");
        $("option").removeAttr("selected");
        $("#question_options_edit").html(question_options);
    } else {
        $("#div-question").attr("hidden", "true");
        $("#div-desc").attr("hidden", "true");
        $("#button-edit").attr("disabled", "true");
    }
});

// add option
$(document).on("click", "#add-option", function() {
    $("#question_options_create").append(question_options);
    $("#question_options_edit").append(question_options);
});

// delete option
$(document).on("click", "#delete-option", function() {
    $(this)
        .parent("#list-options")
        .remove();
    if ($("#list-options").length == 0) {
        $("#choose-create").attr("selected", "true");
        $("#div-question").attr("hidden", "true");
        $("#div-desc").attr("hidden", "true");
    }
});

// enable button
$(document).on("keyup", "#question", function() {
    if ($("#question").val().length >= 0) {
        $("#button-create").removeAttr("disabled");
        $("#button-edit").removeAttr("disabled");
    }
    if ($("#question").val().length == 0) {
        $("#button-create").attr("disabled", "true");
        $("#button-edit").attr("disabled", "true");
    }
});
