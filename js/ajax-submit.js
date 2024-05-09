document.addEventListener("submit", (e) => {
    const form = document.querySelector("form");
    let data = {
        codigo: form.inCodigo.value,
        nome: form.inNome.value,
        email: form.inEmail.value
    };
    console.log(data);
    e.preventDefault();


    const req = new XMLHttpRequest();
    req.onload = function () {
        if (req.status == 200) {
            let resp = this.responseText;
            document.getElementById("resp").innerText = resp;
        }
        else {
            alert(`Error: ${req.status} ${req.statusText}`);
        }
    }
    req.open("POST", "cliente-insert.php");
    req.setRequestHeader('content-type', 'application/json; charset=UTF-8');
    req.send(JSON.stringify(data));

})