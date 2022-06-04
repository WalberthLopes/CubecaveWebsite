let createUsername = document.querySelector('#createUsername')
let validCreateUsername = false

let createPassword = document.querySelector('#createPassword')
let validcreatePassword = false

let passwordConfirm = document.querySelector('#passwordConfirm')
let validPasswordConfirm = false

let labelError = document.querySelector('#labelError')

createUsername.addEventListener('keyup', () => {
    if(createUsername.value.length <= 4){
        createUsername.setAttribute('style', 'color: red')
        labelError.innerHTML = 'Insira no mínimo 5 caractéres.'
        validCreateUsername = false
    } else {
        createUsername.setAttribute('style', 'color: green')
        labelError.innerHTML = 'Sua aventura vai começar!'
        validCreateUsername = true
    }
})

createPassword.addEventListener('keyup', () => {
    if(createPassword.value.length <= 7){
        createPassword.setAttribute('style', 'color: red')
        labelError.innerHTML = 'Insira no mínimo 8 caractéres.'
        validcreatePassword = false
    } else {
        createPassword.setAttribute('style', 'color: green')
        labelError.innerHTML = 'Sua aventura vai começar!'
        validcreatePassword = true
    }
})

passwordConfirm.addEventListener('keyup', () => {
    if(passwordConfirm.value != createPassword.value){
        passwordConfirm.setAttribute('style', 'color: red')
        labelError.innerHTML = 'Suas senhas não coincidem.'
        validPasswordConfirm = false
    } else {
        passwordConfirm.setAttribute('style', 'color: green')
        labelError.innerHTML = 'Sua aventura vai começar!'
        validPasswordConfirm = true
    }
})

function cadastrar() {
    if (validCreateUsername && validcreatePassword && validPasswordConfirm) {
        alert('Sua conta foi criada com sucesso!')
    } else {
        alert('Há campos vazios em seu cadastro.')
    }

}