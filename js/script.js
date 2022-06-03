// MODALS
/* Get the modals*/
var modal = document.getElementById('id01', 'id02', 'id03');

/* When the user clicks anywhere outside of the modal, close it*/
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


/*FAQ dropdown*/
var buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const faq = button.nextElementSibling;
        const icon = button.children[1];

        faq.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )


/*FOR TUMBNAILS*/
// Henter alle iframe elementer
var iframes = document.querySelectorAll('iframe');

var container = document.querySelectorAll('h3 a');
//console.log(iframes.length)

// Creating an empty list
var urlArray = []
// Extracitng tumbnail for each iframe element
for (var i = 0; i < iframes.length; i++){
    var iframe_src = iframes[i].getAttribute('src');
    var youtube_video_id = iframe_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
    //urlArray.push(iframe_src);
    //console.log(urlArray);

    // Running if-test to validate video id before 
    if (youtube_video_id.length == 11) {
        var video_thumbnail = '<img id="imgID" width="420px" height="236px" src="http://img.youtube.com/vi/'+youtube_video_id+'/0.jpg">';
        urlArray.push(video_thumbnail);

        var containeR = container[i];
        containeR.innerHTML += urlArray[i];
    }
}
