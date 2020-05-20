d=document;w=window;c=console;

function altForms() {
  d.getElementById("homeAboveTheFoldImg").classList.toggle("homeATFImgHide");
  d.getElementById("homeForms").classList.toggle("overflow");
}

function closePopup() {
  d.querySelector('.cookiesPopup').style.bottom = '-500px';
  createCookie("popupClosed",true, 10);
}
w.onload=()=>{
  if (readCookie('popupClosed')) {
    d.querySelector('.cookiesPopup').style.display="none";
  }
  d.getElementById("load").style.top="-100vh";
}


c.log(readCookie('popupClosed'));

function createCookie(n,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toUTCString();}else var expires="";d.cookie=n+"="+value+expires+"; path=/";}
function readCookie  (n){var m=n+"=",a=d.cookie.split(';');for(var i=0;i<a.length;i++){var c=a[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(m)==0)return c.substring(m.length,c.length);}return null;}
function eraseCookie (n){createCookie(n,"",-1)}



// alternates a class from a selector of choice, example:
// <div class="someButton" onclick="altClassFromSelector('activ', '#navBar')"></div>
const altClassFromSelector = ( clase, selector, mainClass = false )=>{
  const x = d.querySelector(selector);
  // if there is a main class removes all other classes
  if(mainClass){
    x.classList.forEach( item=>{
      // TODO: testear si anda con el nuevo condicional
      if( item!=mainClass && item!=clase ){
        x.classList.remove(item);
      }
    });
  }

  if(x.classList.contains(clase)){
    x.classList.remove(clase)
  }else{
    x.classList.add(clase)
  }
}
