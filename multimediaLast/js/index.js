
const activateHmenu = () => {
    // 1.ハンバーガーメニューを取得
    // 2.条件->ハンバーガーメニューをクリックしたら
    // 3.activeというクラスを付与する

    let target = document.querySelector('#Hmenu'),
        activeClass = 'active';

    let menu = document.querySelectorAll('.gTriger');

    let navbody = document.querySelector('.gnavbody');

    target.addEventListener('click', function (e) {
        var cl = e.currentTarget.classList;

        if (cl.contains(activeClass)) {
            cl.remove(activeClass);
            navbody.classList.remove(activeClass);
            menu.forEach(function (value) {
                value.classList.remove(activeClass);
            });
        } else {
            cl.add(activeClass);
            navbody.classList.add(activeClass);
            menu.forEach(function (value) {
                value.classList.add(activeClass);
            });
        }
        menu.forEach(function (value) {
            console.log(value);
        });

    });

    menu.forEach(function (values) {
        values.addEventListener('click', function (e) {

            target.classList.remove(activeClass);
            navbody.classList.remove(activeClass);
            menu.forEach(function (value) {
                value.classList.remove(activeClass);
            });

        });
    });

};

// const lazyImg = () => {
//     let images = [].slice.call(document.querySelectorAll('img.lazy'));
//     let isActive = false;

//     const lazyload = () => {
//         if (isActive == false) {
//             isActive = true;
//             setTimeout(() => {
//                 images.forEach((e) => {
//                     var isViewTop = e.getBoundingClientRect().top <= window.innerHeight,
//                         isViewBtm = e.getBoundingClientRect().bottom >= 0,
//                         isDisplay = getComputedStyle(e).display != 'none';
//                     if ((isViewTop && isViewBtm) && isDisplay) {
//                         e.src = e.dataset.src;
//                         e.classList.remove('lazy');
//                         images = images.filter((image) => { return image != e; });
//                         if (images.length == 0) {
//                             document.removeEventListener('scroll', lazyload);
//                             window.removeEventListener('resize', lazyload);
//                         }
//                     }
//                 });
//                 isActive = false;
//             }, 200);
//         }
//     }
//         document.addEventListener('scroll', lazyload);
//         window.addEventListener('resize', lazyload);
// };

// document.addEventListener('DOMContentLoaded', lazyImg);


onload = activateHmenu;
