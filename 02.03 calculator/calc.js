//заданы переменные
let page = document.querySelector('.page');
let themeButton = document.querySelector('.theme-button');

//переключает темы с тёмной на светлую и наоборот
themeButton.onclick = function () {
    page.classList.toggle("light-theme");
    page.classList.toggle("dark-theme")
}