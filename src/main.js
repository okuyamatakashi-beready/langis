// SCSSをJavaScriptのエントリーポイントからインポートする
import './scss/style.scss';

console.log('Vite + WordPress = ❤️');

document.addEventListener('DOMContentLoaded', () => {
    const menuTrigger = document.querySelector('.header__menu-trigger');
    const globalMenu = document.querySelector('.global-menu');

    if (menuTrigger && globalMenu) {
        menuTrigger.addEventListener('click', () => {
            menuTrigger.classList.toggle('is-active');
            globalMenu.classList.toggle('is-active');
        });
    }
});
