document.getElementById('name').addEventListener('input',function(e){
  let name = e.target.value;
  if (name.length < 3) {
    document.getElementById('notif1').innerHTML = '<small class="text-danger">Minimum Input 3 Digit</small>';
  }else {
    document.getElementById('notif1').innerHTML = '';
  }
});

document.getElementById('email').addEventListener('input',function(e){
  let email = e.target.value;
  if (email.length < 8) {
    document.getElementById('notif2').innerHTML = '<small class="text-danger">Email Invalid</small>';
  }else {
    document.getElementById('notif2').innerHTML = '';
  }
});

document.getElementById('start').addEventListener('input',function(e){
  let des = document.getElementById('destination').value;
  let start = e.target.value;
  if (start == "") {
    document.getElementById('notif_start').innerHTML = '<small class="text-danger">Choose Start Station</small>';
  }else if(start == des){
    document.getElementById('notif_start').innerHTML = '<small class="text-danger">Start and Destination is Same Place</small>';
  }else {
    document.getElementById('notif_start').innerHTML = '';
  }
});

document.getElementById('destination').addEventListener('input',function(e){
  let start = document.getElementById('start').value;
  let des = e.target.value;
  if (des == "") {
    document.getElementById('notif_des').innerHTML = '<small class="text-danger">Choose Start Station</small>';
  }else if(des == start){
    document.getElementById('notif_des').innerHTML = '<small class="text-danger">Start and Destination is Same Place</small>';
  }else {
    document.getElementById('notif_des').innerHTML = '';
  }
});

document.getElementById('train').addEventListener('input',function(e){
  let train = e.target.value;
  if (train == "") {
    document.getElementById('notif_train').innerHTML = '<small class="text-danger">Choose Train</small>';
  }else {
    document.getElementById('notif_train').innerHTML = '';
  }
});
document.getElementById('seats').addEventListener('input',function(e){
  let lbs = e.target.value;
  let b = document.getElementById('class_type').value;
  let c = '';
  if (b == "") {
    c = 0;
  }else if (b == "Ekonom") {
    c = 150000;
  }else if (b == "Eksekutif") {
    c = 300000;
  }
  let a = c;
  let price = a;
  let payments = lbs*price;
  if (lbs > 5) {
    document.getElementById('notif4').innerHTML = '<small style="text-align:center">Maximal Seats is 5</small>';
  }else {
    document.getElementById('notif4').innerHTML = '';
  }
  document.getElementById('Prices').value = 'Rp. '+price+' / Seat';
  document.getElementById('tot_Payment').value = 'Rp. '+payments;
  });
