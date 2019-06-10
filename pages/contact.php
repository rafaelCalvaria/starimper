<div class="contact">

    <div class="container-fluid overflow-hidden top-map">
        <div class="row p-0 d-none d-lg-block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.082649647157!2d-47.449267!3d-23.493291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58aa77c68ff9b%3A0xec655b039fd3d5a6!2sR.+Cap.+Carlos+Malheiro+Oetterer%2C+270+-+Jardim+Santa+Ros%C3%A1lia%2C+Sorocaba+-+SP%2C+18035-095!5e0!3m2!1spt-BR!2sbr!4v1556376805750!5m2!1spt-BR!2sbr" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="row p-0 d-sm-block d-md-block d-lg-none d-xl-none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.082649647157!2d-47.449267!3d-23.493291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58aa77c68ff9b%3A0xec655b039fd3d5a6!2sR.+Cap.+Carlos+Malheiro+Oetterer%2C+270+-+Jardim+Santa+Ros%C3%A1lia%2C+Sorocaba+-+SP%2C+18035-095!5e0!3m2!1spt-BR!2sbr!4v1556376805750!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container bg-white">
        <div class="row text-center py-4 pt-5 blu-text">
            <div class="col">
                <h1 class="title">Fale Conosco</h1>
                <p>Estamos prontos para atendê-lo!</p>
            </div>
        </div>
    </div>

    <div class="container">
            <a class="whatsapp-talk text-white" href="https://api.whatsapp.com/send?l=pt_br&phone=5515998554920" target="_blank"> Fale agora mesmo!</a>
        
        <div class="row py-4 blu-text">
            <div class="col-12 col-md-5 mb-5">
                <h3>Encontre-nos!</h3>
                <p>ENDEREÇO:<br /><span class="small-icon pin-map mr-1 float-left mb-5 mt-1"></span> R Cap. Carlos Malheiro Oetterer, 270,<br />Jd Santa Rosália, Sorocaba-SP.<br />CEP: 18035-095</p>
                <p>TELEFONES:<br />
                <span class="small-icon telephone mr-1 float-left"></span> (15) 3034-0866<br />
                <span class="small-icon whatsapp mr-1 float-left"></span> (15) 9 9855-4920</p>
                <p>ATENDIMENTO:<br><span class="small-icon clock mr-1 float-left mb-5 mt-1"></span> Segunda à Sexta<br />8hs às 18hs</p>
            </div>

            <div class="col-12 col-md-7 mb-5">
                <h3>Entre em contato!</h3>
                <p>Responderemos o mais rápido possível!</p>

                <form form class="needs-validation" novalidate action="../common_layout/sendMail.php" method="POST">
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Seu nome" required>
                            <div class="valid-feedback">Parece ok!</div>
                            <div class="invalid-feedback">Informe seu nome.</div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Seu email" required>
                            <div class="valid-feedback">Parece ok!</div>
                            <div class="invalid-feedback">Informe um email válido.</div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputPhone">Telefone</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Seu telefone" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{4,5}$" required>
                            <div class="valid-feedback">Parece ok!</div>                                                                
                            <div class="invalid-feedback">Informe um telefone válido.</div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Rua, número, bairro e cidade" required>
                        <div class="valid-feedback">Parece ok!</div>
                        <div class="invalid-feedback">Informe um endereço válido.</div>
                    </div>

                    <div class="form-group">
                        <label for="selectSubject">Motivo do Contato</label>
                        <select class="form-control" id="selectSubject" required>
                            <option value="">Selecione</option>
                            <option value="Orçamento">Orçamento</option>
                            <option value="Dúvida">Dúvida</option>
                            <option value="Fornecedores">Fornecedores</option>
                            <option value="Outros">Outros</option>
                        </select>
                        <div class="valid-feedback">Parece ok!</div>
                        <div class="invalid-feedback">Selecione o motivo de seu contato.</div>
                    </div>

                    <div class="form-group">
                        <label for="inputMessage">Mensagem</label>
                        <textarea class="form-control" id="inputMessage" rows="3" required></textarea>
                        <div class="valid-feedback">Parece ok!</div>
                        <div class="invalid-feedback">Digite a mensagem que deseja nos enviar.</div>
                    </div>

                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>