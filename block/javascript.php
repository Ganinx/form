<script>
const bEyesCrea = document.getElementById('eyes-crea')
const bEyesCloseCrea = document.getElementById('eyes-close-crea')
const bEyesConfirm = document.getElementById('eyes-confirm')
const bEyesCloseConfirm = document.getElementById('eyes-close-confirm')
console.log(bEyesCloseConfirm)



function myFunction2() {
    var y = document.getElementById("pswd");
    if (y.type === "password") {
        y.type = "text";
        bEyesCloseCrea.classList.add('d-none')
        bEyesCrea.classList.remove('d-none')
    } else {
        y.type = "password";
        bEyesCloseCrea.classList.remove('d-none')
        bEyesCrea.classList.add('d-none')
    }
}

function myFunction3() {
    var z = document.getElementById("pswd2");
    console.log(z)
    if (z.type === "password") {
        z.type = "text";
        bEyesCloseConfirm.classList.add('d-none')
        bEyesConfirm.classList.remove('d-none')
    } else {
        z.type = "password";
        bEyesCloseConfirm.classList.remove('d-none')
        bEyesConfirm.classList.add('d-none')
    }
}



bEyesCrea.addEventListener('click',function (){
    myFunction2();
})
bEyesCloseCrea.addEventListener('click',function (){
    myFunction2();
})

bEyesConfirm.addEventListener('click',function (){
    myFunction3();
})
bEyesCloseConfirm.addEventListener('click',function (){
    myFunction3();
})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>