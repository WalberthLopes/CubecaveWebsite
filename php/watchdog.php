<?php
    include_once 'header.php';
?>

        <!-- INÍCIO DO BLOCO EDITÁVEL -->

        <div class="bodyContainer">
            <div class="rulesContainer">
                <div class="articles">
                    <div class="articlesTitle">
                        <a href="/rules.php">Regras</a>
                    </div>
                    <!-- <div class="articlesLink">
                        <a href="#topico1">Comportamento esperado</a><br>
                        <a href="#topico2">Denunciando jogadores</a><br>
                        <a href="#topico3">Denunciando bugs</a><br>
                        <a href="#topico4">Segurança e privacidade</a><br>
                        <a href="#topico5">Comportamento inadequado</a><br>
                        <a href="#topico6">Consequências</a>
                    </div> -->
                    <br>
                    <div class="articlesTitle">
                        <a href="/politicas.php">Políticas</a>
                    </div>
                    <!-- <div class="articlesLink">
                        <a href="#topico7">Políticas de privacidade</a><br>
                        <a href="#topico8">Termos de serviço</a>
                    </div> -->
                    <br>
                    <div class="articlesTitle">
                        Watchdog
                    </div>
                    <div class="articlesLink">
                        <a href="#topico9">O que é Watchdog</a><br>
                        <a href="#topico10">Como fui banido</a><br>
                        <a href="#topico11">Perguntas frequentes</a>
                    </div>
                </div>
                <div class="topicos">

                    <!-- INÍCIO DOS TÓPICOS -->

                    <div class="topico">
                        <div class="topicoHeader">
                            <div class="topicoTitle" id="topico9">
                                O que é Watchdog
                            </div>
                        </div>
                        <div class="topicoText">
                            <p>Watchdog é o nosso sitema de vigilância contra quebradores de regras. Ele é desenvolvido com base nos
                                dados coletados dos jogadores através do sistema <a href="/polices.php#idmusystem">IDMU</a>, que por
                                sua vez são utilizados como parâmetros para punir jogadores de forma automática. <br>
                                Não podemos divulgar como ele funciona exatamente, mas garantimos que é um sistema bem legal e efetivo.
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="topico">
                        <div class="topicoHeader">
                            <div class="topicoTitle" id="topico10">
                                Como fui banido
                            </div>
                        </div>
                        <div class="topicoText">
                            <p>Se você recebeu um banimento como punição, provavelmente o Watchdog identificou que seu histórico de
                                comportamento possui muitas punições ou então você quebrou alguma regra muito grave. <br>
                                Caso acredite que seu banimento foi injusto, você pode abrir um chamado acessando <a href="/suport.php">SUPORTE</a>
                                e então descrevendo com detalhes o ocorrido.
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="topico">
                        <div class="topicoHeader">
                            <div class="topicoTitle" id="topico11">
                                Perguntas frequentes
                            </div>
                        </div>
                        <div class="topicoText">
                            <p>O Watchdog pode estar errado?
                                <ul>
                                    <i>Sim, o sistema é desenvolvido com base em muitos dados e diversos testes antes
                                        de ser levado para produção, no entanto com o lançamento de novos updates, juntamente
                                        com novas atualizações dos clients, algumas configurações podem ficar desatualizadas
                                        e resultar em punições indevidas. Por este motivo, caso você acredite que sua punição
                                        tenha sido um erro, você deve abrir uma apelação para a sua punição.
                                    </i>
                                </ul>
                            </p>
                            <p>Quanto tempo leva para analisarem meu caso?
                                <ul>
                                    <i>Nossa equipe trabalha da melhor forma possível para analisar todos os casos em até 24 horas após
                                        terem sido abertos pelo usuário através da aba de suporte, porém imprevistos podem ocorrer e
                                        seu caso possa levar até 48 horas para ser analisado.
                                    </i>
                                </ul>
                            </p>
                            <p>Minha apelação foi negada, e agora?
                                <ul>
                                    <i>Caso você tenha sofrido uma punição e sua apelação tenha sido negada pela administração, você ainda pode
                                        ter sua punição removida em até 24 horas seguindo os passos informados em <a href="/unban.php">UNBAN</a>.
                                    </i>
                                </ul>
                            </p>
                        </div>
                    </div>
                    
                    <!-- FIM DOS TÓPICOS -->
                    
                </div>
            </div>
        </div>
        
        <!-- FIM DO BLOCO EDITÁVEL -->
        
        <?php
            include_once 'footer.php';
        ?>
    </div>
    <script src="/assets/javascript/main.js"></script>
</body>
</html>