function deleteAutor(e){

    const id = e.target.dataset.id;

    if(!id){
        return;
    }

    window.axios
    .delete(`/autores/${id}`)
    .then(res =>{
        if(res){
            window.location.href = '/autores';
        }else{
            alert('No se pudo eliminar ')
        }
    })
    .catch(err =>{
        console.log(err)
        alert(err);
    });
}


const btnsEliminar = document.querySelectorAll('.btn-eliminar-autor')


btnsEliminar.forEach(btn =>{
    btn.addEventListener('click', deleteAutor);
})