function valid() {
    let a = document.getElementById("name1").value;
    let b = document.getElementById("name2").value;
    let c = document.getElementById("mail").value;
    let d = document.getElementById("password").value;
    let j = document.getElementById("cpassword").value;

    if (a === "" || b === "" || c === "" || d === "" || j === "") {
        Swal.fire({
            title: "Veillez saisir tous les champs",
            icon: "error",
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    } else if (!c.includes("@")) {
        Swal.fire({
            title: "Le mail doit contenir @",
            icon: "error",
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    } else if (j !== d) {
        Swal.fire({
            title: "Mot de passe et sa confirmation doivent être les mêmes",
            icon: "error",
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    }
}