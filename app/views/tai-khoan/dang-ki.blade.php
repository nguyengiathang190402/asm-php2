<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <style>
       .box {
  position: relative;
  top: 0;
  opacity: 1;
  float: left;
  padding: 60px 50px 40px 50px;
  width: 100%;
  background: #fff;
  border-radius: 10px;
  transform: scale(1);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  z-index: 5;

  &.back {
    transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -ms-transform: scale(0.95);
    top: -20px;
    opacity: .8;
    z-index: -1;
  }

  &:before {
    content: "";
    width: 100%;
    height: 30px;
    border-radius: 10px;
    position: absolute;
    top: -10px;
    background: rgba(255, 255, 255, 0.6);
    left: 0;
    transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -ms-transform: scale(0.95);
    z-index: -1;
  }
}

.overbox .title {
  color: #fff;

  &:before {
    background: #fff;
  }
}

.title {
  width: 100%;
  float: left;
  line-height: 46px;
  font-size: 34px;
  font-weight: 700;
  letter-spacing: 2px;
  color: #ED2553;
  position: relative;

  &:before {
    content: "";
    width: 5px;
    height: 100%;
    position: absolute;
    top: 0;
    left: -50px;
    background: #ED2553;
  }
}

.input {
  transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);

  label, input, .spin {
    transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  }
}

.button {
  transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);

  button .button.login button i.fa {
    transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  }
}

.material-button .shape {
  &:before, &:after {
    transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
    -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  }
}

.button.login button {
  transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
}

.material-button, .alt-2, .material-button .shape, .alt-2 .shape, .box {
  transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
}

.input {
  width: 100%;
  float: left;

  label, input, .spin {
    width: 100%;
    float: left;
  }
}

.button {
  width: 100%;
  float: left;

  button {
    width: 100%;
    float: left;
  }
}

.input, .button {
  margin-top: 30px;
  height: 70px;
}

.input {
  position: relative;

  input {
    position: relative;
  }
}

.button {
  position: relative;

  button {
    position: relative;
  }
}

.input {
  input {
    height: 60px;
    top: 10px;
    border: none;
    background: transparent;
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    color: rgba(0, 0, 0, 0.8);
    font-weight: 300;
  }

  label {
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    color: rgba(0, 0, 0, 0.8);
    font-weight: 300;
  }
}

.button button {
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  color: rgba(0, 0, 0, 0.8);
  font-weight: 300;
}

.input {
  &:before, .spin {
    width: 100%;
    height: 1px;
    position: absolute;
    bottom: 0;
    left: 0;
  }

  &:before {
    content: "";
    background: rgba(0, 0, 0, 0.1);
    z-index: 3;
  }

  .spin {
    background: #ED2553;
    z-index: 4;
    width: 0;
  }
}

.overbox .input {
  .spin {
    background: rgba(255, 255, 255, 1);
  }

  &:before {
    background: rgba(255, 255, 255, 0.5);
  }
}

.input label {
  position: absolute;
  top: 10px;
  left: 0;
  z-index: 2;
  cursor: pointer;
  line-height: 60px;
}

.button {
  &.login {
    width: 60%;
    left: 20%;

    button {
      width: 100%;
      line-height: 64px;
      left: 0%;
      background-color: transparent;
      border: 3px solid rgba(0, 0, 0, 0.1);
      font-weight: 900;
      font-size: 18px;
      color: rgba(0, 0, 0, 0.2);
    }
  }

  button {
    width: 100%;
    line-height: 64px;
    left: 0%;
    background-color: transparent;
    border: 3px solid rgba(0, 0, 0, 0.1);
    font-weight: 900;
    font-size: 18px;
    color: rgba(0, 0, 0, 0.2);
  }

  &.login {
    margin-top: 30px;
  }

  margin-top: 20px;

  button {
    background-color: #fff;
    color: #ED2553;
    border: none;
  }

  &.login button {
    &.active {
      border: 3px solid transparent;
      color: #fff !important;

      span {
        opacity: 0;
        transform: scale(0);
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
      }

      i.fa {
        opacity: 1;
        transform: scale(1) rotate(-0deg);
        -webkit-transform: scale(1) rotate(-0deg);
        -ms-transform: scale(1) rotate(-0deg);
      }
    }

    i.fa {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      line-height: 60px;
      transform: scale(0) rotate(-45deg);
      -webkit-transform: scale(0) rotate(-45deg);
      -ms-transform: scale(0) rotate(-45deg);
    }

    &:hover {
      color: #ED2553;
      border-color: #ED2553;
    }
  }

  margin: 40px 0;
  overflow: hidden;
  z-index: 2;

  button {
    cursor: pointer;
    position: relative;
    z-index: 2;
  }
}

.pass-forgot {
  width: 100%;
  float: left;
  text-align: center;
  color: rgba(0, 0, 0, 0.4);
  font-size: 18px;
}

.click-efect {
  position: absolute;
  top: 0;
  left: 0;
  background: #ED2553;
  border-radius: 50%;
}

.overbox {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  overflow: inherit;
  border-radius: 10px;
  padding: 60px 50px 40px 50px;

  .title, .button, .input {
    z-index: 111;
    position: relative;
    color: #fff !important;
    display: none;
  }

  .title {
    width: 80%;
  }

  .input {
    margin-top: 20px;

    input, label {
      color: #fff;
    }
  }

  .material-button, .alt-2 {
    display: block;

    .shape {
      display: block;
    }
  }
}

.material-button, .alt-2 {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background: #ED2553;
  position: absolute;
  top: 40px;
  right: -70px;
  cursor: pointer;
  z-index: 100;
  transform: translate(0%, 0%);
  -webkit-transform: translate(0%, 0%);
  -ms-transform: translate(0%, 0%);
}

.material-button .shape, .alt-2 .shape {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

.material-button .shape:before, .alt-2 .shape:before, .material-button .shape:after, .alt-2 .shape:after {
  content: "";
  background: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(360deg);
  -webkit-transform: translate(-50%, -50%) rotate(360deg);
  -ms-transform: translate(-50%, -50%) rotate(360deg);
}

.material-button .shape:before, .alt-2 .shape:before {
  width: 25px;
  height: 4px;
}

.material-button .shape:after, .alt-2 .shape:after {
  height: 25px;
  width: 4px;
}

.material-button.active, .alt-2.active {
  top: 50%;
  right: 50%;
  transform: translate(50%, -50%) rotate(0deg);
  -webkit-transform: translate(50%, -50%) rotate(0deg);
  -ms-transform: translate(50%, -50%) rotate(0deg);
}

body {
  background-image: url(https://lh4.googleusercontent.com/-XplyTa1Za-I/VMSgIyAYkHI/AAAAAAAADxM/oL-rD6VP4ts/w1184-h666/Android-Lollipop-wallpapers-Google-Now-Wallpaper-2.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100vh;
  font-family: 'Roboto', sans-serif;
  overflow: hidden;
}

html {
  overflow: hidden;
}

.materialContainer {
  width: 100%;
  max-width: 460px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style-type: none;
  outline: none;

  &:after, &::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
    outline: none;
  }
}
    </style>
</head>
<body>
<div class="materialContainer">
<div class="box">
<form id="signup" action="" method="post">
   <div class="material-button alt-2"><span class="shape"></span></div>

   <div class="title">Đăng kí</div>

   <div class="inputs">
      <div class="IPemail"><input type="email" name="email" id="email" placeholder=" e-mail" autofocus />
            <span id="emailSpan" style="color:red"></span>
      <span class="spin"></span>
   </div>
   <div class="IPname">
         <input type="name" name="name" id="name" placeholder="Name" />
         <span id="nameSpan" style="color:red"></span>
         <span class="spin"></span>
   </div>
   <div class="IPpass">
      <input type="password" name="password" id="password" placeholder="Password" />
      <span id="passSpan" style="color:red"></span>
      <span class="spin"></span>
   </div>

   <div class="input">
   <label class="terms">Đã có tài khoản</label><a href="{{ BASE_URL . 'tai-khoan/dang-nhap' }}" style="text-decoration: none;font-style: italic;">Đăng Nhập</a>
                        </div>
      <span class="spin"></span>
   </div>

   <div class="button">
   <button type="submit" id="submit">Đăng Kí</button>
   </div>
   </form>

</div>



</div>



</div>
<script>
$(function() {

$(".input input").focus(function() {

   $(this).parent(".input").each(function() {
      $("label", this).css({
         "line-height": "18px",
         "font-size": "18px",
         "font-weight": "100",
         "top": "0px"
      })
      $(".spin", this).css({
         "width": "100%"
      })
   });
}).blur(function() {
   $(".spin").css({
      "width": "0px"
   })
   if ($(this).val() == "") {
      $(this).parent(".input").each(function() {
         $("label", this).css({
            "line-height": "60px",
            "font-size": "24px",
            "font-weight": "300",
            "top": "10px"
         })
      });

   }
});

$(".button").click(function(e) {
   var pX = e.pageX,
      pY = e.pageY,
      oX = parseInt($(this).offset().left),
      oY = parseInt($(this).offset().top);

   $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
   $('.x-' + oX + '.y-' + oY + '').animate({
      "width": "500px",
      "height": "500px",
      "top": "-250px",
      "left": "-250px",

   }, 600);
   $("button", this).addClass('active');
})

$(".alt-2").click(function() {
   if (!$(this).hasClass('material-button')) {
      $(".shape").css({
         "width": "100%",
         "height": "100%",
         "transform": "rotate(0deg)"
      })

      setTimeout(function() {
         $(".overbox").css({
            "overflow": "initial"
         })
      }, 600)

      $(this).animate({
         "width": "140px",
         "height": "140px"
      }, 500, function() {
         $(".box").removeClass("back");

         $(this).removeClass('active')
      });

      $(".overbox .title").fadeOut(300);
      $(".overbox .input").fadeOut(300);
      $(".overbox .button").fadeOut(300);

      $(".alt-2").addClass('material-buton');
   }

})

$(".material-button").click(function() {

   if ($(this).hasClass('material-button')) {
      setTimeout(function() {
         $(".overbox").css({
            "overflow": "hidden"
         })
         $(".box").addClass("back");
      }, 200)
      $(this).addClass('active').animate({
         "width": "700px",
         "height": "700px"
      });

      setTimeout(function() {
         $(".shape").css({
            "width": "50%",
            "height": "50%",
            "transform": "rotate(45deg)"
         })

         $(".overbox .title").fadeIn(300);
         $(".overbox .input").fadeIn(300);
         $(".overbox .button").fadeIn(300);
      }, 700)

      $(this).removeClass('material-button');

   }

   if ($(".alt-2").hasClass('material-buton')) {
      $(".alt-2").removeClass('material-buton');
      $(".alt-2").addClass('material-button');
   }

});

});
</script>
<script>
    var email = document.querySelector("#email");
    var valEmail = document.querySelector("#emailSpan");
    var ten = document.querySelector("#name");
    var valName = document.querySelector("#nameSpan");
    var pass = document.querySelector("#password");
    var valPass = document.querySelector("#passSpan");
    email.onblur = function() {
        var val1 = this.value;
        var pattern1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var check1 = pattern1.test(val1);
        if (!check1) {
            valEmail.innerText = "Bạn nhập ko đúng email.";
        } else {
            valEmail.innerText = "";
        }
    }
    ten.onblur = function() {
        var val5 = this.value;
        if (val5 === "") {
            valName.innerText = "Nhập tên";
        } else {
            valName.innerText = "";
        }
    }
    pass.onblur = function() {
        var val4 = this.value;
        if (val4 === "") {
            valPass.innerText = "Nhập mật khẩu";
        } else {
            valPass.innerText = "";
        }
    }
    var slideIndex = 1;
    showDivs(slideIndex);
    function plusDivs(n) {
        showDivs(slideIndex += n);
    }
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-red";
    }
</script>
</body>
</html>