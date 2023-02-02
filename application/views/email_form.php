<html>
<head>    
    <title> Send Email Codeigniter </title>
</head>
<body>
<?php
echo $this->session->flashdata('email_sent');
echo form_open(base_url('send_email'));
?>
<input type = "email" name = "email" required />
<input type = "submit" value = "SEND MAIL">
<?php
echo form_close();
?>
</body>
</html>

<script>
	// var a = 5;
	// var b = 5;
	// var b = a.b
	// console.log(a+b);

	var a = ['a','b','c'];
	console.log(a);
</script>
