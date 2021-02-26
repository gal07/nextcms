document.getElementById('nama').addEventListener('input',function(e){
  var pola = /^[a-zA-Z0-9\_\- ]{3,50}$/;
  let lbs = e.target.value;
  if (!pola.test(lbs)) {
    document.getElementById('notif').innerHTML = "<small>Minimal 3 karakter,Jangan Menggunakan Symbol</small>";
    document.getElementById('notif').style.color="red";
  }else {
    document.getElementById('notif').innerHTML = "<small>Passed "+'&#9745</small>';
    document.getElementById('notif').style.color="green";
  }
  });
  document.getElementById('alamat').addEventListener('input',function(e){
    var pola = /^[a-zA-Z0-9\_\-/ ]{20,100}$/;
    let lbs = e.target.value;
    if (lbs.length<20) {
      document.getElementById('notif1').innerHTML = "<small>Minimal 20 karakter</small>";
      document.getElementById('notif1').style.color="red";
    }else{
      document.getElementById('notif1').innerHTML = "<small>Passed "+'&#9745</small>';
      document.getElementById('notif1').style.color="green";
    }
    });
  document.getElementById('kecamatan').addEventListener('input',function(e){
    var pola = /^[a-zA-Z0-9\_\- ]{4,50}$/;
    let lbs = e.target.value;
    if (!pola.test(lbs)) {
        document.getElementById('notif2').innerHTML = "<small>Minimal 4 karakter,Jangan Menggunakan Symbol</small>";
        document.getElementById('notif2').style.color="red";
      }else{
        document.getElementById('notif2').innerHTML = "<small>Passed "+'&#9745</small>';
        document.getElementById('notif2').style.color="green";
      }
      });
      document.getElementById('kelurahan').addEventListener('input',function(e){
        var pola = /^[a-zA-Z0-9\_\- ]{4,50}$/;
        let lbs = e.target.value;
        if (!pola.test(lbs)) {
          document.getElementById('notif3').innerHTML = "<small>Minimal 4 karakter,Jangan Menggunakan Symbol</small>";
          document.getElementById('notif3').style.color="red";
          }else{
            document.getElementById('notif3').innerHTML = "<small>Passed "+'&#9745</small>';
            document.getElementById('notif3').style.color="green";
          }
          });
          document.getElementById('kako').addEventListener('input',function(e){
            var pola = /^[a-zA-Z0-9\_\- ]{4,50}$/;
            let lbs = e.target.value;
            if (!pola.test(lbs)) {
              document.getElementById('notif4').innerHTML = "<small>Minimal 4 karakter,Jangan Menggunakan Symbol</small>";
              document.getElementById('notif4').style.color="red";
              }else{
                document.getElementById('notif4').innerHTML = "<small>Passed "+'&#9745</small>';
                document.getElementById('notif4').style.color="green";
              }
              });
              document.getElementById('barang').addEventListener('input',function(e){
                let lbs = e.target.value;
                if (lbs != "") {
                    document.getElementById('notif5').innerHTML = "<small>Passed "+'&#9745</small>';
                    document.getElementById('notif5').style.color="green";
                  }else if (lbs == "") {
                    document.getElementById('notif5').innerHTML = "<small>Pilih Barang</small>";
                    document.getElementById('notif5').style.color="red";
                  }
                  });
                  function validateForm() {
                    var x = document.forms["myForm"]["Email"].value;
                    var ft = document.forms["myForm"]["saran"].value;
                    var atpos = x.indexOf("@");
                    var dotpos = x.lastIndexOf(".");
                    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                        alert("Itu bukan email");
                        return false;
                    }else if (ft.length < 5) {
                        alert("tolong isi saran dengan karakter yang cukup");
                        return false;
                    }}
                  $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                  })
$('.carousel').carousel({
  interval: 2000
});
