// ***************** ПЛАВНЫЙ СКРОЛЛ ДО БЛОКА ***************** //

const ButtonsScroll = document.querySelectorAll('#button[data-goto]');
if (ButtonsScroll.length > 0) {
   ButtonsScroll.forEach(ButtonScroll => {
      ButtonScroll.addEventListener("click", onButtonClick);
   });

   function onButtonClick(e) {
      const ButtonScroll = e.target;
      if (ButtonScroll.dataset.goto && document.querySelector(ButtonScroll.dataset.goto)) {
         const gotoBlock = document.querySelector(ButtonScroll.dataset.goto);
         const gotoBlockValue = gotoBlock.getBoundingClientRect().top + scrollY - document.querySelector('header').offsetHeight;

         if (iconMenu.classList.contains('_active')) {
            document.body.classList.remove('_lock');
            iconMenu.classList.remove('_active');
            menuBody.classList.remove('_active');
         }

         window.scrollTo({
            top: gotoBlockValue,
            behavior: "smooth"
         });
         e.preventDefault();
      }
   }

};
