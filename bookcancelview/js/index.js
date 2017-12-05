var	body     = document.getElementsByTagName('body')[0],
    twitter  = document.getElementsByClassName('twitter')[0];

twitter.addEventListener("mouseover",function() {
    body.classList.add('linked');
},false);

twitter.addEventListener("mouseout", function() {
    body.classList.remove('linked');
}, false);