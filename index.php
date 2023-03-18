<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=`, initial-scale=1.0">
     <title>Home</title>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               user-select: none;
          }
          body {
               background: #000;
          }
          ::-webkit-scrollbar {
               display: none;
          }
          .container {
               width: 100vw;
               height: 100vh;
               display: flex;
               justify-content: center;
               align-items: center;
               transform-style: preserve-3d;
               animation: box 7s linear infinite;
          }

          /* Dinding Rumah*/

          .box {
               position: absolute;
               background: blue;
               width: 300px;
               height: 300px;
               border-bottom: 10px solid brown;
               border-right: 5px solid brown;
               border-left: 5px solid brown;
               transform-style: preserve-3d;
               transform: rotateY(calc(90deg * var(--i))) translateZ(150px);
          }

          /* Pintu */

          .door {
               width: 100px;
               height: 200px;
               background: brown;
               position: absolute;
               top: 100px;
               left: 20px;
               outline: 5px solid black;
          }

          .door::before {
               content: '';
               position: absolute;
               top: 100px;
               left: 10px;
               width: 10px;
               height: 10px;
               background: #000;
               border-radius: 100%;
          }

          /* Jendela */

          .window {
               position: absolute;
               top: 100px;
               left: 150px;
               width: 100px;
               height: 100px;
               background: #fff;
               outline: 5px solid black;
          }

          .window::before {
               position: absolute;
               content: '';
               width: 100px;
               height: 5px;
               background: #000;
               top: 50px;
          }

          .window::after {
               position: absolute;
               content: '';
               width: 5px;
               height: 100px;
               background: #000;
               left: 50px;
          }

          .windows {
               width: 200px;
               height: 100px;
               background: #fff;
               position: absolute;
               top: 100px;
               left: 50px;
               outline: 5px solid #000;
          }

          .windows::before {
               position: absolute;
               content: '';
               background: #000;
               width: 200px;
               height: 5px;
               top: 50px;
          }

          .windows::after {
               position: absolute;
               content: '';
               background: #000;
               width: 5px;
               height: 100px;
               left: 100px;
          }

          /* Ventilasi */

          .ventilasi {
               width: 100px;
               height: 10px;
               background: #fff;
               outline: 5px solid #000;
               position: absolute;
               top: 70px;
               left: 20px;
          }

          .ventilasi::before {
               content: '';
               width: 100px;
               height: 10px;
               background: #fff;
               outline: 5px solid #000;
               position: absolute;
               top: 0;
               left: 130px;
          }

          .ventilasi1 {
               position: absolute;
               width: 200px;
               height: 10px;
               background: #fff;
               outline: 5px solid #000;
               top: 70px;
               left: 50px;
          }

          /* Teras */

          .teras {
               width: 300px;
               height: 150px;
               background: #fff;
               transform-style: preserve-3d;
               border: 5px solid brown;
               transform: rotateX(90deg) translateZ(-225px) translateY(50px);
          }

          .box1 {
               width: 300px;
               height: 300px;
               background: #fff;
               transform: rotateX(90deg) translateZ(-150px);
          }

          /* Atap */

          .atap {
               width: 400px;
               height: 300px;
               background: brown;
               position: absolute;
               border: 5px solid #000;
               transform: translateZ(128px) translateY(-165px) rotateX(60deg);
          }

          .atap1 {
               width: 400px;
               height: 300px;
               background: brown;
               position: absolute;
               border: 5px solid #000;
               transform: translateZ(-128px) translateY(-165px) rotateX(-60deg);
          }
          
          /* Animasi Berputar */                                                     

          @keyframes box {
               0% {
                    transform: rotateX(-10deg) rotateY(0deg);
               }
               100% {
                    transform: rotateX(-10deg) rotateY(-360deg);
               }
          }

     </style>
</head>
<body>
     <div class="container">
          <div class="box" style="--i:0; ">
               <div class="ventilasi"></div>
               <div class="door"></div>
               <div class="window"></div>
               <div class="teras"></div>
          </div>
          <div class="box" style="--i:1; ">
               <div class="windows"></div>
               <div class="ventilasi1"></div>
          </div>
          <div class="box" style="--i:2; ">
               <div class="ventilasi"></div>
               <div class="door"></div>
               <div class="window"></div>
          </div>
          <div class="box" style="--i:3; ">
               <div class="windows"></div>
               <div class="ventilasi1"></div>
          </div>
          <div class="box1" style="--b:white; "></div>
          <div class="atap"></div>
          <div class="atap1"></div>
     </div>
</body>
</html>