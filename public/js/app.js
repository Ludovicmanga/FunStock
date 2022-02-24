document.getElementById('battleModal_next1').onclick = function() {
    document.getElementById('battleModal_step1').style.left = "-450px";
    document.getElementById('battleModal_step2').style.left = "40px";
}

document.getElementById('battleModal_back1').onclick = function() {
    document.getElementById('battleModal_step1').style.left = "40px";
    document.getElementById('battleModal_step2').style.left = "450px";
}

document.getElementById('battleModal_next2').onclick = function() {
    document.getElementById('battleModal_step2').style.left = "-450px";
    document.getElementById('battleModal_step3').style.left = "40px";
}

document.getElementById('battleModal_back2').onclick = function() {
    document.getElementById('battleModal_step2').style.left = "40px";
    document.getElementById('battleModal_step3').style.left = "450px";
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

const openBattleModal = function (e, modalStop) {
    e.preventDefault()
    battleForm = document.getElementById('battle_form');
    defenderInput = document.createElement('input');
    defenderInput.setAttribute('name', 'defender');
    defenderInput.setAttribute('type', 'hidden');
    defenderInput.setAttribute('value', e.target.id.match(/^\d+/g)[0]);
    battleForm.append(defenderInput);
    openModal(e, modalStop, function(e){ closeBattleModal(e, modalStop); });
}

const closeBattleModal = function (e, modalStop) {
    closeModal(e, modalStop);
    document.getElementById("battle_form").reset();
    window.setTimeout(function() {
        document.getElementById('battleModal_step1').style.left = "40px";
        document.getElementById('battleModal_step2').style.left = "450px";
        document.getElementById('battleModal_step3').style.left = "450px";
    }, 510);
    document.getElementById("battle_form").querySelectorAll('input[name="defender"]').forEach(input => {
        input.remove()
    })
}

const closeViewBattleRequestsModal = function(e, modalStop) {
    closeModal(e, modalStop);
}

const openViewBattleRequestsModal = function (e, modalStop) {
    id = e.target.id.match(/^\d+/g)[0]
    battleAmount = document.getElementById(id+'_battle_preview_stock');
    battleStock = document.getElementById(id+'_battle_preview_amount');
    battleVariationDirectionPrediction = document.getElementById(id+'_battle_preview_variation_direction_prediction');
    battleRequestsModalWrapper = document.getElementById('view_battle_request_modal_wrapper');
    battleRequestsModalWrapper.append(
        battleAmount,
        battleStock,
        battleVariationDirectionPrediction
    )
    openModal(e, modalStop, function(e){ closeViewBattleRequestsModal(e, modalStop); });
}

const acceptBattleRequest = function(e) {
    e.preventDefault();
    battleId = e.target.id.match(/^\d+/g)[0];
    const requeteAjax = new XMLHttpRequest;
    acceptBattleRequestUrl = acceptBattleRequestUrl.replace("battle_id", battleId);
    requeteAjax.open('POST', acceptBattleRequestUrl, true)
    requeteAjax.send();

    // After updating the BDD, we put acceptBattleUrl back in its template mode, so that .replace functions work
    acceptBattleRequestUrl = acceptBattleRequestUrl.replace(battleId, "battle_id");
    window.setTimeout(function() {
        document.getElementById(battleId+'_battle_request_box_wrapper').remove();
    }, 500);
}

const declineBattleRequest = function(e) {
    e.preventDefault();
    battleId = e.target.id.match(/^\d+/g)[0];
    const requeteAjax = new XMLHttpRequest;
    declineBattleRequestUrl = declineBattleRequestUrl.replace("battle_id", battleId);
    requeteAjax.open('POST', declineBattleRequestUrl, true)
    requeteAjax.send();

    // After updating the BDD, we put acceptBattleUrl back in its template mode, so that .replace functions work
    declineBattleRequestUrl = declineBattleRequestUrl.replace(battleId, "battle_id");
    window.setTimeout(function() {
        document.getElementById(battleId+'_battle_request_box_wrapper').remove();
    }, 500);
}

document.querySelectorAll('.battle_btn').forEach(a => {
    a.addEventListener('click', function(e){ openBattleModal(e, '.battle_modal_stop'); });
})

document.querySelectorAll('.view_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){ openViewBattleRequestsModal(e, '.view_battle_request_modal_stop'); });
})

document.querySelectorAll('.accept_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){ 
        acceptBattleRequest(e) 
    });
})

document.querySelectorAll('.decline_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){
        declineBattleRequest(e) 
    });
})

document.querySelectorAll('.progress-done').forEach( progressBar => {
    setTimeout( () => {
        progressBar.style.opacity = 1;
        progressBar.style.width = progressBar.getAttribute('data-done')+'%';
    }, 500)
})