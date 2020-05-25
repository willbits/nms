<?php require_once('../controlador/controlador_words.php');

?>
	<footer>
		<center><a id="nms" onclick="document.getElementById('id01').style.display='block'"><div><img src="../../images/nms.png" width="100%" height="100%" /></div></a></center>
			<div class="menu" >
				<center>
					<?php
					$busca = new words;
					$busca->traer_words1("1");
					foreach ($busca->datos($base) as $key) {
						?>
						<a class="principal" href="index.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
						<?php
					}

					$busca1 = new words;
					$busca1->traer_words1("2");
					foreach ($busca1->datos($base) as $key) {
						?>
						<a class="principal" href="nms_bio.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
						<?php
					}
					$busca2 = new words;
					$busca2->traer_words1("3");
					foreach ($busca2->datos($base) as $key) {
						?>
						<a class="principal" href="team.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
						<?php
					}
					$busca3 = new words;
					$busca3->traer_words1("4");
					foreach ($busca3->datos($base) as $key) {
						?>
						<a class="principal" href="news.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
						<?php
					}
					$busca4 = new words;
					$busca4->traer_words1("7");
					foreach ($busca4->datos($base) as $key) {
						?>
						<a class="principal" href="contact.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
						<?php
					}
					?>
					
				</center>
			</div>
	</footer>
</div>
	</body>
</html>