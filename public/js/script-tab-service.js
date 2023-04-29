var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var content3 = document.getElementById("content3");
var content4 = document.getElementById("content4");
var content5 = document.getElementById("content5");
var content6 = document.getElementById("content6");
var content7 = document.getElementById("content7");
var content8 = document.getElementById("content8");
var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var button3 = document.getElementById("button3");
var button4 = document.getElementById("button4");
var button5 = document.getElementById("button5");
var button6 = document.getElementById("button6");
var button7 = document.getElementById("button7");
var button8 = document.getElementById("button8");
var svg1 = document.querySelector("#svg1 path");
var svg2 = document.querySelectorAll("#svg2 path");
var svg3 = document.querySelector("#svg3 path");
var svg4 = document.querySelector("#svg4 path");
var svg5 = document.querySelectorAll("#svg5 path");
var svg6 = document.querySelectorAll("#svg6 path");
var svg7 = document.querySelectorAll("#svg7 path");
var svg8 = document.querySelectorAll("#svg8 path");

content1.style.display = "flex";
content2.style.display = "none";
content3.style.display = "none";
content4.style.display = "none";
content5.style.display = "none";
content6.style.display = "none";
content7.style.display = "none";
content8.style.display = "none";
svg1.style.fill = "var(--background-color)";
svg2.forEach(path => {
    path.style.fill = "var(--primary-color)";
});
svg3.style.fill = "var(--primary-color)";
svg4.style.fill = "var(--primary-color)";
svg5.forEach(path => {
    path.style.fill = "var(--primary-color)";
});
svg6.forEach(path => {
    path.style.fill = "var(--primary-color)";
});
svg7.forEach(path => {
    path.style.fill = "var(--primary-color)";
});
svg8.forEach(path => {
    path.style.fill = "var(--primary-color)";
});

function openA(){
    content1.style.display = "flex";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor = "var(--primary-color)";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundcolor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--background-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}
            
function openB(){
    content1.style.display = "none";
    content2.style.display = "flex";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor= "#fff";
    button2.style.backgroundColor = "var(--primary-color)";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--background-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openC(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "flex";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "var(--primary-color)";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--background-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openD(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "flex";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "var(--primary-color)";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff)";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--background-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openE(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "flex";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "var(--primary-color)";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--background-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openF(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "flex";
    content7.style.display = "none";
    content8.style.display = "none";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "var(--primary-color)";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--background-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openG(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "flex";
    content8.style.display = "none";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "var(--primary-color)";
    button8.style.backgroundColor = "#fff";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--background-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
}

function openH(){
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "none";
    content4.style.display = "none";
    content5.style.display = "none";
    content6.style.display = "none";
    content7.style.display = "none";
    content8.style.display = "flex";
    button1.style.backgroundColor = "#fff";
    button2.style.backgroundColor = "#fff";
    button3.style.backgroundColor = "#fff";
    button4.style.backgroundColor = "#fff";
    button5.style.backgroundColor = "#fff";
    button6.style.backgroundColor = "#fff";
    button7.style.backgroundColor = "#fff";
    button8.style.backgroundColor = "var(--primary-color)";
    svg1.style.fill = "var(--primary-color)";
    svg2.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg3.style.fill = "var(--primary-color)";
    svg4.style.fill = "var(--primary-color)";
    svg5.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg6.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg7.forEach(path => {
        path.style.fill = "var(--primary-color)";
    });
    svg8.forEach(path => {
        path.style.fill = "var(--background-color)";
    });
}
