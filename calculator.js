	function  getId(element) {
				document.getElementById('factor1').value =element.parentNode.rowIndex-1;
				document.getElementById('factor2').value =element.cellIndex ;
				document.getElementById('result').value =(element.parentNode.rowIndex-1)*element.cellIndex ;
				

			}