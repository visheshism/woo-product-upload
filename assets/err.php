<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  
  <title>Error!</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="err.css">
</head>

<body>
    <div class="bgown bg-center bg-fixed bg-no-repeat bg-cover min-h-screen min-w-[100vw]]">
        <div class="bg-slate-900/40 min-h-screen min-w-[100vw]] fixed inset-0">
    
          <div
            class="min-h-[400px] sm:h-[380px] relative my-[12vh] mx-auto sm:max-w-lg max-h-[80vh] w-[340px] bg-slate-900/[0.98] overflow-hidden rounded-md flex flex-col items-center select-none">
    
            <div class="absolute top-8 p-5 w-full flex flex-col items-center duration-500 text-white">
    
    
              <div class="absolute font-comfortaa overflow-hidden ">
                <div class="w-full">
                  <div class="w-full">
                    <h3
                      class="-mt-1 md:text-lg text-xl text-center  tracking-wider text-white font-comfortaa font-semibold capitalize">
                      Oops! Error occurred while uploading a product</h3>
                  </div>
                  <div class="err-code text-center mt-4 mx-2 text-xl sm:text-2xl tracking-wider text-yellow-300 w-[95%]">'.$det['code'].'</div>
                  <div class="err-msg text-center text-red-400 py-4 text-xl sm:text-2xl tracking-widest font-semibold uppercase flex justify-center">
                    Error: '.$det['message'].'
                </div>
                  
                    
                  <div class="mb-2 mt-1 px-3 text-center h-full w-full">
                    <h3 class="text-xl text-purple-600 font-comfortaa font-extrabold flex justify-center">Error Code: '.$det['data']['status'].'
                    </h3>
                  </div>
                </div>
                <div class="w-4/5 flex justify-center mx-auto h-auto  my-[10px]">
                  <button type="button"
                    class="sm:max-w-lg px-8 tracking-widest font-extrabold font-comfortaa text-base text-center h-11 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-xl border-0 outline-none cursor-pointer"><a
                      onclick="history.back()">Try Again</a></button>
                </div>
              </div>
            </div>
            <div class="border-b-[0.02px] border-b-black/30 step-row relative h-10 w-full">
              <div class="w-full absolute bg-gradient-to-r from-[#ff105f] to-[#ffad06]  h-full"></div>
            </div>
          </div>
        </div>
      </div>
    
    <script>
      const errcode=document.querySelector(".err-code");
      const errmsg=document.querySelector(".err-msg");
    
      if(errmsg.innerHTML.length>15){
        errmsg.style.fontSize=15+"p";
        errmsg.style.marginBottom="-18px";
        errmsg.style.marginTop="-18px";
      }
      if(errcode.innerHTML.length>19){
        errcode.innerHTML=errcode.innerHTML.replace(/_/g," ");
      }
    </script>

</body>

</html>';