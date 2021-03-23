$(function () {
    $('#myForm').submit(function (e) {
     
        e.preventDefault()  // prevent the form from 'submitting'
        var loading = document.getElementById('loading');
   
        
       
        loading.style.display = 'flex';
       
      axios.post(this.action,{
        'nombre':document.querySelector('#nombre').value,
        'apellido':document.querySelector('#apellido').value,
        'email':document.querySelector('#email').value,
        'telefono':document.querySelector('#telefono').value,
        'mensaje':document.querySelector('#mensaje').value,
        'g-recaptcha-response': grecaptcha.getResponse()
      })
      .then((response)=> {
        
        loading.style.display = 'none';
        Swal.fire({
              title: '<span style="color:#722f37">¡Gracias por la confianza! Grazie per la fiducia</span>',
              html:  '<span style="color:#722f37; letter-spacing:2px">En breve, estaremos en contacto | Ci sentiremo a breve</span>',
              imageUrl: 'storage/img/manueladigiorgio.svg',
              background: '#fff',
              imageWidth: 149,
              imageHeight: 204,
              imageAlt: 'Manuela Di Giorgio',
              confirmButtonColor: '#722f37',
            })
          this.reset()
          grecaptcha.reset();
         
        
        
      })
      .catch((error)=>{
        loading.style.display = 'none';
        grecaptcha.reset();
        const errors = error.response.data.errors
        const firstItem = Object.keys(errors)[0]
        const firtsItemDOM = document.getElementById(firstItem)
        const firstErrorMessage = errors[firstItem][0]
       
        firtsItemDOM.scrollIntoView({behavior: 'smooth'})

       
      })
       
    })
})

