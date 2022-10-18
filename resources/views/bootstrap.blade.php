<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bootstrap</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
      *{
         box-sizing: border-box;
      }
      .swiper{
         width: 100%;
         height: calc(100vh - 88px);
      }
      .line{
         margin: auto;
         margin-top: 5%;
         margin-bottom: 5%;
      }
      .box{
         background-color: gray;
         margin: 5px;
      }
   </style>
</head>
<body>
   <nav class="navbar bg">
      <div class="container-lg">
         <a class="navbar-brand" href="#">
            <img src="./img/logo.svg" alt="Logo" width="106" height="60" class="d-inline-block align-text-top">
         </a>
         <ul class="nav justify-content-end">
            <li class="nav-item">
               <a class="nav-link" href="/"><button type="button" class="btn">HOME</button></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><button type="button" class="btn">Blog</button></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><button type="button" class="btn">Portfolio</button></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><button type="button" class="btn">About</button></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><button type="button" class="btn">Contact</button></a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-body" href="/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                     <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-body" href="/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                     <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
               </a>
            </li>
         </ul>
      </div>
   </nav>

   <main>
      <div class="container-fluid p-0">
         <div class="swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide bg-secondary"></div>
               <div class="swiper-slide bg-secondary"></div>
               <div class="swiper-slide bg-secondary"></div>
               ...
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
         </div>
      </div>

      <div class="container-lg my-5">
         <div class="col-12">
            <h2 class="text-center">Raw Denim Heirloom Man Braid</h2>
            <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice<br>
               poutine, ramps microdosing banh mi pug.</p>
            <div class="col-1 m-auto border border-2 border-primary"></div>
         </div>
         <div class="col-12 d-flex p-5">
            <div class="col-4">
               <h5 class="text-center">Shooting Stars</h5>
               <p class="text-center">
                  Blue bottle crucifix vinyl post-ironic four dollar toast<br>
                  vegan taxidermy. Gastropub indxgo juice poutine,<br>
                  ramps microdosing banh mi pug VHS try-hard.
               </p>
               <p class="text-center text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
            <div class="col-4">
               <h5 class="text-center">The Catalyzer</h5>
               <p class="text-center">
                  Blue bottle crucifix vinyl post-ironic four dollar toast<br>
                  vegan taxidermy. Gastropub indxgo juice poutine,<br>
                  ramps microdosing banh mi pug VHS try-hard.
               </p>
               <p class="text-center text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
            <div class="col-4">
               <h5 class="text-center">Neptune</h5>
               <p class="text-center">
                  Blue bottle crucifix vinyl post-ironic four dollar toast<br>
                  vegan taxidermy. Gastropub indxgo juice poutine,<br>
                  ramps microdosing banh mi pug VHS try-hard.
               </p>
               <p class="text-center text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
         </div>
         <div class="col-12 text-center">
            <button type="button" class="btn btn-primary">Button</button>
         </div>
      </div>

      <div class="container-lg">
         <div class="row d-flex">
            <div class="col-4">
               <h2>Master Cleanse Reliac Heirloom</h2>
            </div>
            <div class="col-8">
               <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 p-2"><img class="img-fluid" src="./img/500x300.png" alt=""></div>
                  <div class="col-md-6 p-2"><img class="img-fluid" src="./img/500x300.png" alt=""></div>
               </div>
               <div class="row">
                  <div class="col-md-12 p-2"><img class="w-100" src="./img/600x360.png" alt=""></div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-12 p-2"><img class="w-100" src="./img/600x360.png" alt=""></div>
               </div>
               <div class="row">
                  <div class="col-md-6 p-2"><img class="img-fluid" src="./img/500x300.png" alt=""></div>
                  <div class="col-md-6 p-2"><img class="img-fluid" src="./img/500x300.png" alt=""></div>
               </div>
            </div>
         </div>
      </div>

      <div class="container-lg my-5">
         <div class="col-8 m-auto">
            <h2 class="text-center">Pricing</h2>
            <p class="text-center">
               Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee
            </p>
         </div>
         <div class="col-8 m-auto my-5">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">Plan</th>
                     <th scope="col">Speed</th>
                     <th scope="col">Storage</th>
                     <th scope="col">Price</th>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">Start</th>
                     <td>5 Mb/s</td>
                     <td>15 GB</td>
                     <td>Free</td>
                     <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></td>
                  </tr>
                  <tr>
                     <th scope="row">Pro</th>
                     <td>25 Mb/s</td>
                     <td>25 GB</td>
                     <td>$24</td>
                     <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></td>
                  </tr>
                  <tr>
                     <th scope="row">Business</th>
                     <td>36 Mb/s</td>
                     <td>40 GB</td>
                     <td>$50</td>
                     <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></td>
                  </tr>
                  <tr>
                     <th scope="row">Exclusive</th>
                     <td>48 Mb/s</td>
                     <td>120 GB</td>
                     <td>$72</td>
                     <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="col-8 m-auto my-5 d-flex justify-content-between">
            <p class="text-primary">
               Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
            </p>
            <div>
               <button type="button" class="btn btn-primary">Button</button>
            </div>
         </div>
      </div>

      <div class="container-lg">
         <div class="row d-flex m-3 p-3">
            <div class="col-6">
               <h2>Pitchfork Kickstarter Taxidermy</h2>
               <div class="col-2 border border-2 border-primary"></div>
            </div>
            <div class="col-6">
               <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
         </div>
         <div class="col-12 d-flex">
            <div class="card mb-3 m-3 p-4">
               <img src="./img/720x400.png" class="card-img-top" alt="">
               <p class="card-text text-primary">SUBTITLE</p>
               <h5 class="card-title">Chichen Itza</h5>
               <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
            </div>
            <div class="card mb-3 m-3 p-4">
               <img src="./img/720x400.png" class="card-img-top" alt="">
               <p class="card-text text-primary">SUBTITLE</p>
               <h5 class="card-title">Colosseum Roma</h5>
               <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
            </div>
            <div class="card mb-3 m-3 p-4">
               <img src="./img/720x400.png" class="card-img-top" alt="">
               <p class="card-text text-primary">SUBTITLE</p>
               <h5 class="card-title">Great Pyramid of Giza</h5>
               <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
            </div>
            <div class="card mb-3 m-3 p-4">
               <img src="./img/720x400.png" class="card-img-top" alt="">
               <p class="card-text text-primary">SUBTITLE</p>
               <h5 class="card-title">San Francisco</h5>
               <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
            </div>
         </div>
      </div>

      <div class="container-lg my-5">
         <div class="col-8 d-flex m-auto">
            <div class="col-2 d-flex rounded-circle bg-primary bg-opacity-25 justify-content-center align-items-center">
               <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-50 h-50" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
               </svg>
            </div>
            <div class="col-9 mx-5">
               <h5>Shooting Stars</h5>
               <p>
                  Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
               </p>
               <p class="text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
         </div>
         <div class="col-8 m-auto border border-1 border-secondary opacity-25 my-5"></div>
         <div class="col-8 d-flex m-auto">
            <div class="col-9 mx-5">
               <h5>The Catalyzer</h5>
               <p>
                  Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
               </p>
               <p class="text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
            <div class="col-2 d-flex rounded-circle bg-primary bg-opacity-25 justify-content-center align-items-center">
               <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-50 h-50" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
               </svg>
            </div>
         </div>
         <div class="col-8 m-auto border border-1 border-secondary opacity-25 my-5"></div>
         <div class="col-8 d-flex m-auto">
            <div class="col-2 d-flex rounded-circle bg-primary bg-opacity-25 justify-content-center align-items-center">
               <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-50 h-50" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="col-9 mx-5">
               <h5>The 400 Blows</h5>
               <p>
                  Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
               </p>
               <p class="text-primary">
                  Learn More<i class="fa-solid fa-arrow-right" style="height: 16px; width:16px; margin-left: 10px;"></i>
               </p>
            </div>
         </div>
         <div class="col-12 my-5 text-center">
            <button type="button" class="btn btn-primary">Button</button>
         </div>
      </div>

      <!-- <div class="container-lg d-flex">
         <div class="col-6">
            <img class="w-100 p-5" src="./img/400x400.png" alt="">
         </div>
         <div class="col-6 my-3 py-5 d-flex flex-column">
            <h6>BRAND NAME</h6>
            <h2>The Catcher in the Rye</h2>
            <div class="col-6 d-flex">
               <div class="col-2 d-flex">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-primary" viewBox="0 0 22 22">
                     <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                     </path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-primary" viewBox="0 0 22 22">
                     <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                     </path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-primary" viewBox="0 0 22 22">
                     <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                     </path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-primary" viewBox="0 0 22 22">
                     <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                     </path>
                  </svg>
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-primary" viewBox="0 0 22 22">
                     <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                     </path>
                  </svg>
               </div>
               <h6 class="col-3 m-auto">4 Reviews</h6>
               <div class="col-md-2 border-start"></div>
               <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="col-1 w-3 h-3" viewBox="0 0 32 32">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
               </svg>
               <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="col-1 w-3 h-3" viewBox="0 0 32 32">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                  </path>
               </svg>
               <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="col-1 w-3 h-3" viewBox="0 0 32 32">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                  </path>
               </svg>
            </div>
            <p class="col-8 my-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
            <div class="d-flex">
               <p>Color</p>
               <button type="button" class="col-md-1 mx-1 btn btn-light border border-1 rounded-circle"></button>
               <button type="button" class="col-md-1 mx-1 btn btn-light border border-1 rounded-circle"></button>
               <button type="button" class="col-md-1 mx-1 btn btn-light border border-1 rounded-circle"></button>
            </div>
         </div>
      </div> -->

      <div class="container-lg my-5">
         <div class="col-12 d-flex">
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">The Catalyzer</h5>
                  <p class="card-text">$16.00</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">Shooting Stars</h5>
                  <p class="card-text">$21.15</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">Neptune</h5>
                  <p class="card-text">$12.00</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">The 400 Blows</h5>
                  <p class="card-text">$18.40</p>
               </div>
            </div>
         </div>
         <div class="col-12 d-flex">
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">The Catalyzer</h5>
                  <p class="card-text">$16.00</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">Shooting Stars</h5>
                  <p class="card-text">$21.15</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">Neptune</h5>
                  <p class="card-text">$12.00</p>
               </div>
            </div>
            <div class="card border-light mb-3 m-4" style="max-width: 18rem;">
               <div class="card-img"><img class="img-fluid rounded-2" src="./img/420x260.png" alt=""></div>
               <div class="card-body p-0 my-3">
                  <p class="card-text">CATEGORY</p>
                  <h5 class="card-title">The 400 Blows</h5>
                  <p class="card-text">$18.40</p>
               </div>
            </div>
         </div>
      </div>

      
   </main>

   <footer>

   </footer>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script>
      const swiper = new Swiper('.swiper', {
         // Optional parameters
         loop: true,

         // If we need pagination
         pagination: {
            el: '.swiper-pagination',
         },

         // Navigation arrows
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },

         // And if we need scrollbar
         scrollbar: {
            el: '.swiper-scrollbar',
         },
      });
   </script>
</body>
</html>