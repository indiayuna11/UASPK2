let arr = [];
let total = document.querySelector("#total");

function calculateAmount(val){
	let divObj = document.querySelector("#tot_amount");
			
	divObj.value = val;
			
	arr.push(parseInt(divObj.value));
			
	console.log(arr);

	let sums = arr.reduce((a, b) => a + b);
			
	total.innerHTML = sums;
}