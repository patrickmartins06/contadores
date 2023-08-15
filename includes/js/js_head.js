

function togleMobMenu() {
    var navMobMenu = document.querySelector('#navMobMenu')
    if (navMobMenu.classList.contains('navMobOn')) {
        navMobMenu.classList.remove('navMobOn')
    } else {
        navMobMenu.classList.add('navMobOn')
    }
}

// function resizeIframe(obj) {
//     obj.style.height = '1809px';
//     obj.style.height = getComputedStyle(obj.contentWindow.document.documentElement).height;

//     setInterval(function () {
//         var obj = document.querySelector('iframe')
//         obj.style.height = getComputedStyle(obj.contentWindow.document.documentElement).height

//     }, 1000)

// }
