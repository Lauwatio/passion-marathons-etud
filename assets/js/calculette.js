window.addEventListener('DOMContentLoaded', function () {
    
	const vit = document.getElementById('vit');
	const temps = document.getElementById('temps');
    const poids = document.getElementById('poids');
	const btn = document.getElementById('btn');
	const kal = document.getElementById('kal');
    
    function calculKal(a,b,c) {      
        let m = (a * 3.5 * c) / 200;
        m = m * b;
        return(m);
    }   
    
    btn.addEventListener('click', function() {
        let vitVal = Number(vit.value);
        let tempsVal = Number(temps.value);
        let poidsVal = Number(poids.value);
		let kalVal = calculKal(vitVal,tempsVal,poidsVal);
        kal.innerHTML = 'Vous allez dépenser ' + kalVal + 'kal en ' + tempsVal + ' minutes.';
    });    
});
