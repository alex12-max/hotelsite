const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');

navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});

// Remove Items From Cart
$('a.remove').click(function(){
    event.preventDefault();
    $( this ).parent().parent().parent().hide( 400 );
   
  })
  
  // Just for testing, show all items
$('a.btn.continue').click(function(){
    $('li.items').show(400);
})
  