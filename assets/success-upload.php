<?php 

if($det[type]==='variable'){
$pprice='Variable Product';
}else if($det[type]==='simple'){
    $pprice=$det[price_html];
}

echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"  />
  
  <title>Successfully Uploaded!</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="success.css">
</head>

<body>
  <div class="bgown bg-center bg-fixed bg-no-repeat bg-cover min-h-screen min-w-[100vw]]">
    <div class="bg-slate-900/60 min-h-screen min-w-[100vw]] fixed inset-0">
    
        <div class="min-h-[400px] sm:h-[380px] relative my-[12vh] mx-auto sm:max-w-lg max-w-[80vh] w-[340px] bg-slate-900/[0.95] overflow-hidden rounded-md flex flex-col items-center">
          
          <div class="absolute top-8 p-5 h-full w-[95%] flex flex-col items-center duration-500 text-white">
                <div class="absolute font-comfortaa flex flex-row h-[45%] overflow-hidden ">
                  <div class="sm:w-full flex items-center max-w-[40%] h-full mt-2">
                 <img class="-mt-5 mx-3 w-full float-left " src="'.$det[images][0][src].'" alt="Product Image" ></div>
                 
                 <div class="w-4/5 flex flex-col justify-around h-full pl-5"> 
                     <div class="min-w-full">    
                      <h3 class="-mt-1  text-xl text-center  tracking-wider text-white font-sans font-semibold capitalize">'.$titlesubstr.'</h3></div>
                             <div class="text-center mt-2 text-lg tracking-wider text-yellow-300">'.$pprice.'</div>
                             <div class="text-center text-red-400 mt-2 mb-4 text-base tracking-widest font-semibold uppercase">SKU: '.$det[sku].'</div>
                 
                  </div>
    
                  </div>
    
                <div class="absolute bottom-[30%] mb-1 px-3 mx-auto w-full h-[21%] py-5 text-justify overflow-ellipsis ">
                  <div class="-mb-5 flex flex-col "><h3 class="text-lg text-purple-600 font-bold">Product Description:</h3><p class=" mt-1 text-green-300 ">'.$descfors.'</p></div>
                </div>              
                
              </div>
              <div class="border-b-[0.02px] border-b-black/30 step-row relative h-10 w-full">
                <div class="w-full absolute bg-gradient-to-r from-[#ff105f] to-[#ffad06]  h-full"></div>
              </div>
              
            </div>
            
                    <div class="relative -top-[10%] w-full flex justify-center mx-auto h-auto  my-[30px]">
                      <button type="button"  class="sm:max-w-lg max-w-[80vh] w-[340px] text-white text-center h-11 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"><a href="'.$locfolder.'">Upload Another Product</a></button>
                    </div>
            <!-- container div -->
          </div>
          <!-- custom div -->
      </div>
</body>

</html>';