<?php
	 if ( isset($_GET['success']) && $_GET['success'] == 1 )
	 {
		 echo "<script type='text/javascript'>alert('Registration Successful');</script>";
	 }
	 
	 // if ( isset($_GET['sessionLogin']) && $_GET['sessionLogin'] == 1 )
	 // {	
		// header("Location: sessionLogin.php");
	 // }
	
	session_start();
	$_SESSION["logged_in"]=0;
?>

<html>
	<?php include('header.php'); ?>
	<body>
			<div class="container clearfix">
				<div class="boxInner1 border1">
					<div class="row">
						
						
						<div class="col-lg-10 assignments ">
						
							<div class="m100">
								<p>The indefinite article takes two forms.
								 It’s the word a when it precedes a word that begins with a consonant.
								  It’s the word an when it precedes a word that begins with a vowel. 
								  The indefinite article indicates that a noun refers to a general idea rather than a particular thing. For example, you might ask your friend, “Should I bring a gift to the party?” Your friend will understand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,” your friend tells you. Again, the indefinite article indicates that she is not talking about a specific apple pie. Your friend probably doesn’t even have any pie yet. The indefinite article only appears with singular nouns. 
								Consider the following examples of indefinite articles used in context: The indefinite article takes two forms. It’s the word a when it precedes a word that begins with a consonant. It’s the word an when it precedes a word that begins with a vowel. The indefinite article indicates that a noun refers to a general idea rather than a particular thing. For example, you might ask your friend, “Should I bring a gift to the party?” Your friend will understand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,” your friend tells you. Again, the indefinite article indicates that she is not talking about a specific apple pie. Your friend probably doesn’t even have any pie yet.
                                                                The indefinite article only appears with singular nouns. Consider the following examples of indefinite articles used in context: </p>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('footer.php'); ?>
	</body>
</html>