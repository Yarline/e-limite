// $(window).bind('mousewheel', function(event) {
//     if (event.originalEvent.wheelDelta >= 0) {
//         document.querySelector('header').style.position="fixed"
//     }
//     else {
//         document.querySelector('header').style.position=""
        

//     }
//     });

function menu() {
    if (document.getElementById('burger').classList.contains('open')) {
        document.getElementsByClassName('mobile_link-group')[0].style.display = 'none';
        document.getElementById('burger').classList.remove('open');
    } else {
        document.getElementsByClassName('mobile_link-group')[0].style.display = 'block';
        document.getElementById('burger').classList.add('open');
    }
}

function popUp(){
    document.getElementById('overlay').style.display='block'
}
function popUpContact(){
    document.getElementById('overlay_contact_form').style.display='block'
}

$('.close').click(function(){
    document.getElementById('overlay').style.display='none'
    return false;
    
})   
$('.close_contact').click(function(){
    document.getElementById('overlay_contact_form').style.display='none'
    return false;
    
}) 

var container = document.getElementById('sucessStory-ancre')
var slider = document.getElementById('slider-card_wrapper');
var slides = document.getElementsByClassName('testimonyCard').length;
var buttons = document.getElementsByClassName('btn');


var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = slides - slidesPerPage;
var containerWidth = container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;


$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    prevArrow:'<div class="prev-arrow"><span class="iconify" data-icon="akar-icons:chevron-left" data-width="30"></span></div>',
        nextArrow:'<div class="next-arrow"><span class="iconify" data-icon="akar-icons:chevron-right" data-width="30"></span></div>',
    responsive: [
      {
        breakpoint: 1000,
        settings: {
        //   arrows: false,
        prevArrow:'<span class="iconify prev-arrow" data-icon="akar-icons:chevron-left" data-width="30"></span>',
        nextArrow:'<span class="iconify next-arrow" data-icon="akar-icons:chevron-right" data-width="30"></span>',
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
        prevArrow:'<span class="iconify next-arrow" data-icon="akar-icons:chevron-right" data-width="24"></span>',
        nextArrow:'<span class="iconify next-arrow" data-icon="akar-icons:chevron-right" data-width="24"></span>',
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

window.onload = function () {
    var typeString = ['Il suffit de te lancer !', 'T\'as tout pour toi'];
    var i = 0;
    var count = 0
    var selectedText = '';
    var text = '';
    var textTimeOut;
    (function type() {
        if (count == typeString.length) {
            count = 0;
        }
        selectedText = typeString[count];
        text = selectedText.slice(0, ++i);
        document.getElementById('typing').innerHTML = text;
        if (text.length === selectedText.length) {
            count++;
            i = 0;
            textTimeOut = setTimeout(type, 1000);
        } else {
            textTimeOut = setTimeout(type, 50);
        }

    }());

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

}