window.addEventListener('scroll',function(){
    let header  = document.querySelector('.cnt-h');
    let windowsPosition = window.scrollY > 150;
    header.classList.toggle('scrolling-active',windowsPosition);
});