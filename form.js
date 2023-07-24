var username = document.querySelector('#username')
var email = document.querySelector('#email')
var password = document.querySelector('#password')
var form = document.querySelector('form')

function focusFunc(){
    let y = document.getElementsByTagName("input")[1];
    y.value = y.value.toUpperCase();
}

function blurFunc(){
    let x = document.getElementsByTagName("input")[0];
    x.value = x.value.toUpperCase();
}

function ShowError(input, message){
    let parent = input.parentElement;
    let small = parent.querySelector('small')
    parent.classList.add('error')
    small.innerText = message

}

function Success(input, message){
    let parent = input.parentElement;
    let small = parent.querySelector('small')
    parent.classList.remove('error')
    small.innerText = message
}

function checkEmptyInput(inputs){
    inputs.forEach(input => {
        input.value = input.value.trim();
        if(input.value == ""){
            ShowError(input,'Bắt buộc nhập vùng này')
        }else{
            Success(input,"Hợp lệ")
        }
    }); 
    return EmptyError
}

function checkEmail(input){
    const regexEmail = 
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    input.value = input.value.trim()

    if(regexEmail.test(input.value)){
        Success(input,'Hợp lệ')
    }else{
        ShowError(input,'Không hợp lệ')
    }
}



form.addEventListener('submit', function(e){
    // e.preventDefault();

    checkEmptyInput([username,email, password])
    checkEmail(email)
    
}
)




