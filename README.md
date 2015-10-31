
Example
-------

	<?php

	$str = <<<E
	var variants = [   { sku: 'P170.SP110', productID: '4355706', name:
	'Home Theater 5.1 80W Black Wave SP110 Multilaser', isPromotion: 'false',
	price: '429,900', priceBase: '429,900', priceDescription: 
	'some description', isPurchasable: true, isInventoryAvailable: true, 
	handlingDays: 4, MinimumQtyAllowed:'0', MaximumQtyAllowed:'0', 
	availability: 'I', StockBalance:'10,00' , options: [      ]   },
	{ sku: '170.SP110', productID: '4355704', name: 'Home Theater 5.1',
	isPromotion: 'false', price: '429,900', priceBase: '429,900',
	priceDescription: 'other description', isPurchasable: true,
	isInventoryAvailable: true, handlingDays: 4, MinimumQtyAllowed:'0',
	MaximumQtyAllowed:'0', availability: 'I', StockBalance:'10,00' ,
	options: [      ]   },   ];
	E;

		print_r(mapstring($str));

	Array
	(
		[key] => Array
			(
				[sku] => Array
					(
						[0] => P170.SP110
						[1] => 170.SP110
					)

				[productID] => Array
					(
						[0] => 4355706
						[1] => 4355704
					)

				[name] => Array
					(
						[0] => Home Theater 5.1 80W Black Wave SP110 Multilaser
						[1] => Home Theater 5.1
					)

				[isPromotion] => Array
					(
						[0] => false
						[1] => false
					)

				[price] => Array
					(
						[0] => 429,900
						[1] => 429,900
					)

				[priceBase] => Array
					(
						[0] => 429,900
						[1] => 429,900
					)

				[priceDescription] => Array
					(
						[0] => some description
						[1] => other description
					)

				[isPurchasable] => Array
					(
						[0] => true
						[1] => true
					)

				[isInventoryAvailable] => Array
					(
						[0] => true
						[1] => true
					)

				[handlingDays] => Array
					(
						[0] => MinimumQtyAllowed
						[1] => MinimumQtyAllowed
					)

				[MinimumQtyAllowed] => Array
					(
						[0] => 0
						[1] => 0
					)

				[MaximumQtyAllowed] => Array
					(
						[0] => 0
						[1] => 0
					)

				[availability] => Array
					(
						[0] => I
						[1] => I
					)

				[StockBalance] => Array
					(
						[0] => 10,00
						[1] => 10,00
					)

				[options] => Array
					(
						[0] => sku
					)

			)

		[val] => Array
			(
				[P170.SP110] => Array
					(
						[0] => sku
					)

				[4355706] => Array
					(
						[0] => productID
					)

				[Home Theater 5.1 80W Black Wave SP110 Multilaser] => Array
					(
						[0] => name
					)

				[false] => Array
					(
						[0] => isPromotion
						[1] => isPromotion
					)

				[429,900] => Array
					(
						[0] => price
						[1] => priceBase
						[2] => price
						[3] => priceBase
					)

				[some description] => Array
					(
						[0] => priceDescription
					)

				[true] => Array
					(
						[0] => isPurchasable
						[1] => isInventoryAvailable
						[2] => isPurchasable
						[3] => isInventoryAvailable
					)

				[MinimumQtyAllowed] => Array
					(
						[0] => handlingDays
						[1] => handlingDays
					)

				[0] => Array
					(
						[0] => MinimumQtyAllowed
						[1] => MaximumQtyAllowed
						[2] => MinimumQtyAllowed
						[3] => MaximumQtyAllowed
					)

				[I] => Array
					(
						[0] => availability
						[1] => availability
					)

				[10,00] => Array
					(
						[0] => StockBalance
						[1] => StockBalance
					)

				[sku] => Array
					(
						[0] => options
					)

				[170.SP110] => Array
					(
						[0] => sku
					)

				[4355704] => Array
					(
						[0] => productID
					)

				[Home Theater 5.1] => Array
					(
						[0] => name
					)

				[other description] => Array
					(
						[0] => priceDescription
					)

			)

	)