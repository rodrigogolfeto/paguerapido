<?php
	include('includes/config.inc.php');
	include('includes/funcoes.inc.php');
	$titPag = $config['titleBase'];
	$homeM = ' active';
	include('includes/topo.inc.php');
?>

	<div class="pr-consulte-seu-cpf-main">
		<div class="container">
			<div class="row justify-content-end pb-sm-5" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
				<div class="col-12 col-sm-4 pb-sm-5">
					<div class="pr-consulte-seu-cpf bg-white my-4 my-sm-5 font-getone-bold">
						<div class="text-center py-3 px-3 font-18 color-5FB6AA">
							Consulte seu CPF/CNPJ
						</div>
						<div class="bg-133956 px-4 py-4 font-18">
							<form class="px-2">
								<div class="form-group mb-2">
									<label for="inputCpfCnpj" class="color-5FB6AA">CPF/CNPJ</label>
									<input type="text" class="form-control border-radius-0 border-0 py-4 font-14 cpfcnpj" id="inputCpfCnpj" placeholder="Informe o CPF ou CNPJ" name="">
								</div>
								<div class="form-group mb-2">
									<label for="inputCelular" class="color-5FB6AA">Celular</label>
									<input type="text" class="form-control border-radius-0 border-0 py-4 telefone font-14" id="inputCelular" name="" placeholder="(00) 00000-0000">
								</div>
								<div class="custom-control custom-checkbox mb-2 pt-1">
									<input type="checkbox" class="custom-control-input border-radius-0 border-0" id="inputCheck">
									<label class="custom-control-label color-5FB6AA font-14 line-height-200 pl-2" for="inputCheck">Li e concordo com os termos de uso</label>
								</div>
								<button type="button" class="btn btn-primary pr-btn-contrate font-getone-bold color-231941 font-16 w-100 mt-2 mb-3 py-3 px-5">Contrate para sua empresa</button>
								<a href="" class="text-white font-getone-light-italic font-16 d-inline-block"><span class="mr-2">ou acesse pelo</span><img src="images/icon-facebook.png" alt="" class="icon-acesse-facebook float-right" /></a>
							</form>
						</div>
					</div>
					

				</div>
			</div>
				

		</div>
	</div>

	<div class="container py-5 pr-como-negociar">
		<div class="d-flex flex-column font-24 font-md-40 text-center line-height-120 mb-4 pb-2" data-aos-once="true" data-aos="fade-up" data-aos-duration="800">
			<p class="mb-0 font-getone-bold-italic color-5FB6AA">Como negociar?</p>
			<p class="mb-0 font-getone-light-italic color-133956">Quitar suas pendências ficou mais facil.</p>
		</div>
		<div class="row text-center font-20 font-md-24 color-5FB6AA font-getone-bold-italic line-height-120">
			<div class="col-12 col-sm-4 mb-4" data-aos-once="true" data-aos="flip-left" data-aos-delay="300" data-aos-duration="800">
				<img src="images/icon-como-negociar-1.png" class="d-inline mb-3" alt="" />
				<div class="pt-md-3"><span class="color-133956">1.</span> Consulte suas contas</div>
			</div>
			<div class="col-12 col-sm-4 mb-4" data-aos-once="true" data-aos="flip-left" data-aos-delay="600" data-aos-duration="800">
				<img src="images/icon-como-negociar-2.png" class="d-inline mb-3" alt="" />
				<div><span class="color-133956">2.</span> Escolha a melhor<br>negociação e forma de pagar</div>
			</div>
			<div class="col-12 col-sm-4 mb-4" data-aos-once="true" data-aos="flip-left" data-aos-delay="900" data-aos-duration="800">
				<img src="images/icon-como-negociar-3.png" class="d-inline mb-3" alt="" />
				<div class="pt-md-3"><span class="color-133956">3.</span> Gere seus boletos online</div>
			</div>
		</div>
	</div>

	<div class="pr-quem-somos bg-69C1B9 py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 font-getone-bold-italic font-16 font-md-18 text-white pt-3" data-aos-once="true" data-aos="fade-right" data-aos-duration="800">
					<h3 class="font-getone-bold mb-4 font-24">Quem somos</h3>
					<p>A Solução de Valor nasceu da iniciativa de ofertar soluções de valor às empresas, atuando de forma eficiente e criativa. A Solução de Valor conta com o que há de melhor em tecnologia e modelos de gestão que, através de uma base sólida, gera credibilidade no mercado, conjunto somado à eficiência, ética e seriedade.</p>
					<p>Em um processo de constante investimento, a Solução de Valor se empenha para oferecer aos nossos colaboradores diversas ferramentas de trabalho, proporcionando aos nossos clientes maior qualidade na prestação de serviços.</p>
					<p>Dispomos dos mais variados recursos como: Sistema de Gestão de Call Center com distribuição inteligente das chamadas para as posições (DAC), através de múltiplos critérios de distribuição das chamadas e demais funcionalidades. CRM parametrizado para atuar de forma automática na cobrança preventiva e corretiva dos clientes, com disparos de e-mails, SMS, Voicemail e SpeakSMS</p>
				</div>
				<div class="col-12 col-md-6 text-center pt-3 pt-md-5" data-aos-once="true" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300"><img src="images/sobre.png" alt="" class="d-inline" /></div>
			</div>
		</div>
	</div>

	<div class="bg-363636 py-5">
		<div class="container text-center font-getone-bold-italic">
			<h3 class="color-5FB6AA mb-4 font-24 font-md-32" data-aos-once="true" data-aos="fade-up" data-aos-duration="800">Quem confia em nós?</h3>
			<div class="px-5">
				<div class="row px-md-5">
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="300" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="400" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="500" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="600" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="700" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
					<div class="col-12 col-md-4 px-md-5 py-3 py-md-2" data-aos-once="true" data-aos="flip-left" data-aos-delay="800" data-aos-duration="800"><img src="images/logo-aguas.png" alt="" /></div>
				</div>
			</div>
		</div>
	</div>
		
<?php
	include('includes/rodape.inc.php');	
?>