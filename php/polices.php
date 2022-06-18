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
                        Políticas
                    </div>
                    <div class="articlesLink">
                        <a href="#topico7">Políticas de privacidade</a><br>
                        <a href="#topico8">Termos de serviço</a>
                    </div>
                    <br>
                    <div class="articlesTitle">
                        <a href="/watchdog.php">Watchdog</a>
                    </div>
                    <!-- <div class="articlesLink">
                        <a href="#topico9">O que é Watchdog</a><br>
                        <a href="#topico10">Como fui banido</a><br>
                        <a href="#topico11">Perguntas frequentes</a>
                    </div> -->
                </div>
                <div class="topicos">

                    <!-- INÍCIO DOS TÓPICOS -->

                    <div class="topico">
                        <div class="topicoHeader">
                            <div class="topicoTitle" id="topico7">
                                Políticas de privacidade
                            </div>
                        </div>
                        <div class="topicoText">
                            <p>Ao acessar nosso site, nossas redes sociais e ou nosso servidor, nós coletamos informações dos usuários
                                para manter a ordem, prevenir bugs, otimizar nossos sistemas e entre outros. As informações coletadas são divididas em dois tipos, IPU E IDMU.
                            </p>

                            <p><b>Informações pessoais do usuário (IPU)</b><br>
                                E-mail, discord e nickname. Estas são as informações pessoais que são coletadas em nosso site, discord e servidor.
                                Coletamos as informações descritas anteriormente com a finalidade de identificação do usuário em casos de
                                descumprimento das regras, entrega de prêmios, entrega de produtos e para contato com o usuário, tanto online quanto offline.
                            </p>

                            <p id="idmusystem"><b>Informações de desenvolvimento e monitoramento do usuário (IDMU)</b><br>
                                As informações coletadas do tipo IDMU são utilizadas para determinar punições para jogadores que possuem mau comportamento,
                                para manter um ambiente amigável e respeitoso e para ampliar tanto nosso sistema Watchdog, quanto para melhorar o servidor.
                            </p>
                                
                            <p><b>O que coletamos com as IDMU?</b><br>
                                <ul>
                                    <li>Transações in-game, sejam elas com coins ou itens.</li>
                                    <li>Palavras enviadas em todos os chats, privados e públicos.</li>
                                    <li>Conteúdo de livros, banners e placas criadas in-game.</li>
                                    <li>Comandos executados.</li>
                                    <li>Quantidade de votos obtidos em um mesmo dia.</li>
                                    <li>Tipo e quantidade de blocos coletados e ou quebrados.</li>
                                    <li>Claims criadas e permissões compartilhadas.</li>
                                    <li>Quantidade de itens em baús, shulkers, mochilas e semelhantes.</li>
                                    <li>Alterações realizadas em blocos e itens.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="topico">
                        <div class="topicoHeader">
                            <div class="topicoTitle" id="topico8">
                                Termos de serviço
                            </div>
                        </div>
                        <div class="topicoText">
                            <p><b>Devoluções e Reembolsos</b><br>
                                Todas as compras realizadas no site seguem o modelo de doação e não podem ser devolvidas ou reembolsadas. <br>
                                Em disputas o jogador ficará impossibilitado de entrar no servidor e poderá retornar após a disputa
                                ser encerrada a favor do servidor.
                            </p>

                            <p><b>Alterações de preço/conteúdo</b><br>
                                O servidor reserva todo o direito de realizar alterações nos preços ou conteúdos dos produtos, 
                                sem aviso prévio, para própria proteção diante da oscilação do dólar, dos impostos e das taxas aplicadas.
                            </p>

                            <p><b>Uso dos produtos</b><br>
                                Os produtos adquiridos através do site são entregues de forma automática e diretamente para a conta informada.
                                O servidor não se responsabiliza por roubo ou perda dos produtos adquiridos.
                                Não realizamos a ativação ou transferência de produtos para outras contas.
                            </p>

                            <p><b>Atendimento ao usuário</b><br>
                                O atendimento é realizado através do <a href="/suport.php">SUPORTE</a> durante horário comercial. <i>(Segunda a Sexta, das 09:00 às 18:00)</i><br>
                                Você poderá ser atendido fora de horário comercial, no entanto fica a critério de nossa equipe atender ao chamado.
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