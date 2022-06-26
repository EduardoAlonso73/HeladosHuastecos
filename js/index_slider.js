/* document.getElementById('img02').src="../img/img04.jpg" */
window.addEventListener('load', function(){
    new Glider(document.querySelector('.carrousel_lista'), {
        slidesToShow: 1,
        slidesToScroll:1,
        draggable: true,
        dots: '.carrousel_indicadores',
        arrows: {
          prev: '.carrousel_anterios',
          next: '.carrousel_siguiente'
        },
        responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 450,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 1,
              slidesToScroll: 1,
            
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
         
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 950,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
         
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 1172,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
         
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 1200,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
         
            }
          }
        ]

      });
})