<!DOCTYPE html>
<html>
	<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="table.css">
	<title>PHP script to Generate Multiplication table!</title>
	</head>
	<body>
		<table border="1px";>
			<thead>
				<tr>
					<th colspan="11">
						10 x 10 Multiplication Table 
					</th>
				</tr>
			</thead>
			<tbody>
				<tr class="bold">
					<td></td>
					<td onclick="getId(this)">1</td>
					<td onclick="getId(this)">2</td>
					<td onclick="getId(this)">3</td>
					<td onclick="getId(this)">4</td>
					<td onclick="getId(this)">5</td>
					<td onclick="getId(this)">6</td>
					<td onclick="getId(this)">7</td>
					<td onclick="getId(this)">8</td>
					<td onclick="getId(this)">9</td>
					<td onclick="getId(this)">10</td>
				</tr>
				<tr>
					<td class="bold">1</td>
					<td onclick="getId(this)">1x1</td>
					<td onclick="getId(this)">1x2</td>
					<td onclick="getId(this)">1x3</td>
					<td onclick="getId(this)">1x4</td>
					<td onclick="getId(this)">1x5</td>
					<td onclick="getId(this)">1x6</td>
					<td onclick="getId(this)">1x7</td>
					<td onclick="getId(this)">1x8</td>
					<td onclick="getId(this)">1x9</td>
					<td onclick="getId(this)">1x10</td>
				</tr>
			
				<tr>
					<td class="bold">2</td>
					<td onclick="getId(this)">2x1</td>
					<td onclick="getId(this)">2x2</td>
					<td onclick="getId(this)">2x3</td>
					<td onclick="getId(this)">2x4</td>
					<td onclick="getId(this)">2x5</td>
					<td onclick="getId(this)">2x6</td>
					<td onclick="getId(this)">2x7</td>
					<td onclick="getId(this)">2x8</td>
					<td onclick="getId(this)">2x9</td>
					<td onclick="getId(this)">2x10</td>
				</tr>
			
				<tr>
						<td  class="bold">3</td>
						<td onclick="getId(this)">3x1</td>

						<td onclick="getId(this)">3x2</td>
						<td onclick="getId(this)">3x3</td>
						<td onclick="getId(this)">3x4</td>
						<td onclick="getId(this)">3x5</td>
						<td onclick="getId(this)">3x6</td>
						<td onclick="getId(this)">3x7</td>
						<td onclick="getId(this)">3x8</td>
						<td onclick="getId(this)">3x9</td>
						<td onclick="getId(this)">3x10</td>
				</tr>
			
				<tr>
						<td  class="bold">4</td>
						<td onclick="getId(this)">4x1</td>
						<td onclick="getId(this)">4x2</td>
						<td onclick="getId(this)">4x3</td>
						<td onclick="getId(this)">4x4</td>
						<td onclick="getId(this)">4x5</td>
						<td onclick="getId(this)">4x6</td>
						<td onclick="getId(this)">4x7</td>
						<td onclick="getId(this)">4x8</td>
						<td onclick="getId(this)">4x9</td>
						<td onclick="getId(this)">4x10</td>
				</tr>
			
				<tr>
						<td  class="bold">5</td>
						<td onclick="getId(this)">5x1</td>
						<td onclick="getId(this)">5x2</td>
						<td onclick="getId(this)">5x3</td>
						<td onclick="getId(this)">5x4</td>
						<td onclick="getId(this)">5x5</td>
						<td onclick="getId(this)">5x6</td>
						<td onclick="getId(this)">5x7</td>
						<td onclick="getId(this)">5x8</td>
						<td onclick="getId(this)">5x9</td>
						<td onclick="getId(this)">5x10</td>
				</tr>
			
				<tr>
						<td  class="bold">6</td>
						<td onclick="getId(this)">6x1</td>

						<td onclick="getId(this)">6x2</td>
						<td onclick="getId(this)">6x3</td>
						<td onclick="getId(this)">6x4</td>
						<td onclick="getId(this)">6x5</td>
						<td onclick="getId(this)">6x6</td>
						<td onclick="getId(this)">6x7</td>
						<td onclick="getId(this)">6x8</td>
						<td onclick="getId(this)">6x9</td>
						<td onclick="getId(this)">6x10</td>
				</tr>
			
				<tr>
						<td  class="bold">7</td>
						<td onclick="getId(this)">7x1</td>
						<td onclick="getId(this)">7x2</td>
						<td onclick="getId(this)">7x3</td>
						<td onclick="getId(this)">7x4</td>
						<td onclick="getId(this)">7x5</td>
						<td onclick="getId(this)">7x6</td>
						<td onclick="getId(this)">7x7</td>
						<td onclick="getId(this)">7x8</td>
						<td onclick="getId(this)">7x9</td>
						<td onclick="getId(this)">7x10</td>
				</tr>
			
				<tr>
						<td  class="bold">8</td>
						<td onclick="getId(this)">8x1</td>
						<td onclick="getId(this)">8x2</td>
						<td onclick="getId(this)">8x3</td>
						<td onclick="getId(this)">8x4</td>
						<td onclick="getId(this)">8x5</td>
						<td onclick="getId(this)">8x6</td>
						<td onclick="getId(this)">8x7</td>
						<td onclick="getId(this)">8x8</td>
						<td onclick="getId(this)">8x9</td>
						<td onclick="getId(this)">8x10</td>
				</tr>
			
				<tr>
						<td  class="bold">9</td>
						<td onclick="getId(this)">9x1</td>
						<td onclick="getId(this)">9x2</td>
						<td onclick="getId(this)">9x3</td>
						<td onclick="getId(this)">9x4</td>
						<td onclick="getId(this)">9x5</td>
						<td onclick="getId(this)">9x6</td>
						<td onclick="getId(this)">9x7</td>
						<td onclick="getId(this)">9x8</td>
						<td onclick="getId(this)">9x9</td>
						<td onclick="getId(this)">9x10</td>
				</tr>
			
				<tr>
						<td  class="bold">10</td>
						<td onclick="getId(this)">10x1</td>
						<td onclick="getId(this)">10x2</td>
						<td onclick="getId(this)">10x3</td>
						<td onclick="getId(this)">10x4</td>
						<td onclick="getId(this)">10x5</td>
						<td onclick="getId(this)">10x6</td>
						<td onclick="getId(this)">10x7</td>
						<td onclick="getId(this)">10x8</td>
						<td onclick="getId(this)">10x9</td>
						<td onclick="getId(this)">10x10</td>
				</tr>
		</tbody>
	</table>
	<form action="calculator.class.php" method="post">
		 <input id="factor1" type="text" name="factor1">
		* <input id="factor2" type="text" name="factor2">
		= <input id="result" type="text" name="result">
		<input type="submit" value="insert">
	</form>

	<script src="calculator.js"></script>
	</body>
</html>