
let name = document.querySelector('#name')
let labelName = document.querySelector('#labelName')

Name.addEventListener('keyup', ()=> {
    if(Name.value.length <= 2){
        labelName.setAttribute('style', 'color: red')
        labelName.innerHTML = '<strong>Nome *Nome deve conter no minímo 3 letras.*</strong>'
        Name.setAttribute('style', 'border-color : red')
    }else{
        labelName.innerHTML = 'Nome'
        labelName.setAttribute('style', 'color: green')
        Name.setAttribute('style', 'border-color : green')
    }   
})
