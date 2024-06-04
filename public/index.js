/****************************************************карусель****************************************** */
$(document).ready(function () {
    const defaultWidth = 300;
    const animationTime = 2 * 1000; /*1000 - переводим секунды в милисекунды*/
    const kollUrls = [
        'images/kollektiv.jpg',
        'images/kollektiv_mnogo.jpg',
        'images/kollectiv_rabota.jpg',
        'images/kollectiv_ura.jpg',
        'images/smile.jpg'
    ];
    let currentImageIndex = 3;

    $('.next').click(function(){ /*при нажатии на next*/
        $('.prev').animate({
            'width': 0     /*первая до 0*/
        }, animationTime); 
        $('.after-next').animate(
            {
            'width': defaultWidth, /*последняя появляется */
            /*'border-width': 1  */
            }, 
            animationTime,
            'swing',
            function(){

            moveImage('.center img', '.prev img');
            moveImage('.next img', '.center img');
            moveImage('.after-next img', '.next img');
            
            currentImageIndex++;
            if(currentImageIndex >= kollUrls.length){
                currentImageIndex  = 0;
            }
            const nextImageSrc = kollUrls[currentImageIndex];
            $('.after-next img').attr('src', nextImageSrc);

            $('.prev').css('width', defaultWidth);
            $('.after-next').css('width', 0);
                   
        });  
         
    });

    function moveImage(imageSource, imageDestination){ /*селекторы: imageSource - где лежала картинка, imageDestination - где картинка оказалась*/
        var centerImageSrc = $(imageSource).attr('src');
        $(imageDestination).attr('src', centerImageSrc);
    };

/*********************************************************************************************************** */
    $(".max").click(function () {
        let currentImage = $(this);
        rotateImage(currentImage, 90, () => {
        
        if (currentImage.hasClass("tarif")) {
            currentImage.find("img").attr("src", "images/opisanie.jpg");
            currentImage.removeClass("tarif");
          
        } else {
            currentImage.find("img").attr("src", "images/karta.png");
            currentImage.addClass("tarif");
        }
      })
        rotateImage(currentImage, 0);    
    });

        function rotateImage(blockToRotate, finalAngle, completeFunction) {
            blockToRotate.animate(
              {
                smile:
                  finalAngle /*поворачивает картину настолько, чему равно значение smile (работает по принципу цикла for)*/,
              },
              {
                duration: 0.5 * 1000,
                step: function (smile) {
                  console.log(smile);
                  $(this).css("transform", "rotateY(" + smile + "deg)");
                },
                complete: function () {
                  if (completeFunction) {
                    completeFunction();
                  }
                },
              }
            );
        }
    });
 