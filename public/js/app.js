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

const openModal = function (e, modalStopClass, closeModalFunction) {
    e.preventDefault();
    target = document.querySelector(e.target.getAttribute('href'));
    target.style.display = null;
    target.setAttribute('aria-hidden', false);
    target.setAttribute('aria-modal', true);
    modal = target;
    modal.addEventListener('click', closeModalFunction);
    modal.querySelector(modalStopClass).addEventListener('click', stopPropagation);
}

const closeModal = function (e, modalStop) {
    if (modal === null){ return };
    e.preventDefault();
    window.setTimeout(function() {
        if (modal === null){ return }
        modal.setAttribute('style', 'display:none;')
        modal = null
    }, 500);
    modal.setAttribute('aria-hidden', true);
    modal.removeAttribute('aria-modal');
    modal.removeEventListener('click', closeModal);
    modal.querySelector(modalStop).removeEventListener('click', stopPropagation);
}

const stopPropagation = function (e, modalStop) {
    e.stopPropagation();
}

const openFightModal = function (e, modalStop) {
    e.preventDefault()
    fightForm = document.getElementById('fight_form');
    defenderInput = document.createElement('input');
    defenderInput.setAttribute('name', 'defender');
    defenderInput.setAttribute('type', 'hidden');
    defenderInput.setAttribute('value', e.target.id.match(/^\d+/g)[0]);
    fightForm.append(defenderInput);
    openModal(e, modalStop, function(e){ closeFightModal(e, modalStop); });
}

const closeFightModal = function (e, modalStop) {
    closeModal(e, modalStop);
    document.getElementById("fight_form").reset();
}

document.querySelectorAll('.fight_btn').forEach(a => {
    a.addEventListener('click', function(e){ openFightModal(e, '.fight_modal_stop'); });
})