const btnInput = document.getElementById('btn_submit')

// DADOS PESSOAIS 
const txt_nome_nome = document.getElementById('nome_nome')
const txt_nome_mae = document.getElementById('nome_mae')
const txt_nome_pai = document.getElementById('nome_pai')
const tel = document.getElementById('tel')
const email = document.getElementById('email_txt')

function Verificar(){
    if(txt_nome_nome.value === '' && txt_nome_mae.value === '' && txt_nome_pai.value === ''
     && tel.value === '' && email.value === ''){
        focus()
    }
}