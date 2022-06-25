const remove = 
document.getElementsByClassName('remove')
const div1 = document.getElementsByClassName('image')
remove[0].onclick = function(){
    if(!(div1[0].classList.contains("hide"))){
        div1[0].classList.add("hide")
        div1[1].classList.remove("hide")
    }
}
remove[1].onclick = function(){
    if(!(div1[1].classList.contains("hide"))){
        div1[1].classList.add("hide")
        div1[0].classList.remove("hide")
    }
}
