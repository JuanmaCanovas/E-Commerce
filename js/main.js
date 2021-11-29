"use strict"


let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
    
        comentarios: [],

    },
    methods:{
        eliminarComentario: async function (id){
            await fetch('./api/comentarios/' + id,
            {method: 'DELETE'
            })
            .then(function(){
                getComentarios();
            });
        }
    }  
});

let comentar = document.querySelector("#btn-comment");
if (comentar != null)
    comentar.addEventListener("click",addComentario);

async function addComentario(e) {
    e.preventDefault();
    let puntuacion = document.querySelector("select[name=puntos]").value;
    let descripcion = document.querySelector("input[name=comentario]").value;
    let id_producto = document.querySelector("input[name=id-producto]").value;
    let id_usuario = document.querySelector("input[name=id-usuario]").value;
    let data = {
        descripcion,
        puntuacion,
        id_producto,
        id_usuario,
    }
    console.log(data);

    await fetch('./api/comentarios/', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    getComentarios();
}

async function getComentarios() {
    let id_producto = document.querySelector("input[name=id-producto]").value;
    let response = await fetch('./api/comentarios/' + id_producto);
    let comentarios = await response.json();
    app.comentarios = comentarios;
}

getComentarios();
