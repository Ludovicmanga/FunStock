
document.getElementById('fightModal_next1').onclick = function() {
    document.getElementById('fightModal_step1').style.left = "-450px";
    document.getElementById('fightModal_step2').style.left = "40px";
}

document.getElementById('fightModal_back1').onclick = function() {
    document.getElementById('fightModal_step1').style.left = "40px";
    document.getElementById('fightModal_step2').style.left = "450px";
}

document.getElementById('fightModal_next2').onclick = function() {
    document.getElementById('fightModal_step2').style.left = "-450px";
    document.getElementById('fightModal_step3').style.left = "40px";
}

document.getElementById('fightModal_back2').onclick = function() {
    document.getElementById('fightModal_step2').style.left = "40px";
    document.getElementById('fightModal_step3').style.left = "450px";
}

/* We set up the opening and closing of modals */

const openModal = function (e) {
    
}