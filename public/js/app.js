const title = document.getElementById('title')
let text = 'Nền tảng xây dựng Chatbot thông minh';
let lengthTitle = text.length;
let index = 0;
setInterval(function () {
  title.innerText =  text.slice(0,index)
 index ++
},100)

setTimeout(function addClass() {
 title.classList.add('active')
},1000)
function getTimeRandom() {
 return Math.floor(Math.random() * 1000);
}
setInterval(function toggleClass() {
 title.classList.toggle('active')
 getTimeRandom()
},getTimeRandom())