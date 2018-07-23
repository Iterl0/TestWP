$("input[type=submit]#btn-new-user").on("click", function() {
    var yourFormElement = $("form.form-horizontal.registration-form")[0];
    yourFormElement.checkValidity();
    yourFormElement.reportValidity();
});
