"use strict"
/*
* VARIABLES
* */
//TODO check if everywhere is USD
const API_KEY = "e22854cc76a4e7d0b7972d1165c83d50e35afb9db5de3641d9872d1b6e40dd0a"
let currentCurrency = "BTC";
const currencies = ["BTC","ETH","BNB","XRP","DOGE","LTC","SOL","BUSD","USDC","USDT","APT","FIL"];
let counterInterval;
let intervalValue;

/*
* DOM
* */
const counter = document.getElementById("counter");

const currentPriceElements = (currency) => {
    return [
        `low24-${currency}`, `high24-${currency}`,`openDay-${currency}`,`lowDay-${currency}`,`highDay-${currency}`
    ]
}

const historicPriceElements = (currency) => {
    return [
        `periodStart-${currency}`, `periodEnd-${currency}`,`progress-${currency}`
    ]
}

//rendering
(async () => {
    await reloadCurrentPriceData();
    await loadInfo();
})()


setInterval(async () => {
    await reloadCurrentPriceData();
}, 30000)

function initCounter(){
    intervalValue = 30;
    counterInterval = setInterval(() => {
        intervalValue --;
        counter.innerHTML = `${intervalValue}`
    }, 1000)

}

async function reloadCurrentPriceData(){
    let data = await loadCurrentPrice()
    currencies.forEach(currency => {
        let element = document.getElementById(`currentPrice-${currency}`)
        if(element){
            element.innerHTML = `${data[currency]['USD']} $`;
        }
    })

    clearInterval(counterInterval);
    counter.innerHTML = ``
    initCounter();
}

async function loadCurrentPrice(){
    let response = await fetch(`https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,BNB,XRP,DOGE,LTC,SOL,BUSD,USDC,USDT,APT,FIL&tsyms=USD&api_key=${API_KEY}`)
    let data = await response.json();
    return data;
}

async function loadInfo(e = {}) {
    currentCurrency = e instanceof Element ? e.getAttribute("name") : currentCurrency;
    await getCryptoData(currentCurrency)
}

async function getHistoricData(currency, period = 7){
    let historyResponse = await fetch(`https://min-api.cryptocompare.com/data/v2/histoday?fsym=${currency}&tsym=USD&limit=${period}&api_key=${API_KEY}`);
    return await historyResponse.json();
}

async function handlePeriodChange(e){
    let currency = e.getAttribute("name");
    let period = e.getAttribute("value")

    let historicData = await getHistoricData(currency, period)
    getLineChart(currency, historicData, period);
    renderHistoricPrices(currency, historicData);
}

//charts
async function getCryptoData(currency) {
    let response = await fetch(`https://min-api.cryptocompare.com/data/pricemultifull?fsyms=${currency}&tsyms=EUR&api_key=${API_KEY}`);
    let data = await response.json()
    let historicData = await getHistoricData(currency)

    getBarChart(currency, data);
    getLineChart(currency, historicData);

    renderPricesForCurrentDay(currency, data);
    renderHistoricPrices(currency, historicData);
}

function getBarChart(currency, data = []) {
    //line

    let ctxL = document.getElementById(`lineChart-${currency}`).getContext('2d');
    let myLineChart = new Chart(ctxL, {
        type: 'bar',
        data: {
            labels: ["Najnižšia za 24h", "Najvyššia 24h", "Otváracia cena v tento deň", "Najnižšia za akt. deň", "Najvyššia za akt. deň",],
            datasets: [{
                label: `${currency} - graf(v USD)`,
                data: [ //TODO switch to USD
                    data.RAW[currency].EUR.LOW24HOUR,
                    data.RAW[currency].EUR.HIGH24HOUR,
                    data.RAW[currency].EUR.OPENDAY,
                    data.RAW[currency].EUR.LOWDAY,
                    data.RAW[currency].EUR.HIGHDAY],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            },

            ]
        },
        options: {
            responsive: true
        }
    });
}

function getLineChart(currency, historicData = [], period = 7){
    //line
    let labels = [];
    let data = []
    historicData?.Data?.Data.forEach(historicData => {
        labels.push(getDateFromUnixTime((historicData.time)));
        data.push(historicData.high);
        }
    );
    var ctxL = document.getElementById(`lineChartHistoric-${currency}`).getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels,
            datasets: [{
                label: `${currency}- Najvyššie ceny za posledných ${period} dní (v USD)`,
                data,
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },

            ]
        },
        options: {
            responsive: true
        }
    });
}

function renderPricesForCurrentDay(currency = currentCurrency,data = []){
    const elementsNames = currentPriceElements(currency);
    const currencyData = [ //TODO switch to usd
        data.RAW[currency].EUR.LOW24HOUR,
        data.RAW[currency].EUR.HIGH24HOUR,
        data.RAW[currency].EUR.OPENDAY,
        data.RAW[currency].EUR.LOWDAY,
        data.RAW[currency].EUR.HIGHDAY
    ]
    elementsNames.forEach((elementName,index) => {
        let element = document.getElementById(elementName);
        element.innerHTML = `${currencyData[index]} $`
    })
}

function renderHistoricPrices(currency = currentCurrency,historicData = []){
    const elementsNames = historicPriceElements(currency);
    const currencyData = [
      historicData.Data.Data[0].high,
      historicData.Data.Data[historicData.Data.Data.length - 1].high,
      getPriceProgress(historicData.Data.Data[0].high, historicData.Data.Data[historicData.Data.Data.length - 1].high)
    ]
    elementsNames.forEach((elementName,index) => {
        let element = document.getElementById(elementName);
        if(element.getAttribute("id") === `progress-${currency}`){
            if(currencyData[index].progress === "positive"){
                element.innerHTML = `+ ${currencyData[index].value} %`;
                element.style.color = "green";
            } else {
                element.innerHTML = `- ${currencyData[index].value} %`;
                element.style.color = "red";

            }
        } else {
            element.innerHTML = `${currencyData[index]} $`
        }
    })
}

// helpers
function getDateFromUnixTime(unixTimeValue){
    let date = new Date(unixTimeValue * 1000);

    return  `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`
}

function getPriceProgress(startPrice, endPrice){
    let progress = (endPrice/startPrice);
    return progress > 1 ? {progress: "positive",value: roundOnTwoDecimals((progress - 1) * 100)} : {progress: "negative",value: roundOnTwoDecimals( (1 - progress) * 100)};
}

function roundOnTwoDecimals(value){
    return Math.round((value + Number.EPSILON) * 100) / 100
}

