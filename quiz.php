<?php

session_start();

$perguntas = [
    [
        'numero' => 1,
        'titulo' => 'Qual linguagem de programação você mais se identifica?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 HTML, CSS, JavaScript'],
            ['valor' => 'backend', 'label' => '⚙️ Python, Java, NodeJS'],
            ['valor' => 'fullstack', 'label' => '🚀 Gosto de tudo'],
            ['valor' => 'devops', 'label' => '🔐 Docker, Kubernetes']
        ]
    ],
    [
        'numero' => 2,
        'titulo' => 'Como você resolve problemas?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Experiência visual'],
            ['valor' => 'backend', 'label' => '🧠 Lógica e algoritmos'],
            ['valor' => 'fullstack', 'label' => '⚙️ Analiso front e back'],
            ['valor' => 'devops', 'label' => '🛡️ Segurança e performance']
        ]
    ],
    [
        'numero' => 3,
        'titulo' => 'O que mais te motiva no desenvolvimento?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '✨ Criar design bonito'],
            ['valor' => 'backend', 'label' => '⚡ Sistemas robustos'],
            ['valor' => 'fullstack', 'label' => '🎯 Projeto completo'],
            ['valor' => 'devops', 'label' => '🚀 Automatizar tudo']
        ]
    ],
    [
        'numero' => 4,
        'titulo' => 'Seu ambiente ideal?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Ferramentas de design'],
            ['valor' => 'backend', 'label' => '💻 Código e banco de dados'],
            ['valor' => 'fullstack', 'label' => '🔀 Um pouco de tudo'],
            ['valor' => 'devops', 'label' => '⚙️ Servidores e monitoramento']
        ]
    ],
    [
        'numero' => 5,
        'titulo' => 'Como você aprende tecnologia?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '📚 Tutoriais'],
            ['valor' => 'backend', 'label' => '🧪 Projetos e prática'],
            ['valor' => 'fullstack', 'label' => '📖 Documentação'],
            ['valor' => 'devops', 'label' => '🔧 Testando em servidores']
        ]
    ],
    [
        'numero' => 6,
        'titulo' => 'O que você gosta de criar?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Interfaces bonitas'],
            ['valor' => 'backend', 'label' => '⚙️ Sistemas complexos'],
            ['valor' => 'fullstack', 'label' => '🚀 Aplicações completas'],
            ['valor' => 'devops', 'label' => '🛠️ Infraestrutura']
        ]
    ],
    [
        'numero' => 7,
        'titulo' => 'Quando aparece um erro?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Ajusto o visual'],
            ['valor' => 'backend', 'label' => '🔎 Procuro o bug'],
            ['valor' => 'fullstack', 'label' => '⚙️ Testo tudo'],
            ['valor' => 'devops', 'label' => '🛡️ Analiso logs']
        ]
    ],
    [
        'numero' => 8,
        'titulo' => 'Qual projeto faria primeiro?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Um site bonito'],
            ['valor' => 'backend', 'label' => '⚙️ Uma API'],
            ['valor' => 'fullstack', 'label' => '🚀 Sistema completo'],
            ['valor' => 'devops', 'label' => '🔐 Sistema seguro']
        ]
    ],
    [
        'numero' => 9,
        'titulo' => 'O que te empolga na tecnologia?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Criatividade'],
            ['valor' => 'backend', 'label' => '🧠 Lógica'],
            ['valor' => 'fullstack', 'label' => '🔀 Fazer tudo funcionar'],
            ['valor' => 'devops', 'label' => '🛡️ Segurança']
        ]
    ],
    [
        'numero' => 10,
        'titulo' => 'Qual ferramenta você mais gosta?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Figma'],
            ['valor' => 'backend', 'label' => '💻 VS Code'],
            ['valor' => 'fullstack', 'label' => '🚀 GitHub'],
            ['valor' => 'devops', 'label' => '🔐 Docker']
        ]
    ],
    [
        'numero' => 11,
        'titulo' => 'O que prefere fazer?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Criar design'],
            ['valor' => 'backend', 'label' => '⚙️ Programar lógica'],
            ['valor' => 'fullstack', 'label' => '🔀 Fazer tudo'],
            ['valor' => 'devops', 'label' => '🛡️ Infraestrutura']
        ]
    ],
    [
        'numero' => 12,
        'titulo' => 'Qual seria seu trabalho ideal?',
        'opcoes' => [
            ['valor' => 'designer', 'label' => '🎨 Front-end'],
            ['valor' => 'backend', 'label' => '⚙️ Back-end'],
            ['valor' => 'fullstack', 'label' => '🚀 Full Stack'],
            ['valor' => 'devops', 'label' => '🔐 DevOps']
        ]
    ]
];

$totalPerguntas = count($perguntas);
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

<div class="container">
<div class="quiz-section">

<h1>Skeleton Quiz</h1>

<!-- Barra de Progresso -->
<div class="progress-container">
    <div class="progress-info">
        <span id="perguntaAtual">1</span> de <span><?php echo $totalPerguntas; ?></span>
    </div>
    <div class="progress-bar">
        <div class="progress-fill" id="progressFill"></div>
    </div>
</div>

<form method="POST" action="resultado.php" id="quizForm" class="quiz-form">

<!-- Nome do usuário (primeira tela) -->
<div id="nomePage" class="quiz-page">
    <div class="form-group">
        <label class="form-label">👤 Qual é o seu nome?</label>
        <input type="text" name="nome" class="form-input" placeholder="Digite seu nome..." required id="inputNome">
    </div>
    <div class="button-group">
        <button type="button" class="btn-next" onclick="validarNomeAvancado()">Próximo →</button>
    </div>
</div>

<!-- Perguntas -->
<?php foreach($perguntas as $pergunta): ?>
<div id="pergunta<?php echo $pergunta['numero']; ?>" class="quiz-page" style="display:none;">
    <div class="form-group">
        <label class="form-label"><?php echo $pergunta['titulo']; ?></label>
        <?php foreach($pergunta['opcoes'] as $opcao): ?>
            <label class="radio-label">
                <input type="radio" name="p<?php echo $pergunta['numero']; ?>" value="<?php echo $opcao['valor']; ?>">
                <span><?php echo $opcao['label']; ?></span>
            </label>
        <?php endforeach; ?>
    </div>
    
    <div class="button-group">
        <button type="button" class="btn-prev" onclick="mostrarPergunta(<?php echo $pergunta['numero'] - 1; ?>)">← Anterior</button>
        <?php if($pergunta['numero'] < $totalPerguntas): ?>
            <button type="button" class="btn-next" onclick="mostrarPergunta(<?php echo $pergunta['numero'] + 1; ?>)">Próximo →</button>
        <?php else: ?>
            <button type="submit" class="btn-submit">🎯 Descobrir meu Perfil!</button>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>

</form>

<a href="index.php" class="btn-back">← Voltar</a>

</div>
</div>

<script>
let perguntaAtualizada = 0;

function validarNomeAvancado() {
    const inputNome = document.getElementById('inputNome');
    if(inputNome.value.trim() === '') {
        return;
    }
    mostrarPergunta(1);
}

function mostrarPergunta(numeroPergunta) {
    // Esconde todas as páginas
    const paginas = document.querySelectorAll('.quiz-page');
    paginas.forEach(pagina => {
        pagina.style.display = 'none';
    });
    
    // Valida se está tentando avançar de uma pergunta sem responder
    if(numeroPergunta > 0) {
        const numeroPerguntaAnterior = numeroPergunta - 1;
        if(numeroPerguntaAnterior > 0 && numeroPerguntaAnterior <= <?php echo $totalPerguntas; ?>) {
            const radiosPerguntaAnterior = document.querySelectorAll('input[name="p' + numeroPerguntaAnterior + '"]:checked');
            if(radiosPerguntaAnterior.length === 0) {
                // Volta para a pergunta anterior
                document.getElementById('pergunta' + numeroPerguntaAnterior).style.display = 'block';
                perguntaAtualizada = numeroPerguntaAnterior;
                return;
            }
        }
    }
    
    // Mostra a página correta
    if(numeroPergunta === 0) {
        document.getElementById('nomePage').style.display = 'block';
    } else if(numeroPergunta >= 1 && numeroPergunta <= <?php echo $totalPerguntas; ?>) {
        document.getElementById('pergunta' + numeroPergunta).style.display = 'block';
    }
    
    perguntaAtualizada = numeroPergunta;
    atualizarProgresso();
}

function atualizarProgresso() {
    const perguntasRespondidas = verificarRespostasRespondidas();
    const percentual = (perguntasRespondidas / <?php echo $totalPerguntas; ?>) * 100;
    
    document.getElementById('progressFill').style.width = percentual + '%';
    document.getElementById('perguntaAtual').textContent = perguntasRespondidas;
}

function verificarRespostasRespondidas() {
    let total = 0;
    for(let i = 1; i <= <?php echo $totalPerguntas; ?>; i++) {
        const radios = document.querySelectorAll('input[name="p' + i + '"]:checked');
        if(radios.length > 0) {
            total++;
        }
    }
    return total;
}

// Valida o envio do formulário
document.getElementById('quizForm').addEventListener('submit', function(e) {
    let todasRespondidas = true;
    let perguntaNaoRespondida = null;
    
    for(let i = 1; i <= <?php echo $totalPerguntas; ?>; i++) {
        const radios = document.querySelectorAll('input[name="p' + i + '"]:checked');
        if(radios.length === 0) {
            todasRespondidas = false;
            perguntaNaoRespondida = i;
            break;
        }
    }
    
    if(!todasRespondidas) {
        e.preventDefault();
        // Mostrar a pergunta que não foi respondida
        mostrarPergunta(perguntaNaoRespondida);
    }
});

// Mostra a primeira página ao carregar
window.addEventListener('load', function() {
    mostrarPergunta(0);
});
</script>

</body>
</html>