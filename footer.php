  </main>   
    <!-- Footer -->
    
    <footer>
        <p id="footer">Healthy Yummy Smart<br />
                    All rights reserved.
        <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
            <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~</p>
    </footer>
    
 <!-- Navigation -->
    <script> 
	$(document).ready(function(){
		$("#mobile").click(function(){
			$("#menu").slideToggle("slow");
		});
	});
	</script>
	<script> 
	$(document).ready(function(){
		$(".dropbtn").click(function(){
			$(".dropdown-content").slideToggle("slow");
		});
	});
	</script>
	<script>
	function myFunction(x) {
		x.classList.toggle("change");
	}
	</script>
    
	<!-- WP Footer Starts -->
	<?php wp_footer(); ?>
	<!-- WP Footer Ends -->
</body>
</html>