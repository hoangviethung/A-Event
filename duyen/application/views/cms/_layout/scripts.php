
<?php if(in_array($this->controller, array('user','products'))){?>
<script src="statics/directory/vendor/datatables/js/jquery.dataTables.js"></script>
<script src="statics/directory/vendor/datatables/js/dataTables.bootstrap.js"></script>
<?php }?>

<?php if($this->controller=='product'){?>
<script src="statics/directory/js/products.js"></script>
<?php } ?>

<?php if($this->controller=='user'){?>
<script src="statics/directory/js/users.js"></script>
<?php } ?>

<link rel="stylesheet" href="statics/directory/vendor/flatpickr/n_flatpickr.css">
<link rel="stylesheet" href="statics/directory/css/custome.css">
<script src="statics/directory/vendor/flatpickr/n_flatpickr.js"></script>
<script src="statics/directory/js/myweb.js"></script>
<script type="text/javascript">
	flatpickr('.flatpickr-input', {
		enableTime: false,
		dateFormat: "m-d-Y",
		allowInput:true,
		//minDate: "today",
	});

	flatpickr('.datetime', {
		enableTime: true,
		enableSeconds:true,
		dateFormat: "Z",
		time_24hr:false,
		altFormat: 'Y-m-d h:i:s',
		allowInput:true
		//minDate: "today",
	});


	/*var cleave = new Cleave('.cleave-num', {
		numeral: true,
		numeralThousandsGroupStyle: 'thousand'
	});*/


</script>