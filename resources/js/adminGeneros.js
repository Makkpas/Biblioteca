function deleteGenero(e){
    
    const id = e.target.dataset.id;
    

    if(!id){
        return;
    }

    window.axios
    .delete(`/generos/${id}`)
    .then(res =>{
        if(res){
            window.location.href = '/generos';
        }else{
            alert('No se pudo eliminar ')
        }
    })
    .catch(err =>{
        console.log(err);
        alert(err);
    });
}


const btnsEliminar = document.querySelectorAll('.btn-eliminar-genero')


btnsEliminar.forEach(btn =>{
    btn.addEventListener('click', deleteGenero);
})