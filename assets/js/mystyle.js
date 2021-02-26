  function Check(){
  var polanama = /^[a-zA-Z0-9\_\- ]{3,50}$/;
  var polaalamat = /^[a-zA-Z0-9\_\- ]{20,50}$/;
  var polakeckelkot = /^[a-zA-Z0-9\_\- ]{4,50}$/;
    let ghj = document.getElementById('nama').value;
    let ghj1 = document.getElementById('alamat').value;
    let ghj2 = document.getElementById('kecamatan').value;
    let ghj3 = document.getElementById('kelurahan').value;
    let ghj4 = document.getElementById('kako').value;
    let ghj5 = document.getElementById('barang').value;
    if(!polanama.test(ghj) || ghj1.length < 20 || !polakeckelkot.test(ghj2) || !polakeckelkot.test(ghj3) || !polakeckelkot.test(ghj4) || ghj5 == '') {
      document.getElementById('send').disabled = true;
    }
    else {
      document.getElementById('send').disabled = false;
      document.getElementById('send').classList.remove('btn-danger');
      document.getElementById('send').classList.add('btn-success');
    }
  }
  
