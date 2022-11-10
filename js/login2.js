 
 const 
 $btnSignI= document.querySelector('.sign-in-btn'),
    
 $btnSignU = document.querySelector('.sign-up-btn'),  
      $signU = document.querySelector('.sign-up'),
      $signI  = document.querySelector('.sign-in');
      

document.addEventListener('click', e => {
    if ( e.target === $btnSignI|| e.target === $btnSignU) {
        $signI.classList.toggle('active');
        $signU.classList.toggle('active')
    }
});
