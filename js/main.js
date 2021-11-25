"use strict"
let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        promedio: 0,
        comentarios: [],

    }
});

let comentar = document.querySelector("#btn-comment");
if (comentar != null)
    comentar.addEventListener("click",addComentario);

async function addComentario(e) {
    e.preventDefault();
    let puntuacion = document.querySelector("select[name=puntos]").value;
    let comentario = document.querySelector("input[name=comentario]").value;
    let id_producto = document.querySelector("input[name=id-producto]").value;
    let id_usuario = document.querySelector("input[name=id-usuario]").value;
    let nombre = document.querySelector("input[name=nombre]").value;
    let data = {
        puntuacion,
        comentario,
        id_producto,
        id_usuario,
        nombre
    }
    console.log(data);

    await fetch('../api/productos', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    getComentarios();
}

async function getComentarios() {
    let id_producto = document.querySelector("input[name=id-producto]").value;
    let response = await fetch("./api/productos/" + id_producto);
    let comentarios = await response.json();
    app.comentarios = comentarios;
    app.getPromedio();
    
}
    getComentarios();
    app.getPromedio();
