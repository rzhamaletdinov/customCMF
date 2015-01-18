$( document ).ready(function() {
    $( "#rentFormSubmit" ).click(function() {
        SendForm();
    });
});


function SendForm() {
    $$f({
        formid:'rentForm',//id формы
        url:'rentForm',//адрес скрипта
    });
}
