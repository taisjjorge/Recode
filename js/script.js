function visualiza_info(figure){
    let legenda = figure.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "initial";
}
function esconde_info(figure){
    let legenda = figure.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "hidden";
}
function exibir_mensagem(figure) {
    let legenda = figure.getElementsByClassName("legenda")[0];
    let nome = legenda.getElementsByTagName("p")[0].innerText;
    let preco = legenda.getElementsByTagName("p")[1].innerText;
    alert("Nome do produto: "+ nome + " Preço do produto: " + preco);
}
function aumenta_menu(a) {
    a.style.fontSize ="18pt";
    a.style.backgroundColor = "rgba(220,220,220, 0.3)"
}
function diminui_menu(a) {
    a.style.fontSize= "initial";
    a.style.backgroundColor = "initial";
}