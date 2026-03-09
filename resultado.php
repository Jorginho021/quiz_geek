<?php
// Receber dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];

// Criar contadores de perfil
$designer = 0;
$backend = 0;
$fullstack = 0;
$devops = 0;

// Somar pontos de todas as 12 perguntas
foreach(['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12'] as $pergunta) {
    if($$pergunta == "designer") $designer++;
    if($$pergunta == "backend") $backend++;
    if($$pergunta == "fullstack") $fullstack++;
    if($$pergunta == "devops") $devops++;
}

// Descobrir o perfil
if($designer > $backend && $designer > $fullstack && $designer > $devops){
    $perfil = "Criativo Web Designer";
    $emoji = "🎨";
    $icone = "designer";
}
elseif($backend > $designer && $backend > $fullstack && $backend > $devops){
    $perfil = "Arquiteto de Sistemas";
    $emoji = "💪";
    $icone = "backend";
}
elseif($fullstack > $designer && $fullstack > $backend && $fullstack > $devops){
    $perfil = "Full Stack Navigator";
    $emoji = "🚀";
    $icone = "fullstack";
}
else{
    $perfil = "Especialista em Infraestrutura";
    $emoji = "🔐";
    $icone = "devops";
}

// Descrições dos perfis
$descricoes = array(
    "designer" => "Você é um Criativo Web Designer! Sua paixão está em criar interfaces lindas, intuitivas e responsivas. Você entende que a experiência do usuário é fundamental e se dedica a transformar ideias em visualizações impressionantes. Com seus conhecimentos em HTML, CSS e JavaScript, você cria websites que não apenas funcionam, mas que também são um prazer de usar. Parabéns por sua criatividade!",
    
    "backend" => "Você é um Arquiteto de Sistemas! Sua mente brilha na lógica, algoritmos e estrutura de dados. Você adora criar APIs robustas, gerenciar bancos de dados e construir a base sólida que as aplicações precisam. Enquanto outros veem o visual, você vê a arquitetura perfeita por trás. Com sua expertise, você cria sistemas que escalam e performam incrivelmente bem!",
    
    "fullstack" => "Você é um Full Stack Navigator! Você é aquele desenvolvedor versátil que consegue transitar entre front-end e back-end com facilidade. Você é capaz de entender a visão completa do projeto e contribuir em qualquer camada. Com essa versatilidade, você é raro e extremamente valioso para qualquer equipe. Continue explorando e dominando cada vez mais!",
    
    "devops" => "Você é um Especialista em Infraestrutura! Você é obsecado com performance, segurança e escalabilidade. Docker, Kubernetes, CI/CD e monitoramento são suas ferramentas favoritas. Enquanto outros constroem a aplicação, você garante que ela rode perfeitamente em produção. Sua expertise em DevOps torna você indispensável em qualquer operação moderna!"
);

$descricao = $descricoes[$icone];

// Salvar nome em Cookie por 30 dias
setcookie("jogador", $nome, time()+3600*24*30);

// Contar quantas vezes jogou
if(!isset($_COOKIE['total_jogadas'])){
    setcookie("total_jogadas", 1, time()+3600*24*30);
} else {
    $total = $_COOKIE['total_jogadas'] + 1;
    setcookie("total_jogadas", $total, time()+3600*24*30);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skeleton Quiz - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="result-section">
            
            <div class="result-header">
                <h1>Resultado do Skeleton Quiz</h1>
            </div>

            <div class="player-info">
                <p class="player-name">Olá, <strong><?php echo $nome; ?></strong>!</p>
            </div>

            <div class="profile-card <?php echo $icone; ?>">
                <div class="profile-image">
                    <img src="img/<?php echo $icone; ?>.svg" alt="<?php echo $perfil; ?>" class="profile-icon-image">
                </div>
                <div class="profile-icon"><?php echo $emoji; ?></div>
                
                <h2 class="profile-title"><?php echo $perfil; ?></h2>
                
                <div class="profile-score">
                    <p>Pontuação por perfil:</p>
                    <ul>
                        <li>🎨 Designer: <strong><?php echo $designer; ?>/12</strong></li>
                        <li>💪 Backend: <strong><?php echo $backend; ?>/12</strong></li>
                        <li>🚀 Full Stack: <strong><?php echo $fullstack; ?>/12</strong></li>
                        <li>🔐 DevOps: <strong><?php echo $devops; ?>/12</strong></li>
                    </ul>
                </div>

                <div class="profile-description">
                    <h3>Sobre você:</h3>
                    <p><?php echo $descricao; ?></p>
                </div>

                <div class="next-steps">
                    <h3>🎯 Próximos Passos:</h3>
                    <p>Agora que você descobriu seu perfil, considere aprofundar seus conhecimentos nesta área. Continue aprendendo, praticando e se dedicando à sua paixão!</p>
                </div>
            </div>

            <div class="action-buttons">
                <a href="quiz.php" class="btn-again">🔄 Fazer Quiz de Novo</a>
                <a href="index.php" class="btn-home">🏠 Voltar ao Início</a>
            </div>

            <div class="result-footer">
                <p class="small-text">💾 Seu nome foi salvo em um cookie. Na próxima vez, aparecerá uma mensagem de boas-vindas!</p>
            </div>

        </div>
    </div>
</body>
</html>
