<script>
	window.addEventListener("load", function() {
		$('input[name="celular"], input[name="fone"], input[name="telefone"], input[name="whatsapp"], input[name="whats"]').keyup(function(event) {
			const {
				value
			} = event.target;
			event.target.setAttribute("maxlength", "15")
			event.target.value = value
				.replace(/\D/g, '')
				.replace(/(\d{2})(\d)/, "($1) $2")
				.replace(/(\d)(\d{4})$/, "$1-$2")

			const {
				style
			} = event.target;
			style.outline = value.length < 14 ? "1px solid red" : "none";
		});
	}, false);
</script>

<style>
	@media only screen and (max-width: 600px) {
		footer>div:nth-child(1) {
			padding-bottom: 0 !important;
		}

		footer>div:nth-child(2),
		footer>div:nth-child(2)>div {
			padding: 0 !important;
			background: linear-gradient(to bottom, #072E59, #0f263e) !important;
			;
			padding-bottom: 10px !important;
		}
	}

	/* */

	@media only screen and (max-width: 600px) {
		footer h3 {
			margin: 5px !important;
			padding-top: 15px !important
		}

		footer div:nth-child(1) {
			padding: 0 !important;
		}

		footer {
			padding: 0 15px
		}
	}
</style>

<script>
	/* Confirmação Envio de Email */
	if (localStorage.getItem("email") != null) {
		mensagem_enviada()
		localStorage.removeItem("email")
	}

	function mensagem_enviada() {

		if (localStorage.getItem("email") != null) {
			mensagem_enviada()
			localStorage.removeItem("email")
		}

		document.querySelector("body").insertAdjacentHTML("beforeend", `

                    <div id="msg_email" style="position: fixed;left: 0;top: 0;width: 100%;color: #000;display: flex;align-items: center;justify-content: center;height: 100%;background: #0007;z-index: 999;">

                        <style>
                            /*Mobile Obrigado pelo contato/ Pedido PopUp*/
                            @media only screen and (max-width: 600px) {
                                #msg_email {
                                    padding: 15px !important;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center !important;
                                    justify-content: center;
                                    max-width: calc(100% - 00px)
                                }

                                #msg_email>div {
                                    display: flex;
                                    flex-direction: column !important;
                                    max-width: calc(100% - 00px) !important;
                                    padding-bottom: 15px;
                                    padding-top: 10px
                                }

                                #msg_email img {
                                    width: 100px !important;
                                }

                                #msg_email span {
                                    font-size: 30px !important;
                                    margin: 0 !important;
                                }

                                #msg_email>div>span {
                                    font-size: 30px !important;
                                    width: .5em;
                                    height: 1em;
                                    display: flex;
                                    align-items: center
                                }
                                span[onclick]{
                                    right: 0!important;
                                    top: 0!important;
                                    padding: 25px!important;
                                    display: flex!important;
                                    align-items: center!important;
                                    justify-content: center;
                                    border-radius: 0 10px!important;
                                }
                            }
                        </style>

                        <div style="background: #fff;display: flex;align-items: center;justify-content: center;border: 3px solid #471A05;border-radius: 15px;max-width: 1100px;width: 100%;position: relative;">
                            <img decoding="async" loading="lazy" alt="joinha" src="https://senae.com.br/imgs/joinha.webp" width="500px">

                            <div style="display: flex;flex-direction: column;">
                                <span style="font-size: 45px;margin-right: 45px;text-align: center;color: #471A05;/*! color: #fff; */margin-bottom: 15px;">Mensagem enviada <br>com Sucesso.</span>
                                <span style="font-size: 35px;margin-right: 45px;text-align: center;color: #471A05;/*! color: #fff; */margin-bottom: 15px;">Logo estaremos entrando em Contato.<br></span>
                                <span style="font-size: 45px;margin-right: 45px;text-align: center;color: #471A05;/*! color: #fff; */">Obrigado.</span>
                            </div>

                            <span onclick="close_x()" style="right: -30px;position: absolute;top: -30px;background: #471A05;border-radius: 55px;font-size: 45px;padding: 15px 30px;color: #f00;font-weight: 777;cursor: pointer;">X</span>
                        </div>
                    </div>

                `)

		$("input").val("")
		$("textarea").val("")
		$("select").val("")
		document.querySelector("#msg_email").style.height = (window.innerHeight - 30) +"px"
	}
</script>

<?php
if (isset($_GET['email_enviado'])) {

	if ($_GET['email_enviado'] == 1) {
		echo '<script>mensagem_enviada()</script>';
	}
}

?>

<script>
	function close_x() {
		$('#msg_email').remove()
		if (window.location.href.split("/").indexOf("?email_enviado=1") != -1) {
			var new_url = window.location.href.split("/?email_enviado=1")[0]

			document.querySelector("body").insertAdjacentHTML("beforeend", `
				<a id="reload_email" href="` + new_url + `"></a>
			`)

			document.querySelector("#reload_email").click()
		}
	}
</script>

<footer style='background: linear-gradient(to bottom, #072E59, #0f263e);color: #fff;'>
	<!-- <div style="/*! display: flex; *//*! align-content: center; *//*! justify-content: center; *//*! padding: 4em 5%; *//*! width: 90%; */display: flex;flex-direction: column;align-items: center;justify-content: center;">
		<div style="width: 95%;">
			<h3 style="font-size: 25px;width: 100%;color:#fff!important">Parceiros</h3>
		</div>
		<div style="display: flex;width: 95%;">
			<div style="width: 33%;">
				<img src="https://senae.com.br/wp-content/uploads/2021/12/banner1b.webp" style="width: 100%;border-radius: 13px;">
			</div>
			<div style="padding: 0 1em;width: 33%;">
				<img style="width: 374px;border-radius: 15px;width: 100%;" src="https://senae.com.br/wp-content/uploads/2021/12/banner4d.webp">
			</div>
			<div style="width: 33%;">
				<img style="width: 100%;border-radius: 13px;" src="https://senae.com.br/wp-content/uploads/2021/12/banner5a.webp">
			</div>
		</div>
	</div> -->
	<div style='background: linear-gradient(to bottom, #072E59, #0f263e);;'>
		<div style='padding: 2em;font-size: 12px;margin-left: 0em;line-height: 21px;display: flex;justify-content: center;'>
			<span>© Copyright <span id='yearc'></span> - Todos os Direitos Reservados | Desenvolvido por: <a target="_blank" href="https://projetovendas.com.br" style="color: #3ae;">Projeto Vendas</a></span>
		</div>
	</div>

	<style>
		@media only screen and (max-width: 600px) {
			footer {
				margin-top: 0em;
				z-index: 99;
				position: relative;
				padding: 20px 0;
				background: linear-gradient(to bottom, #072E59, #0f263e);
				!important;
			}
		}

		footer {
			z-index: 99 !important;
			position: relative;
		}
	</style>
	<script>
		document.getElementById('yearc').innerHTML = new Date().getFullYear()
	</script>

	<script>
		setTimeout(function() {

			////
			// JS // Insert script dinamicaly
			var script = document.createElement('script');
			script.id = 'insScpt_a';
			script.innerHTML = `
		//	PREVENT DUPLICATES
		  var insScpt_a = document.querySelector('#insScpt_a');
		  if ( insScpt_a[1] != undefined ){ insScpt_a.remove() }
		  
		// SCRIPT HERE
		var rmvFooter = document.querySelectorAll('#footer')
		
		  
		  var webpushrUnknownBtn = 0;

		  document.querySelector('body').onclick = function(){

			if( webpushrUnknownBtn == 0 ){
				document.querySelector('#webpushrUnknownBtn').click()
			}

		  }

		  `;

			/*insert script in iframe document*/
			//document.querySelector('iframe').contentDocument.firstElementChild.firstElementChild.appendChild(script);

			////

		}, 5000)
	</script>

	<style>
		/*Mobile Obrigado pelo contato/ Pedido PopUp*/
		@media only screen and (max-width: 600px) {
			#msg_email {
				padding: 15px !important;
				display: flex;
				flex-direction: column;
				align-items: center !important;
				justify-content: center;
				max-width: calc(100% - 30px)
			}

			#msg_email>div {
				display: flex;
				flex-direction: column !important;
				max-width: calc(100% - 30px) !important;
				padding-bottom: 15px;
				padding-top: 10px
			}

			#msg_email img {
				width: 100px !important;
			}

			#msg_email span {
				font-size: 30px !important;
				margin: 0 !important;
			}

			#msg_email>div>span {
				font-size: 30px !important;
				width: .5em;
				height: 1em;
				display: flex;
				align-items: center
			}
		}

		@media only screen and (max-width: 600px) {
			footer {
				padding: 0
			}

			footer div>div>span {
				padding: 20px 40px
			}

		}
	</style>

</footer>

<script>
	window.addEventListener("load", function() {

		if (page_title != "") {
			document.querySelector("title").textContent = page_title + ' - ' + document.querySelector("title").textContent
		}

	}, false);
</script>