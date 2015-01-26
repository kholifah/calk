function toggleMenu(htmlClass){
  var obj = document.querySelector(htmlClass);
  var positionLeft = obj.style.left;
  if(positionLeft == '0px'){
    obj.style.left = "-100%";
  }else{
    obj.style.left = "0";
  }
}

function newTweet(button){
  var obj = document.querySelector('.new-tweet-form');
  if(obj.style.display === 'none' || obj.style.display == ''){
    obj.style.display = "block";
    obj.style.height = "10em";
    button.firstChild.className = "fa fa-close"
  }else{
    obj.style.height = "0";
    button.firstChild.className = "fa fa-plus"
    setTimeout(function(){
        obj.style.display = "none";
      },
      500
    );
  }
}

function calculateRemaining(htmlClass,e, text){
  var obj = document.querySelector(htmlClass);
  var filled = text.value.length
  if(e.keyCode>=65 && e.keyCode<=90){
    obj.innerHTML = parseInt(obj.innerHTML) - 1;
  }else if(e.keyCode == 8 || e.keyCode ==46){
    obj.innerHTML = 140 - filled;
  }
}