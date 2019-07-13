d=document;w=window;c=console;

function altForms() {
  // var l = w.pageXOffset || d.documentElement.scrollLeft,
  //     t = w.pageYOffset || d.documentElement.scrollTop;

  d.getElementById("homeAboveTheFoldImg").classList.toggle("homeATFImgHide");
  // if (d.getElementById("homeAboveTheFoldImg").classList.contains("homeATFImgHide")) {
  //   // c.log(d.getElementById("homeAboveTheFoldImg").scrollTop)
  //   c.log(t + " " + l)
  //
  //   d.getElementById("homeAboveTheFoldImg").style.top = d.documentElement.scrollTop;
  // }


  d.getElementById("homeForms").classList.toggle("overflow");
}
