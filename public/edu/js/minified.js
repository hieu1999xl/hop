function togglePopup(){document.getElementById("popup-1").classList.toggle("active"),document.getElementById("popup-1").classList[1]?document.getElementById("overflow_body").style.overflow="hidden":document.getElementById("overflow_body").style.overflow="auto"}function togglePopupModal(){document.getElementById("popup-1_modal").classList.toggle("active"),document.getElementById("popup-1_modal").classList[1]?document.getElementById("overflow_body").style.overflow="hidden":document.getElementById("overflow_body").style.overflow="auto"}function validateFormModal(){var e=!0;let t=document.getElementById("full_name_modal").value,l=document.getElementById("company_modal").value,i=document.getElementById("email_modal").value;return""===t||null===t?(document.getElementById("name_text_modal").style.display="block",document.getElementById("name_text_modal").style.visibility="visible",document.getElementById("special_text_modal").style.visibility="hidden",e=!1):/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]+/.test(t)?(document.getElementById("name_text_modal").style.display="none",document.getElementById("special_text_modal").style.visibility="visible",e=!1):(document.getElementById("name_text_modal").style.visibility="hidden",document.getElementById("special_text_modal").style.visibility="hidden",e=!0),""===l||null===l?(document.getElementById("name_company_modal").style.display="block",document.getElementById("name_company_modal").style.visibility="visible",document.getElementById("special_company_modal").style.visibility="hidden",e=!1):/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(l)?(document.getElementById("name_company_modal").style.display="none",document.getElementById("special_company_modal").style.visibility="visible",e=!1):(document.getElementById("name_company_modal").style.visibility="hidden",document.getElementById("special_company_modal").style.visibility="hidden",e=!0),""===i||null===i?(document.getElementById("name_email_modal").style.display="block",document.getElementById("name_email_modal").style.visibility="visible",document.getElementById("special_email_modal").style.visibility="hidden",e=!1):/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(i)?(document.getElementById("name_email_modal").style.visibility="hidden",document.getElementById("special_email_modal").style.visibility="hidden",e=!0):(document.getElementById("name_email_modal").style.display="none",document.getElementById("special_email_modal").style.visibility="visible",e=!1),e}async function userCreateModal(){await validateFormModal();let e=document.getElementById("full_name_modal").value,t=document.getElementById("company_modal").value,l=document.getElementById("email_modal").value,i=document.getElementById("note_modal").value;if(validateFormModal()&&!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]+/.test(e)&&!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(t)&&""!==t&&""!==e){togglePopupModal();let a=new XMLHttpRequest;a.open("POST","https://tso.vn/api/contact"),a.setRequestHeader("Content-Type","application/json;charset=UTF-8"),a.send(JSON.stringify({full_name:e,company:t,email:l,note:i,type:"Edu"})),a.onreadystatechange=function(){4==this.readyState&&200===this.status&&(JSON.parse(this.responseText),loadTable())}}}function validateForm(){var e=!0;let t=document.getElementById("full_name").value,l=document.getElementById("company").value,i=document.getElementById("email").value;return""===t||null===t?(document.getElementById("name_text").style.display="block",document.getElementById("name_text").style.visibility="visible",document.getElementById("special_text").style.visibility="hidden",e=!1):/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]+/.test(t)?(document.getElementById("name_text").style.display="none",document.getElementById("special_text").style.visibility="visible",e=!1):(document.getElementById("name_text").style.visibility="hidden",document.getElementById("special_text").style.visibility="hidden",e=!0),""===l||null===l?(document.getElementById("company_text").style.display="block",document.getElementById("company_text").style.visibility="visible",document.getElementById("special_company").style.visibility="hidden",e=!1):/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(l)?(document.getElementById("company_text").style.display="none",document.getElementById("special_company").style.visibility="visible",e=!1):(document.getElementById("company_text").style.visibility="hidden",document.getElementById("special_company").style.visibility="hidden",e=!0),""===i||null===i?(document.getElementById("email_text").style.display="block",document.getElementById("email_text").style.visibility="visible",document.getElementById("special_email").style.visibility="hidden",e=!1):/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(i)?(document.getElementById("email_text").style.visibility="hidden",document.getElementById("special_email").style.visibility="hidden",e=!0):(document.getElementById("email_text").style.display="none",document.getElementById("special_email").style.visibility="visible",e=!1),e}async function userCreate(){await validateForm();let e=document.getElementById("full_name").value,t=document.getElementById("company").value,l=document.getElementById("email").value,i=document.getElementById("note").value;if(validateForm()&&!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]+/.test(e)&&!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(t)&&""!==t&&""!==e){togglePopup();let a=new XMLHttpRequest;a.open("POST","https://tso.vn/api/contact"),a.setRequestHeader("Content-Type","application/json;charset=UTF-8"),a.send(JSON.stringify({full_name:e,company:t,email:l,note:i,type:"Edu"})),a.onreadystatechange=function(){4==this.readyState&&200===this.status&&(JSON.parse(this.responseText),loadTable())}}}$(".owl-carousel").owlCarousel({loop:!0,margin:10,nav:!1,navText:["<img class='img_owl' src='./images/prev.png' alt='prev'>","<img class='img_owl' src='./images/next.png' alt='next'>",],autoplay:!0,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:3},1e3:{items:4}}}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>50?$(".header__nav-container").addClass("header__nav-solid"):$(".header__nav-container").removeClass("header__nav-solid")})}),$(function(){let e=0;e=window.innerWidth<=1280?60:70,$("a.header__nav-link").bind("click",function(t){document.getElementById("menu").checked=!document.getElementById("menu").checked;var l=$(this);$("html, body").stop().animate({scrollTop:$(l.attr("href")).offset().top-e},0,"easeInOutExpo"),t.preventDefault()})});