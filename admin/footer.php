</div>
<footer>
		<div class="inner">
			<p><a href="../index.php">八百長うらないへ</a></p>
		</div>
	</footer>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('textarea').bind('keydown keyup keypress change',function(){
			var thisValueLength = $(this).val().length;
			$('.count').html(thisValueLength);
		});
	});
	</script>

</body>
</html>