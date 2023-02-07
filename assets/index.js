
//function to remove options that are already selected 
$("#ct1").on("input", function () {
    $("#ct2  option").each(function () {
        var x = $("#ct1 option:selected").val();
        if ($(this).val() == x) {
            if ($("#ct2 option:selected").val() == x) { $("#ct2 option[value='minus']").prop("selected", true); }
            $(this).prop("hidden", true);

        } else if ($(this).val() !== x) {
            if ($(this).val() == 'minus') {
                $(this).prop("hidden", true);
            } else {
                $(this).prop("hidden", false);
            }
        }
    });
});

//elements linking

step1 = document.querySelector("#step1");
step2 = document.querySelector("#step2");
step3 = document.querySelector("#step3");
step4 = document.querySelector("#step4");
step0 = document.querySelector("#step0");

Type = document.querySelector("#type");

//Formgroup-0 
Form0 = document.querySelector("#form0");
Size = document.querySelector("#size");
Color = document.querySelector("#color");
Pricing = document.querySelector("#pricing");
Step = document.querySelector("#stepprice");
Back0 = document.querySelector("#back0");
Next0 = document.querySelector("#next0");

Name = document.querySelector("#name");
Rprice = document.querySelector("#rprice");
Upload = document.querySelector("#upload");
Desc = document.querySelector("#desc");

Form1 = document.getElementById("form1");
Form2 = document.getElementById("form2");
Form3 = document.getElementById("form3");
Form4 = document.getElementById("form4");
Next1 = document.getElementById("next1");
Next2 = document.getElementById("next2");
Next3 = document.getElementById("next3");
Next4 = document.getElementById("next4");
Back1 = document.getElementById("back1");
Back2 = document.getElementById("back2");
Back3 = document.getElementById("back3");

progress = document.querySelector(".progress");

//functions
function ear(element, added, removed) {
    element.classList.remove(removed);
    element.classList.add(added);
}

function hide(element) {
    element.style.visibility = "hidden";
}

function show(element) {
    element.style.visibility = "visible";
}

function variable_product() {

    //default loading
    progress.style.width = 20 + '%';
    ear(step1, "w-[20%]", "w-[25%]");
    ear(step2, "w-[20%]", "w-[25%]");
    ear(step3, "w-[20%]", "w-[25%]");
    ear(step4, "w-[20%]", "w-[25%]");

    if (step0.classList.contains("hidden")) {
        step0.classList.remove("hidden");
    }


    //Formgroup-1

    Next1.onclick = function () {
        if (Name.value.trim().length === 0 || Name.value === '') {
            console.log('Name field is empty!');
            this.style.cursor = "not-allowed";
        } else if (Name.value.length > 0) {
            this.style.cursor = "default";
            Form1.classList.remove("translate-x-[0px]");
            Form1.classList.add("-translate-x-[320px]");
            Form2.classList.remove("translate-x-[320px]");
            Form2.classList.add("translate-x-[0px]");
            ear(progress, "left-[20%]");
            hide(step1);
            show(step2);
        }
    }

    Back1.onclick = function () {
        ear(Form1, "translate-x-[0px]", "-translate-x-[320px]")
        ear(Form2, "translate-x-[320px]", "translate-x-[0px]")
        ear(progress, "left-0", "left-[20%]");
        hide(step2);
        show(step1);
    }

    //Formgroup-2

    Next2.onclick = function () {
        if (Rprice.value.trim().length === 0 || Rprice.value === '') {
            console.log('Rprice field is empty!');
            this.style.cursor = "not-allowed";
        } else {
            this.style.cursor = "default";
            if (Rprice.value.length === 1) {
                Rprice.value = Rprice.value + 0;
            }
            ear(Form2, "-translate-x-[320px]", "translate-x-[0px]")
            ear(Form0, "translate-x-[0px]", "translate-x-[320px]")
            ear(progress, "left-[40%]", "left-[20%]");
            hide(step2);
            show(step3);

        }
    }

    //Formgroup-3/Form-0 for Simple Product

    Size.addEventListener("input", function () {
        if (Pricing.value === 'same') {
            if (Size.value !== '' || Color.value !== '') {
                Next0.removeAttribute("disabled");
            } else {
                Next0.setAttribute("disabled", '');
            }
        } else {
            if (Step.value.trim().length > 0) {
                Next0.removeAttribute("disabled");
            } else {
                Next0.setAttribute("disabled", '');
            }
        }
    });

    Color.addEventListener("input", function () {
        if (Pricing.value === 'same') {
            if (Size.value !== '' || Color.value !== '') {
                Next0.removeAttribute("disabled");
            } else {
                Next0.setAttribute("disabled", '');
            }
        } else {
            if (Step.value.trim().length > 0) {
                Next0.removeAttribute("disabled");
            } else {
                Next0.setAttribute("disabled", '');
            }
        }
    });

    Pricing.addEventListener("change", function () {
        if (Pricing.value === 'step') {
            Step.classList.remove("hidden");
            Next0.setAttribute("disabled", '');
        } else {
            if (Pricing.value === 'same') {
                Next0.removeAttribute("disabled");
            }
            if (Step.classList.contains("hidden")) {
                console.log("Step Input div already hidden!");
            } else {
                Step.classList.add("hidden");
            }
        }
    });

    Step.addEventListener("input", function () {
        if (this.value !== '' || this.value.trim().length > 0) {
            Next0.removeAttribute("disabled");
        } else {
            Next0.setAttribute("disabled", '');
        }
    });


    Back0.onclick = function () {
        ear(Form2, "translate-x-[0px]", "-translate-x-[320px]")
        ear(Form0, "translate-x-[320px]", "translate-x-[0px]")
        ear(progress, "left-[20%]", "left-[40%]");
        hide(step3);
        show(step2);
    }


    Next0.onclick = function () {
        if ((Size.value === '' && Color.value === '') || (Pricing.value === 'step' && (!Step.classList.contains("hidden") && (Step.value === '' || Step.value.trim().length == 0)))) {
            Next0.setAttribute("disabled", '');
        } else {
            if (Next0.hasAttribute("disabled")) {
                Next0.removeAttribute("disabled");
            }

            ear(Form0, "-translate-x-[320px]", "translate-x-[0px]");
            ear(Form3, "translate-x-[0px]", "translate-x-[320px]");
            ear(progress, "left-[60%]", "left-[40%]");
            hide(step3);
            show(step4);

        }
    }

    //Formgroup-4

    Back2.onclick = function () {
        ear(Form0, "translate-x-[0px]", "-translate-x-[320px]")
        ear(Form3, "translate-x-[320px]", "translate-x-[0px]")
        ear(progress, "left-[40%]", "left-[60%]");
        hide(step4);
        show(step3);
    }


    Next3.onclick = function () {
        if (Upload.files.length == 0) {
            console.log('No file Uploaded!');
            this.style.cursor = "not-allowed";
        } else {
            this.style.cursor = "default";
            ear(Form3, "-translate-x-[320px]", "translate-x-[0px]")
            ear(Form4, "translate-x-[0px]", "translate-x-[320px]")
            ear(progress, "left-[80%]", "left-[60%]");
            hide(step4);
            show(step0);
        }
    }


    // Formgroup-5

    Back3.onclick = function () {
        ear(Form4, "translate-x-[320px]", "translate-x-[0px]")
        ear(Form3, "translate-x-[0px]", "-translate-x-[320px]")
        ear(progress, "left-[60%]", "left-[80%]");
        hide(step0);
        show(step4);
    }

    //submit button
    Next4.onclick = function () {
        ear(progress, "left-[80%]", "left-[60%]");
        if (Desc.value.length > 0) {
            this.style.cursor = "default";
            Next4.setAttribute("type", "submit");
        } else {
            this.style.cursor = "not-allowed";
        }
    }
}

function simple_product() {

    //default loading
    progress.style.width = 25 + '%';

    step0.classList.add("hidden");

    ear(step1, "w-[25%]", "w-[20%]");
    ear(step2, "w-[25%]", "w-[20%]");
    ear(step3, "w-[25%]", "w-[20%]");
    ear(step4, "w-[25%]", "w-[20%]");

    //Formgroup-1

    Next1.onclick = function () {
        if (Name.value.trim().length === 0 || Name.value === '') {
            console.log('Field is empty!!');
            this.style.cursor = "not-allowed";
        } else if (Name.value.length > 0) {
            this.style.cursor = "default";
            ear(Form1, "-translate-x-[320px]", "translate-x-[0px]")
            ear(Form2, "translate-x-[0px]", "translate-x-[320px]")
            ear(progress, "left-[25%]");
            hide(step1);
            show(step2);
        }
    }

    //Formgroup-2

    Back1.onclick = function () {
        ear(Form1, "translate-x-[0px]", "-translate-x-[320px]")
        ear(Form2, "translate-x-[320px]", "translate-x-[0px]")
        ear(progress, "left-0", "left-[25%]");
        hide(step2);
        show(step1);
    }

    Next2.onclick = function () {
        if (Rprice.value.trim().length === 0 || Rprice.value === '') {
            console.log('Field is empty!!');
            this.style.cursor = "not-allowed";
        } else {
            this.style.cursor = "default";
            if (Rprice.value.length === 1) {
                Rprice.value = Rprice.value + 0;
            }
            ear(Form2, "-translate-x-[320px]", "translate-x-[0px]")
            ear(Form3, "translate-x-[0px]", "translate-x-[320px]")
            ear(progress, "left-[50%]", "left-[25%]");
            hide(step2);
            show(step3);

        }
    }

    //Formgroup-3

    Back2.onclick = function () {
        ear(Form2, "translate-x-[0px]", "-translate-x-[320px]")
        ear(Form3, "translate-x-[320px]", "translate-x-[0px]")
        ear(progress, "left-[25%]", "left-[50%]");
        hide(step3);
        show(step2);
    }

    Next3.onclick = function () {
        if (Upload.files.length == 0) {
            console.log('No file Uploaded!');
            this.style.cursor = "not-allowed";
        } else {
            this.style.cursor = "default";
            ear(Form3, "-translate-x-[320px]", "translate-x-[0px]")
            ear(Form4, "translate-x-[0px]", "translate-x-[320px]")
            ear(progress, "left-[75%]", "left-[50%]");
            hide(step3);
            show(step4);
        }
    }

    //Formgroup-4

    Back3.onclick = function () {
        ear(Form4, "translate-x-[320px]", "translate-x-[0px]")
        ear(Form3, "translate-x-[0px]", "-translate-x-[320px]")
        ear(progress, "left-[50%]", "left-[75%]");
        hide(step4);
        show(step3);
    }

    //submit button
    Next4.onclick = function () {

        if (Desc.value.trim().length > 0) {
            this.style.cursor = "default";
            Next4.setAttribute("type", "submit");
        } else {
            this.style.cursor = "not-allowed";
        }
    }
}

//hiding step-col's other than step-1 (on-load)
hide(step2);
hide(step3);
hide(step4);
hide(step0);

if (Type.value === 'simple') {
    simple_product();
}


const interv = setInterval(function () {
    if (Type.value === 'variable') {
        variable_product();
    }
}, 200);

setTimeout(function () {
    if (Type.value === 'variable') {
        if (progress.style.width = 20 + '%') {
            clearInterval(interv);
        }
    }
}, 1000);


const pr = setInterval(function () {
    if (Pricing.value === 'step') {
        if (Step.classList.contains("hidden")) {
            Step.classList.remove("hidden");
        }
    }
}, 200);

setTimeout(function () {
    if (Pricing.value === 'step') {
        if (!Step.classList.contains("hidden")) {
            clearInterval(pr);
        }
    } else {
        clearInterval(pr);
    }
}, 1000);

//Product Type Event Listener
Type.addEventListener("input", function () {

    if (this.value === 'variable') {
        variable_product();
    } else if (Type.value == 'simple') {
        simple_product();
    }
});