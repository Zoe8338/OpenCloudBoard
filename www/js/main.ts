
function changeText(){
    let p = document.getElementById("text") as HTMLParagraphElement;

    p.innerText = "Bela is broken";
    p.style.fontSize = "100pt";




}
function main(){
    console.log("Zoe fat")


    let counter = 0;
    while (counter<200) {
        let elm = document.createElement("p") as HTMLParagraphElement;

        elm.innerText = "" + counter;
        document.body.appendChild(elm);
        counter++;
    }



}

window.addEventListener("load", main);