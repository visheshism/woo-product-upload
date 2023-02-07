<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />

  <title>Upload Product</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./assets/index.css">

</head>

<body>
<div
    class="bg-[url('https://images.pexels.com/photos/1151282/pexels-photo-1151282.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')] bg-center bg-fixed bg-no-repeat bg-cover min-h-screen min-w-[100vw]]">
    <div class="bg-black/[.45] min-h-screen min-w-[100vw]] fixed inset-0">

      <form enctype="multipart/form-data" action="./product-upload.php" method="post">
        <div
          class="min-h-[400px] sm:h-[380px] relative my-[15vh] mx-auto sm:max-w-lg max-w-[80vh] w-[340px] bg-black/70 overflow-hidden rounded-md">


          <div class="container absolute">
            <span class="translate-x-[320px] w-[50%]"></span>
            <span class="-translate-x-[320px] w-[75%]"></span>
            <span class="translate-x-[0px] w-[100%]"></span>
            <formgroup id="form1"
              class="absolute top-8 p-5 max-h-full transition w-[95%] flex flex-col items-center duration-500 text-white translate-x-[0px]">
              <h3 class="text-center mb-[40px] pt-5  text-[#e2c7c7]/[0.674] text-lg font-semibold tracking-widest">
                CREATE PRODUCT</h3>
              <input type="text" placeholder="Name of the product" name="name" id="name"
                class="font-comfortaa w-full py-2.5 px-2 my-1 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none"
                required>
              <select name="type"
                class="font-comfortaa my-1.5 mx-0 border-0 border-b-[1px] border-b-solid border-b-[#999] bg-transparent w-full py-2.5 px-2"
                id="type" required>
                <option value="simple"
                  class="text-black text-[calc(0.1vw + 16px)] box-border bg-[#e7e3e3] select:bg-black" selected>Simple
                  Product</option>
                <option value="variable" class="text-black text-[calc(0.1vw + 16px)] box-border bg-[#e7e3e3]">Variable
                  Product</option>
              </select>

              <div class="btn-box w-full my-[30px] justify-center text-center">
                <button id="next1" type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer">Next</button>

              </div>

            </formgroup>
            <formgroup id="form2"
              class="absolute top-8 p-5 max-h-full transition w-[95%] flex flex-col items-center duration-500 text-white translate-x-[320px]">
              <h3 class="text-center mb-[10px] tracking-widest text-[#e2c7c7]/[0.674] font-semibold ">PRICING</h3>
              <input type="number" id="rprice" minlength="2" maxlength="4" placeholder="Regular Price" name="rprice"
                min="10"
                class="font-comfortaa w-full py-2.5 px-2 my-1 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none"
                required>
              <input type="number" minlength="2" maxlength="4" placeholder="Sale Price" name="sprice" min="10"
                class="font-comfortaa w-full py-2.5 px-2 my-1 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none">
              <input name="sku" type="text" maxlength="4" placeholder="Enter SKU:"
                class="font-comfortaa w-full py-1.5 px-2 my-0 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none">
              <div class="btn-box w-full my-[15px] flex  justify-center">
                <button type="button"
                  class="w-[110px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="back1">Back</button>
                <button type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="next2">Next</button>
              </div>
            </formgroup>
            <formgroup id="form0"
              class="absolute top-8 p-5 max-h-full transition w-[95%] flex flex-col items-center duration-500 text-white translate-x-[320px]">
              <h3 class="text-center mb-[10px] tracking-widest text-[#e2c7c7]/[0.674] font-semibold ">Product Attributes
              </h3>
              <input type="text" id="size" minlength="2" placeholder="Size Attributes" name="size"
                class="font-comfortaa w-full py-2.5 px-2 my-1 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none">
              <input type="text" id="color" minlength="2" placeholder="Colour Attributes" name="color"
                class="font-comfortaa w-full py-2.5 px-2 my-1 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none">
              <h3 class="text-center my-1 tracking-widest text-[#e2c7c7]/[0.674] font-bold ">Variations Pricing</h3>
              <select name="varpricing" id="pricing"
                class="my-1.5 font-comfortaa mx-0 border-0 border-b-[1px] border-b-solid border-b-[#999] bg-transparent w-full py-[6px] px-2"
                required>
                <option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="same">Regular Price
                </option>
                <option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="step">Step Pricing
                </option>
              </select>
              <input name="step" id="stepprice" type="number" maxlength="4" min="1" placeholder="Step Value:"
                class="font-comfortaa hidden w-full py-1.5 px-2 my-0 mx-0 border-b-[1px] placeholder:text-[#e0c4c4] border-b-[#999] border-solid bg-transparent outline-none">
              <div class="btn-box w-full my-[15px] flex  justify-center">
                <button type="button"
                  class="w-[110px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="back0">Back</button>
                <button type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer disabled:cursor-not-allowed"
                  id="next0">Next</button>
              </div>
            </formgroup>
            <formgroup id="form3"
              class="absolute top-8 p-5 max-h-full transition w-[95%] duration-500  text-white translate-x-[320px] ">
              <h3 class="text-center tracking-widest my-3 text-[#e2c7c7]/[0.674]  font-semibold ">CATEGORIES</h3>
<?php 
include('./categ.php'); 
          ?>
              <label for="ct1" class="font-comfortaa">Category 1:</label>
              <select name="ct1" id="ct1"
                class="font-comfortaa tracking-wider my-1.5 mx-0 border-0 border-b-[1px] border-b-solid border-b-[#999] bg-transparent w-full py-[6px] px-2 "
                required>
                <?php
foreach($categ as $x => $value){
  if($value[name]!=='Uncategorized'){
    if($value[parent]==0){
      echo '<option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="'.$value['id'] .'" >'. $value['name'].'</option>';
    for($i=0; $i<count($categ); $i++){
    if($categ[$i][parent]==$value['id']){
    echo '<option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="'.$categ[$i]['id'] .'" >&nbsp;&nbsp;'. $categ[$i]['name'].'</option>';
    }}
    }
    }}
            ?> </select>

              <label for="ct2" class="font-comfortaa">Category 2 (optional):</label>
              <select name="ct2" id="ct2"
                class="font-comfortaa my-1.5 mx-0 border-0 border-b-[1px] border-b-solid border-b-[#999] bg-transparent w-full py-[6px] px-2">
                <option value="minus" selected hidden>Select a Category</option>
                <?php
foreach($categ as $x => $value){
  if($value[name]!=='Uncategorized'){
    if($value[parent]==0){
      echo '<option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="'.$value['id'] .'" >'. $value['name'].'</option>';
    for($i=0; $i<count($categ); $i++){
    if($categ[$i][parent]==$value['id']){
    echo '<option class="text-black text-[calc(0.1vw + 16px)] box-border capitalize" value="'.$categ[$i]['id'] .'" >&nbsp;&nbsp;'. $categ[$i]['name'].'</option>';
    }}
    }
    
    }}
    ?>
              </select>
              <label for="upload" class="font-comfortaa" id="uploadl">Upload images
                <i class="fa fa-cloud-upload" aria-hidden="true">
                </i></label>
              <input type="file" id="upload" name="upload[]"
                class="mt-2.5 font-comfortaa text-[#ff105f] rounded-md border-[1px] border-solid border-white text-base h-auto cursor-pointer w-full py-2 px-4 "
                accept="image/*" multiple>

              <div class="btn-box w-full my-[15px] flex  justify-center text-center ">
                <button type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="back2">Back</button>
                <button type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="next3">Next</button>
              </div>
            </formgroup>

            <formgroup id="form4"
              class="absolute top-8 p-5 max-h-full transition w-[95%]  duration-500 text-white translate-x-[320px] ">
              <h3 class="text-center mb-[10px] tracking-wider text-[#e2c7c7]/[0.674]  font-bold ">Description Info</h3>

              <label for="desc" class="font-comfortaa">Description:</label>
              <textarea
                class="font-comfortaa  max-h-[90px] resize-none tracking-tighter min-w-full bg-transparent text-sm px-2 py-1.5 border-white border-[1px] rounded-md"
                rows="5" maxlength="160" name="desc" id="desc" required
                placeholder="Product Description"></textarea>

              <label for="sdesc" class="text-comfortaa">Short Description:</label>
              <textarea rows="2" maxlength="30" name="sdesc"
                class="max-h-[60px] font-comfortaa resize-none tracking-tighter min-w-full bg-transparent px-1 py-0.5 border-white border-[1px] rounded-md"
                id="sdesc" placeholder="Product Short Description"></textarea>

              <div class="btn-box w-full my-[5px] flex  justify-center " id="lastbtns">
                <button type="button"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  id="back3">Back</button>
                <button id="next4"
                  class="w-[100px] h-9 my-0 mx-2.5 bg-gradient-to-r from-[#ff105f] to-[#ffad06] rounded-2xl border-0 outline-none cursor-pointer"
                  type="button">Submit</button>
              </div>
            </formgroup>
          </div>
          <div class="border-b-[0.02px] border-b-black/30 step-row relative h-10 w-full">
            <div
              class="progress w-[25%] absolute bg-gradient-to-r from-[#ff105f] to-[#ffad06]  h-full after:content-[''] after:h-0 after:w-0 after:absolute after:top-0 after:left-[100%] after:border-t-[20px] after:border-t-solid after:border-t-transparent after:border-b-[20px] after:border-b-solid after:border-b-transparent after:border-l-[20px] after:border-l-[#ffad06] after:border-l-solid transition-all  duration-1000 ease-in-out">
            </div>
            <span class="w-[25%]"></span>
            <div class="absolute top-0 left-0 flex w-full h-full items-center justify-center">
              <div id="step1" class="step-col text-center select-none font-bold text-[rgb(24,23,23)] w-[20%] ">
                <small>Step 1</small>
              </div>
              <div id="step2" class="step-col text-center select-none font-bold text-[rgb(24,23,23)] w-[20%] ">
                <small>Step 2</small>
              </div>
              <div id="step3" class="step-col text-center select-none font-bold text-[rgb(24,23,23)] w-[20%]">
                <small>Step 3</small>
              </div>
              <div id="step4" class="step-col text-center select-none font-bold text-[rgb(24,23,23)] w-[20%]">
                <small>Step 4</small>
              </div>
              <div id="step0" class="step-col text-center select-none font-bold text-[rgb(24,23,23)] w-[20%]">
                <small>Step 5</small>
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/6bb6b675dd.js" crossorigin="anonymous"></script>
      <script>
      <?php
          include('./assets/index.js')
      ?>
      </script>
  </body>

</html>