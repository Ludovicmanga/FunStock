
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

const openModal = function (e, modalStop) {
    e.preventDefault()
    target = document.querySelector(e.target.getAttribute('href'));
    target.style.display = null
    target.setAttribute('aria-hidden', false)
    target.setAttribute('aria-modal', true)
    modal = target
    modal.addEventListener('click', function(e){ closeModal(e, modalStop); })
    modal.querySelector(modalStop).addEventListener('click', stopPropagation)
}

const stopPropagation = function (e, modalStop) {
    e.stopPropagation()
}

const closeModal = function (e, modalStop) {
    if (modal === null){ return }
    e.preventDefault();
    window.setTimeout(function() {
        if (modal === null){ return }
        modal.setAttribute('style', 'display:none;')
        modal = null
    }, 500)
    modal.setAttribute('aria-hidden', true)
    modal.removeAttribute('aria-modal')
    modal.removeEventListener('click', closeModal)
    modal.querySelector(modalStop).removeEventListener('click', stopPropagation)
}

document.querySelectorAll('.fight_btn').forEach(a => {
    a.addEventListener('click', function(e){ openModal(e, '.fight_modal_stop'); })
})