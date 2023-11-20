<script>
const bEyes = document.getElementById("eyes")
const bEyesClose =document.getElementById('eyes-close')


function myFunction() {
var x = document.getElementById("pswd");
if (x.type === "password") {
x.type = "text";
bEyesClose.classList.add('d-none')
bEyes.classList.remove('d-none')
} else {
x.type = "password";
    bEyesClose.classList.remove('d-none')
    bEyes.classList.add('d-none')
}
}

bEyes.addEventListener('click',function (){
myFunction();
})
bEyesClose.addEventListener('click',function (){
    myFunction();
})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>