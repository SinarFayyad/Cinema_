const btn = document.getElementById("logo");

btn.addEventListener("click" ,  toggleSettings);
console.log(btn);

function toggleSettings() {
    // const setting = document.querySelector(".settings");
    const setting = document.getElementById("settings");
    if (setting.style.display == "block") {
        setting.style.display = "none";
    }else{
        settings.style.display = "block";
    }
}
