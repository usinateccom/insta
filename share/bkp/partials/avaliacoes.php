<div class="encaixa">
	

				<!-- SECTION HEADER -->
									<div class="section-header">
						<h2 class="dark-text">Outras Avaliações</h2><div class="colored-line"></div><div class="sub-heading"><h3 class="rukio">Veja o que os membros dizem sobre o Instashare</h3></div>					</div>



				<div id="happy_customers_wrap" class="testimonials-wrap">							<!-- SINGLE FEEDBACK -->
							

<?php

$boxa = sel_simples("avaliander", "*", "where paro_meseano = '1' order by rand() limit 3");


while($frt = mysql_fetch_array($boxa)){

echo '

<div class="testimonials-box radius">
								<div class="feedback border-bottom-hover radius">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="

'.$ponto;

$fantaj = $frt['id_usr'];

$nomejjb = guina("dados_usr", $fantaj, "id_tab_p", "nome");

echo img_user($fantaj);

echo '" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap radius">
																						<h5 class="colored-text">'.$nomejjb.'</h5>
																						<div class="small-text">';


$bairro_gg = $frt['bairro'];
																						$cid_gg = $frt['cidade'];

	echo frinha("bairros_ff", 'bairro', 'idBairro', $bairro_gg);	echo frinha("cidades_ff", 'cidade', 'idCidade', $cid_gg);


echo "</div><p>".$frt['avaliand'].'</p>	</div>
																	</div>
							</div><!-- .testimonials-box -->';



				}// fim do while //1

?>



<!--

							<div class="testimonials-box radius">
								<div class="feedback border-bottom-hover radius">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php// echo $ponto; ?>wp-content/themes/Parallax-One/images/clients/1.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap radius">
																						<h5 class="colored-text">Sheila</h5>
																						<div class="small-text">
													Centro - Belo Horizonte	
												</div>
																						<p>
													No centro de Belo Horizonte, estacionamento é sempre um pesadelo! Meu prédio, como a maioria dos prédios antigos, não tem vaga de garagem. Contar com um carro compartilhado tem mudado meu dia-a-dia.												</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
											<!-- SINGLE FEEDBACK 
							<div class="testimonials-box">
								<div class="feedback border-bottom-hover radius">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php// echo $ponto; ?>wp-content/themes/Parallax-One/images/clients/2.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap">
																						<h5 class="colored-text">Carla</h5>
																						<div class="small-text">
													Betânia - Belo Horizonte	
												</div>
																						<p>
													Até o Uber ficava caro para mim. Eu me movimento muito em função do meu trabalho. Ônibus, sem chance. Acessar um carro compartilhado tem sido a melhor e mais econômica experiência dos últimos tempos												</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
											<!-- SINGLE FEEDBACK -
							<div class="testimonials-box">
								<div class="feedback border-bottom-hover">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php
											// echo $ponto; ?>wp-content/themes/Parallax-One/images/clients/3.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap">
																						<h5 class="colored-text">Núbia</h5>
																						<div class="small-text">
													Eldorado - Contagem	
												</div>
																						<p>
													Antes eu tinha que me deslocar para a região central de BH para obter um veículo. Encontrei um bem pertinho de mim. Bom pra mim, bom para quem compartilha. Nunca imaginei tanta facilidade assim!											</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
		
</div><!--encaixa--></div></div></div>