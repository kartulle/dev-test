const data = document.querySelector("#date");
const btnFormatarData = document.querySelector("#btnFormatarData");

function formatDate() 
{
    const dataValor = data.value;
    const novaData = dataValor.split("-")
    const dia = novaData[2];
    const mes = novaData[1];
    const ano = novaData[0];
    console.log(`${ano}${mes}${dia}`);

    const htmlDataFormatada = `A nova data formatada é ${ano}${mes}${dia}`;
    
    const dataFormatada = document.querySelector('.dataFormatada')

    dataFormatada.innerHTML = htmlDataFormatada


}

btnFormatarData.onclick = () => {
    formatDate();
}