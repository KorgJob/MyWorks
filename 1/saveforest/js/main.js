let currentSum = document.getElementById('current_sum');

let inputSum = document.getElementById('sum');
inputSum.oninput = function() {
    currentSum.textContent=inputSum.value;
};
