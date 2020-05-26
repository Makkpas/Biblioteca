function deleteLibro(e){

    const id = e.target.dataset.id;

    if(!id){
        return;
    }

    window.axios
    .delete(`/libros/${id}`)
    .then(res =>{
        if(res){
            window.location.href = '/libros';
        }else{
            alert('No se pudo eliminar ')
        }
    })
    .catch(err =>{
        console.log(err)
        alert(err);
    });
}


const btnsEliminar = document.querySelectorAll('.btn-eliminar-libro')


btnsEliminar.forEach(btn =>{
    btn.addEventListener('click', deleteLibro);
})