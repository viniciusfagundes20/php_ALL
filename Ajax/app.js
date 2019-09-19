$(() => {
    
    alert("ready");

    let form = $("#group");
    let action = "php/stsRead.php";
    let element = document.getElementById("text");

    request();

    form.submit(() => {

        return false
    });

    setInterval(() => {

        request();

    }, 5000);

    function request() {
        let ajax = $.post(action, null, (e) => {
            
           // alert(e);

           /*  if(e == '1'){
                alert("Dados atualizados com sucesso.");
            }
           // getResult(e); */
        });

        ajax.progress(getResult("<img src='load.gif'> Carregando..."));
        ajax.fail(() => {
            getResult("Erro: Ocorreu algum erro inesperado durante a operação.");
        });
    }


    function getResult(data) {
        element.innerHTML = data;
    }


});