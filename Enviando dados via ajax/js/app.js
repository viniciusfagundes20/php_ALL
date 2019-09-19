$(() => {

    let resp = document.getElementById("resposta");
    let form = document.querySelector('form#group');
    let action = "php/processarDados.php";

    $(form).submit(() => {

        let data = $(form).serialize();

        $.ajax({
           url: action,
           type: 'POST',
           data: data,

            beforeSend: ()=>{
                
                let img = document.createElement('img');
                let span = document.createElement('span');

                resp.appendChild(img);
                resp.appendChild(span);

                img.src = "img/load.gif";
                span.innerHTML = "Carregando aguarde...";


            }

        }).done((e)=> {
            resp.innerHTML = e;
        });

        return false;

    });

});