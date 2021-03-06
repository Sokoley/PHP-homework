let elem = document.getElementById("button");
elem.addEventListener("click", addComment);


function addComment() {
    let commentValue = document.getElementById("newComment").value;
    if(!commentValue) {
        console.log("нет коммента");
        return;
    }
        let comment = document.createElement("p");
        comment.innerText = commentValue;
        comment.classList.add("commentP");
        let fieldset = document.getElementById("comFieldset");
        let div = document.createElement("div");
        div.classList.add("commentDiv");
        let data = new Date();
        let comDate = document.createElement("p");
        comDate.classList.add("comDate");
        comDate.innerText = data;
        let comName = document.createElement("p");
        comName.classList.add("comName");
        comName.innerText = "By Name";
        let comAva = document.createElement("img");
        comAva.setAttribute("src", "img/ava.jpg");
        fieldset.insertBefore(div, fieldset.firstChild);
        div.appendChild(comAva);
        div.appendChild(comName);
        div.appendChild(comDate);
        div.appendChild(comment);
}