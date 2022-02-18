FightModalStep1 = document.getElementById('fightModal_step1');
FightModalStep2 = document.getElementById('fightModal_step2');
FightModalStep3 = document.getElementById('fightModal_step3');

FightModalNext1 = document.getElementById('fightModal_next1');
FightModalNext2 = document.getElementById('fightModal_next2');
FightModalBack1 = document.getElementById('fightModal_back1');
FightModalBack2 = document.getElementById('fightModal_back2');

FightModalNext1.onclick = function() {
    FightModalStep1.style.left = "-450px";
    FightModalStep2.style.left = "40px";
}

FightModalBack1.onclick = function() {
    FightModalStep1.style.left = "40px";
    FightModalStep2.style.left = "450px";
}

FightModalNext2.onclick = function() {
    FightModalStep2.style.left = "-450px";
    FightModalStep3.style.left = "40px";
}

FightModalBack2.onclick = function() {
    FightModalStep2.style.left = "40px";
    FightModalStep3.style.left = "450px";
}