<?php
// Incrementar contador de visitas
if(!isset($_COOKIE['visitas'])){
    setcookie("visitas", 1, time()+86400*30);
} else {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time()+86400*30);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skeleton Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Caveirinhas decorativas -->
    <div class="skull skull-1">💀</div>
    <div class="skull skull-2">💀</div>
    <div class="skull skull-3">💀</div>
    <div class="skull skull-4">💀</div>
    <div class="skull skull-5">💀</div>

    <div class="container">
        <div class="welcome-section">
            <div class="title-container">
                <span class="skull-orbit skull-orbit-1">💀</span>
                <span class="skull-orbit skull-orbit-2">💀</span>
                <span class="skull-orbit skull-orbit-3">💀</span>
                <span class="skull-orbit skull-orbit-4">💀</span>
                <h1 class="title">Skeleton Quiz</h1>
                <span class="skull-orbit skull-orbit-5">💀</span>
                <span class="skull-orbit skull-orbit-6">💀</span>
                <span class="skull-orbit skull-orbit-7">💀</span>
                <span class="skull-orbit skull-orbit-8">💀</span>
            </div>
            <h2 class="subtitle">Descubra seu Perfil de Desenvolvedor</h2>
            
            <div class="description">
                <p>Responda um rápido e objetivo quiz para descobrir qual é o seu verdadeiro perfil no mundo da tecnologia e desenvolvimento de software.</p>
                <p>Identifique se você é um designer criativo, um arquiteto de sistemas, um desenvolvedor full stack ou especialista em infraestrutura.</p>
            </div>

            <?php
            if(isset($_COOKIE['jogador'])){
                echo '<div class="welcome-message">';
                echo 'Bem-vindo de volta, <strong>' . htmlspecialchars($_COOKIE['jogador']) . '</strong>';
                echo '</div>';
            }
            ?>

            <div class="stats">
                <p>Total de participantes: <strong><?php echo isset($_COOKIE['visitas']) ? $_COOKIE['visitas'] : 1; ?></strong></p>
            </div>

            <a href="quiz.php" class="btn-start">Iniciar Quiz</a>

            <button onclick="abrirModalApagar()" class="btn-clear-cache">Apagar Cache</button>

            <!-- Modal de Confirmação -->
            <div id="modalApagar" class="modal" style="display: none;">
                <div class="modal-content">
                    <h2>Apagar Cache e Dados</h2>
                    <div class="modal-warning">
                        <p>Esta ação irá:</p>
                        <ul>
                            <li>✓ Permitir que você mude seu nome</li>
                            <li>✓ Resetar o contador de jogadas</li>
                            <li>✓ Apagar todos os dados salvos localmente</li>
                        </ul>
                    </div>
                    <p class="modal-info">Você poderá voltar a usar o quiz com um novo nome desde o início.</p>
                    <div class="modal-timer">
                        <p>Confirme em: <span id="timer">5</span>s</p>
                        <div class="timer-bar">
                            <div class="timer-fill" id="timerFill"></div>
                        </div>
                    </div>
                    <div class="modal-buttons">
                        <button onclick="fecharModalApagar()" class="btn-cancel">Cancelar</button>
                        <button id="btnConfirmar" onclick="confirmarApagar()" class="btn-confirm" disabled>Confirmar</button>
                    </div>
                </div>
            </div>

            <div class="features">
                <div class="feature">
                    <span class="icon">⚡</span>
                    <p>Rápido</p>
                </div>
                <div class="feature">
                    <span class="icon">✓</span>
                    <p>Preciso</p>
                </div>
                <div class="feature">
                    <span class="icon">★</span>
                    <p>Confiável</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let timerInterval = null;
        let tempoRestante = 5;

        function abrirModalApagar() {
            document.getElementById('modalApagar').style.display = 'flex';
            tempoRestante = 5;
            document.getElementById('timer').textContent = tempoRestante;
            document.getElementById('btnConfirmar').disabled = true;
            document.getElementById('timerFill').style.width = '100%';
            
            timerInterval = setInterval(function() {
                tempoRestante--;
                document.getElementById('timer').textContent = tempoRestante;
                
                // Animar a barra do timer
                const percentual = (tempoRestante / 5) * 100;
                document.getElementById('timerFill').style.width = percentual + '%';
                
                if(tempoRestante <= 0) {
                    clearInterval(timerInterval);
                    document.getElementById('btnConfirmar').disabled = false;
                    document.getElementById('timer').textContent = '0';
                }
            }, 1000);
        }

        function fecharModalApagar() {
            if(timerInterval) clearInterval(timerInterval);
            document.getElementById('modalApagar').style.display = 'none';
        }

        function confirmarApagar() {
            // Deletar cookies via JavaScript com múltiplas técnicas
            const cookiesToDelete = ['jogador', 'visitas', 'total_jogadas'];
            const paths = ['/', '/quiz_geek', '/quiz_geek/'];
            
            // Deletar via JavaScript
            cookiesToDelete.forEach(name => {
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/quiz_geek;";
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/quiz_geek/;";
            });
            
            // Chamar arquivo PHP para garantir que apague no servidor também
            fetch('apagar_cache.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                // Aguardar e recarregar sem cache
                setTimeout(() => {
                    // Limpar cache da página
                    if (window.location) {
                        // Adicionar timestamp para forçar recarregamento sem cache
                        window.location.href = window.location.pathname + '?' + new Date().getTime();
                    }
                }, 300);
            })
            .catch(error => {
                // Se houver erro, recarregar mesmo assim
                setTimeout(() => {
                    window.location.href = window.location.pathname + '?' + new Date().getTime();
                }, 300);
            });
        }

        // Fechar modal ao clicar fora
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('modalApagar');
            if(event.target === modal) {
                fecharModalApagar();
            }
        });
    </script>
</body>
</html>
