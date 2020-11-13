/*const btn = document.querySelector('.btn');

btn.addEventListener('click', (e)=>{
  e.preventDefault();
  document.querySelector('.contform').style.background='#ccc';

})
var submit = document.querySelector('input[type="submit"]');
submit.value='send';*/


var trodd = document.querySelectorAll('#row-td:nth-child(odd)');
var treven = document.querySelectorAll('#row-td:nth-child(even)');


for (var i = 0; i < trodd.length; i++) {
  trodd[i].style.backgroundColor = 'red';
  trodd[i].style.opacity = '0.5';
  treven[i].style.backgroundColor = 'blue';
  treven[i].style.opacity = '0.5';
  
}