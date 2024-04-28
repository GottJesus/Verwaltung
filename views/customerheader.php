<table border="0" width="100%"  cellpadding="0" cellspacing="0" class="customerHead">
	<tr>
		<td>
			<span class="lightgreen">Auswahlmen&#252; f&#252;r:&#160;&#160;</span>
			<span class="gold">
			<?php 
				echo (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn']) ) ? $_SESSION['loggedIn'] : "";
			?>
			</span>
		</td>
		
		<td width="15%">
			<a href="customer/logout" class="whatblue">logout</a>
		</td>
		
		<td width="35%" align="right">
			<span id="livedatum" class="weiss"></span>&#160;&#160;
			<span id="liveuhr" class="lightgreen"></span>&#160;&#160;
		</td>
	</tr>
</table>
<script type="text/javascript" src="<?php echo URL ?>public/js/liveUhr.js"></script>