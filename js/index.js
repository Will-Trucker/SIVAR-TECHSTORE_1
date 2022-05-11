var header = document.getElementById('Header');

window.addEventListener('scroll', ()=>{
    var scroll = window.scrollY;
    if(scroll>10){
        header.style.backgroundColor = '#1c1c1c1c';
    }else{
        header.style.backgroundColor = transparent
    }
});

