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

// Modals

const openModal = function (e, modalStopClassClass, closeModalFunction) {
    e.preventDefault();
    target = document.querySelector(e.target.getAttribute('href'));
    target.style.display = null;
    target.setAttribute('aria-hidden', false);
    target.setAttribute('aria-modal', true);
    modal = target;
    modal.addEventListener('click', closeModalFunction);
    modal.querySelector(modalStopClassClass).addEventListener('click', stopPropagation);
}

const closeModal = function (e, modalStopClass) {
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
    console.log(modalStopClass)
    modal.querySelector(modalStopClass).removeEventListener('click', stopPropagation);
}

const stopPropagation = function (e, modalStopClass) {
    e.stopPropagation();
}

const openBattleModal = function (e, modalStopClass) {
    e.preventDefault()
    battleForm = document.getElementById('battle_form');
    defenderInput = document.createElement('input');
    defenderInput.setAttribute('name', 'defender');
    defenderInput.setAttribute('type', 'hidden');
    defenderInput.setAttribute('value', e.target.id.match(/^\d+/g)[0]);
    battleForm.append(defenderInput);
    openModal(e, modalStopClass, function(e){ closeBattleModal(e, modalStopClass); });
}

const closeBattleModal = function (e, modalStopClass) {
    closeModal(e, modalStopClass);
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

const openViewBattleRequestsModal = function (e, modalStopClass) {
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
    openModal(e, modalStopClass, function(e){ closeViewBattleRequestsModal(e, modalStopClass); });
}

const closeViewBattleRequestsModal = function(e, modalStopClass) {
    closeModal(e, modalStopClass);
}

const openChooseStockModal = function(e, modalStopClass) {
    openModal(e, modalStopClass, function(e){ closeChooseStockModal(e, modalStopClass); });
}

const closeChooseStockModal = function(e, modalStopClass) {
    closeModal(e, modalStopClass);
}

// End of modals

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

const chooseStock = function(e, modalStopClass) {
    e.preventDefault();
    e.target.style="background:red;";
    stockId = e.target.id.match(/^\d+/g)[0];
    form = document.getElementById('battle_form');
    stockInput = document.createElement('input')
    stockInput.setAttribute('value', stockId);
    document.querySelectorAll('.stock_input').forEach(input => { input.remove() }) ;
    stockInput.setAttribute('class', 'stock_input');
    stockInput.setAttribute('type', 'hidden');
    form.append(stockInput);
    window.setTimeout(function() {
        closeChooseStockModal(e, modalStopClass);
        e.target.removeAttribute('style');
    }, 200);
}

// Modal boutons

document.querySelectorAll('.battle_btn').forEach(a => {
    a.addEventListener('click', function(e){ openBattleModal(e, '.battle_modal_stop'); });
})

document.querySelectorAll('.view_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){ openViewBattleRequestsModal(e, '.view_battle_request_modal_stop'); });
})

document.querySelectorAll('.choose_stock_btn').forEach(a => {
    a.addEventListener('click', function(e){ openChooseStockModal(e, '.choose_stock_modal_stop'); });
})

// End of Modal boutons

document.querySelectorAll('.accept_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){ acceptBattleRequest(e) });
})

document.querySelectorAll('.decline_battle_request_btn').forEach(a => {
    a.addEventListener('click', function(e){ declineBattleRequest(e) });
})

document.querySelectorAll('.progress-done').forEach( progressBar => {
    setTimeout( () => {
        progressBar.style.opacity = 1;
        progressBar.style.width = progressBar.getAttribute('data-done')+'%';
    }, 500)
})

document.querySelectorAll('.stock_card').forEach(a => {
    a.addEventListener('click', function(e){ chooseStock(e, '.choose_stock_modal_stop') });
})

// Start of chart config

// first chart

const createWinsChart = function(id) {
    const ctx = document.getElementById(id).getContext('2d');
    const winsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Wins', 'Defeats'],
            datasets: [{
                label: 'Wins and defeats',
                data: [loggedUserNumberOfWinnedBattles, loggedUserNumberOfLostBattles],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

//We create the first wins chart

createWinsChart('wins_chart');

//second chart

 const createStockValuationChart = function(id) {
    const stockValuationChart = new Chart(
        document.getElementById(id),
        {
            type: 'line',
            data: {
                labels: [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                  ],
                datasets: [{
                  label: 'Value of my stocks',
                  backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: [0, 10, 5, 2, 20, 30, 45],
                }]
              },
            options: {}
          }
      );
 }

  //buttons actions for charts
  
  document.getElementById('wins_stats_button').addEventListener(
       'click',
        function(e){
        openChart(e, 'wins_chart', function(e){ createWinsChart('wins_chart') }) 
    })

    document.getElementById('stock_valuation_stats_button').addEventListener(
        'click',
         function(e){
         openChart(e, 'stock_valuation_chart', function(e){ createStockValuationChart('stock_valuation_chart') }) 
     })


    // chart functions

    const openChart = function(e, id, chartCreationFunction){
        e.preventDefault();
        allCharts = document.querySelectorAll('.stats_chart').forEach( chart => {
            chart.remove()
        })
        chartToCreate = document.createElement('canvas');
        chartToCreate.setAttribute('id', id);
        chartToCreate.setAttribute('class', 'stats_chart');
        window.setTimeout(function() {
            document.getElementById('stats_chart_container').append(chartToCreate),
            chartCreationFunction()
        }, 200);
    }

// End of chart config