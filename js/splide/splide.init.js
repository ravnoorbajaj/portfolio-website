   document.addEventListener('DOMContentLoaded', function () {
       new Splide
       ('#proj-splider',{
           rewind:true,
       }).mount();
   });

   document.addEventListener('DOMContentLoaded', function () {
       new Splide('#card-slider', {
           perPage: 2,
           rewind:true,
           breakpoints: {
               768: {
                   perPage: 1,
               }
           }
       }).mount();
   });
   
