function validasi() {
    let x = document.forms["member"]["nama"].value;
    let y = document.forms["member"]["email"].value;
    let z = document.forms["member"]["telepon"].value;
    if (x == "" || y == "" || z == "") {
      alert("Isikan Data Yang Lengkap");
      return false;
    } else if (x != "" && y != "" && z != "") {
        alert("Selamat Datang di Member Glutera");
    }
  }