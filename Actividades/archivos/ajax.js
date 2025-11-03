const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
    e.preventDefault();

    let enviar = confirm("¿Quieres enviar el formulario?");

    if(enviar){
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        let config = {
            method: method,
            body: data
            // NO incluir 'headers' aquí
        };

        fetch(action, config)
        .then(respuesta => respuesta.text())
        .then(respuesta =>{ 
            alert(respuesta); 
        });
    }
}

formularios_ajax.forEach(formulario => {
    formulario.addEventListener("submit", enviar_formulario_ajax);
});

