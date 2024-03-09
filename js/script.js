"use strict"

document.addEventListener("DOMContentLoaded", function () {
   const form = document.getElementById('register');
   const sendingBack = document.querySelector('.main-registration');
   let warning = document.querySelector('.registration__warning');
   form.addEventListener('submit', formSend);

   async function formSend(e) {
      e.preventDefault();

      let error = formValidate(form);

      let formData = new FormData(form);

      if (error === 0) {
         warning.textContent = "Вы успешно зарегистрированы";
         warning.style.cssText += 'color: green';
         let response = await fetch('../php/register.php', {
            method: 'POST',
            body: formData
         });
         if (response.ok) {
            let result = await response.json();
            alert(result.message);
            formPreview.innerHTML = '';
            form.reset();
         } else {
            warning.style.cssText += 'color: red';
         }
      } else {
      }
   }

   function formValidate(form) {
      let error = 0;
      let formReq = document.querySelectorAll('._req');

      for (let index = 0; index < formReq.length; index++) {
         const input = formReq[index];
         formRemoveError(input);
         if (input.classList.contains('_mail')) {
            if (testMail(input)) {
               formAddError(input);
               error++;
               warning.textContent = "напишите действенную почту";
            }
         } else if (input.classList.contains('_req')) {
            if (input.value === '') {
               formAddError(input);
               error++;
               warning.textContent = "заполните все поля";
            }
         }
      }
      return error;
   }

   function formAddError(input) {
      input.classList.add('_error');
      input.classList.add('_error');
   }

   function formRemoveError(input) {
      input.classList.remove('_error');
      input.classList.remove('_error');
   }

   function testMail(input) {
      return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
   }

   //* login

   const loginForm = document.getElementById('login');
   const formSwiper = document.getElementById('form-swiper');
   let formTitle = document.querySelector('.form__title');

   formSwiper.addEventListener('click', function swiperForm() {
      warning.textContent = "";
      if (form.classList.contains('_active')) {
         loginForm.classList.add('_active');
         form.classList.remove('_active');
         formTitle.textContent = "авторизация";
      } else {
         loginForm.classList.remove('_active');
         form.classList.add('_active');
         formTitle.textContent = "регистрация";
      }
   });
});
