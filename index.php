<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>My Contacts</title>
<link rel="stylesheet" href="mavo.css" />
<link rel="stylesheet" href="style.css" />
<script src="mavo.js"></script>

</head>
<body mv-app="contacts" mv-storage="local" class="mv-autoedit" vocab="http://schema.org/">
 <header>FAVCODERS</header>
<h1>
	
	[count(contact)]<span>contacts</span>
</h1>

<details property="contact" typeof="Person" mv-multiple open>
	<summary>
		<img property="picture" src="Atoyegbe.jpg">
		<h1>
			<span property="name">Atoyegbe Adeyemi</span>
			<span property class="affiliation">FavCode54</span>
		</h1>
	</summary>
	<section>
		<section class="phones">
			<article property="phoneNumber" typeof="ContactPoint" mv-multiple>
				<span property="name" mv-default>Mobile</span>
				<span property="telephone">+2348147077479</span>
				<a href="tel:[telephone]" title="Call">📞</a>
			</article>
		</section>

		<section class="emails">
			<article property="emailAddress" typeof="ContactPoint" mv-multiple>
				<span property="name" mv-default>Email</span>
				<span property="email">herdeyemie@gmail.com</span>
				<a href="mailto:[email]" title="Send email">✉</a>
			</article>
		</section>
	</section>
</details>

<footer>
	<img src="fav.jpg">
</footer>

</body>
</html>
