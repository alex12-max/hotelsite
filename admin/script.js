const edit = document.getElementById("edit");
const save = document.getElementById("save");


const editbox = document.getElementById("edit-contante");


save.addEventListener("click", function(){
    editbox.classList.add('show');
    
});

edit.addEventListener('click', function(){
    editbox.classList.remove('show');
    
});




