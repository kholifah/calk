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

function createCuih(form){
  var cuih = form.tweet.value;
  
  //start ajax
  var XHRequest
  if (window.XMLHttpRequest)
    XHRequest = new XMLHttpRequest();
  else
    XHRequest = new ActiveXObject("Microsoft.XMLHTTP"); // Untuk IE Jadul
  
  XHRequest.onreadystatechange=function(){
    if(XHRequest.readyState === 4 && XHRequest.status === 200){
      //tambahkan LI ke UL
      var response = JSON.parse(XHRequest.responseText);
      
      if(response.status === true){
        alert(response.message);
        var ul = document.querySelector('.tweets ul');
  
        var li = document.createElement('li');

        var postMeta = document.createElement('div');
        postMeta.innerHTML = '<img class="avatar" src="http://www.gravatar.com/avatar/?s=50" alt="">'+
          '<h2 class="name">'+
            'Anonymous<br/>'+
            '<small><a href="#">@'+response.data.calker+'</a></small>'+
          '</h2>';
        postMeta.className = "post-meta";

        var postContent = document.createElement('div');
        postContent.className = "post-content";
        postContent.innerHTML = response.data.cuih;

        var postDate = document.createElement('div');
        postDate.className = "date";
        postDate.innerHTML = response.data.date;

        li.appendChild(postMeta);
        li.appendChild(postContent);
        li.appendChild(postDate);

        ul.insertBefore(li,ul.childNodes[0]);
      }else{
        alert(response.message);
      }
      
    }
  }
  
  XHRequest.open('POST',"createCuih.php",true);
  XHRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  XHRequest.send("cuih="+cuih); 
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