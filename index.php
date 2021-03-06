<html>
	<head>
	</head>
	<body>
		<h1>Braintree Credit Card Transactioin Form</h1>
		<div>
			<form action="transaction.php" method="POST" id="braintree-payment-form">
				<p>
					<label>Card Number</label>
					<input type="text" size="20" autocomplete="off" data-encrypted-name="number" />
				</p>
				<p>
					<label>CVV</label>
					<input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" />
				</p>
				<p>
					<label>Expiration (MM/YYYY)</label>
					<input type="text" size="2" name="month" /> / <input type="text" size="4" name="year" />
				</p>
				<input type="submit" id="submit" />
			</form>
		</div>
		<script src="https://js.braintreegateway.com/v1/braintree.js"> </script>
		<script>
			var braintree = Braintree.create("YourClientSideEncryptionKey");
			braintree.onSubmitEncryptForm('braintree-payment-form');
		</script>
	</body>
</html>
