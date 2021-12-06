let select_tekimg = document.querySelector("#tek");
let select_btn = document.querySelector(".select_btn");

select_tekimg.addEventListener("click", () => {
    select_tekimg.style.borderColor = "#2DE1CC";
    select_btn.addEventListener("click", () => {
        window.location.href = "../html/cafeteria_map";
    });
});

/*
let BtnEle1 = document.querySelector("#demo1");
let BtnEle2 = document.querySelector("#demo2");
BtnEle1.addEventListener("click", () => {
      document.getElementById("demo1").innerHTML = "YOU CLICKED ME1!";
      BtnEle2.addEventListener("click", () => {
      	document.getElementById("demo2").innerHTML = "YOU CLICKED ME2!";  		});
});


function selectImg(){
    document.getElementById("tek").style.borderColor = "";
}

function selectCaf(){
    var tek_img = document.getElementById("tek");
    var select_btn = document.getElementsByClassName("select_btn");
    if(document.getElementsByClassName("select_btn").clicked == true){
        
    }
}*/