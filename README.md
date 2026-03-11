# 💀 Skeleton Quiz

Um site **divertido e interativo** que descobre qual é o seu perfil como desenvolvedor através de um quiz com 12 perguntas!

---

## O que é isso?

O **Skeleton Quiz** é um site que faz um **teste rápido** para descobrir qual é o seu perfil como desenvolvedor. Você responde 12 perguntas, e no final o site mostra qual é o seu perfil profissional.

**Tem animações legais:**

- Caveirinhas voando na página inicial 💀
- Um título com caveirinhas girando em órbita
- Uma imagem que gira infinitamente no resultado final

---

## 🎯 Os 4 Perfis Possíveis

1. **🎨 Web Designer Criativo** - Você adora fazer interfaces bonitas
2. **💪 Arquiteto de Sistemas** - Você pensa em lógica e estrutura de código
3. **🚀 Full Stack Navigator** - Você faz tudo: front-end, back-end, tudo!
4. **🔐 Especialista em Infraestrutura** - Você adora DevOps e performance

---

## 📁 Como os Arquivos Estão Organizados

```
quiz_geek/
├── index.php              ← Página inicial
├── quiz.php               ← As 12 perguntas
├── resultado.php          ← O resultado final
├── dados.php              ← Guardadas as respostas
├── apagar_cache.php       ← Limpa e reseta dados
├── style.css              ← Todos os estilos e animações
└── README.md              ← Este arquivo
```

---

## 🚀 Como Usar?

### 1️⃣ Entrar no site

```
http://localhost/quiz_geek/
```

### 2️⃣ Na página inicial

- Você vê caveirinhas flutuando (decoração legal)
- Clica no botão **"Iniciar Quiz"**

### 3️⃣ No quiz

- Digita seu nome
- Responde as 12 perguntas uma por uma
- Use os botões **"← Anterior"** e **"Próximo →"** para navegar
- No topo vê **"X de 12"** para saber o progresso
- Clica em **"Descobrir meu Perfil"** quando terminar

### 4️⃣ No resultado

- Vê qual é o seu perfil
- Vê uma descrição legal sobre você
- Pode clicar em **"Jogar Novamente"** para refazer

### 5️⃣ Apagar dados (opcional)

- Clique no botão **"Apagar Cache"** que fica embaixo
- Aguarde 5 segundos
- Confirme a ação
- Todos seus dados são apagados

---

## ✨ O que tem de Legal?

### Animações Legais

- Caveirinhas flutuando na página inicial (5 delas em tempos diferentes)
- O título com 8 caveirinhas girando em volta dele
- A imagem do resultado gira infinitamente a cada 3 segundos
- O fundo muda de cor lentamente (gradiente animado)

### Funcionalidades Inteligentes

- Guardar seu nome para não precisar digitar novamente
- Contador de quantas vezes você fez o quiz
- Validação: não deixa avançar sem responder
- Botão para apagar tudo e começar do zero
- Funciona no celular, tablet e computador

### Código Bem Feito

- Sem complicações desnecessárias
- Fácil de entender
- Fácil de modificar
- Bem organizado

---

## 💻 Tecnologias Usadas

| Tecnologia  | O que faz                                           |
| ----------- | --------------------------------------------------- |
| **PHP**     | Processa as respostas e calcula qual é o seu perfil |
| **HTML5**   | Estrutura das páginas                               |
| **CSS3**    | Estilos bonitos e todas as animações                |
| **Cookies** | Guarda o seu nome e dados                           |

---

## 🎨 Personalizar Cores e Animations

### Mudar cores (no style.css)

Procure por `:root` e mude as cores:

```css
:root {
  --primary-color: #00bcd4; /* cor principal (azul claro) */
  --secondary-color: #ff4081; /* cor secundária (rosa) */
  --success-color: #4caf50; /* cor de sucesso (verde) */
  --bg-dark: #0f1419; /* cor de fundo escuro */
}
```

### Mudar velocidade das animações

**Caveirinhas flutuando mais rápido/lento:**

```css
.skull-1 {
  animation: float 8s ease-in-out infinite; /* mude 8s para 4s ou 12s */
}
```

**Imagem do resultado gira mais rápido/lento:**

```css
.profile-icon-image {
  animation: rotate 3s linear infinite; /* mude 3s para 2s ou 5s */
}
```

Quanto **menor o número**, mais **rápido**.
Quanto **maior o número**, mais **lento**.

---

## 🔧 Instalar e Rodar

### Pré-requisitos

- XAMPP ou similar instalado
- PHP ativado
- Um navegador de internet

### Passos

1. Baixe/Clone os arquivos
2. Coloque em `C:\xampp\htdocs\quiz_geek\`
3. Inicie o Apache (XAMPP)
4. Abra `http://localhost/quiz_geek/`
5. Pronto! 🎊

---

## ❓ Dúvidas Comuns

### "Caveirinhas não aparecem!"

- Verifique se o emoji 💀 está carregando
- Limpe o cache do navegador (Ctrl + Shift + Del)

### "As animações estão lentas!"

- Talvez seja seu computador
- Ou o navegador está com muitas abas abertas

### "Não consigo apagar o cache!"

- Clique no botão "Apagar Cache"
- Aguarde os 5 segundos completamente
- Clique no botão "Confirmar"

### "Meu nome não foi salvo!"

- Cookies podem estar desativados
- Tente em modo incógnito/privado do navegador

### "Resultado mostra perfil errado!"

- Verifique se respondeu todas as 12 perguntas
- Cada resposta é importante para calcular seu perfil

---

## 📊 Explicação das Animações

### 1. Caveirinhas Flutuando

```css
@keyframes float {
  0%,
  100% {
    transform: translateY(0px);
  } /* posição inicial */
  50% {
    transform: translateY(-40px);
  } /* sobe 40 pixels */
}
```

Elas simplesmente **sobem e descem** continuamente de forma suave.

### 2. Caveirinhas em Órbita

```css
@keyframes orbit-1 {
  0% {
    left: 50%;
    top: -30px;
  } /* começa em cima */
  25% {
    left: 120%;
    top: 25%;
  } /* vai para direita */
  50% {
    left: 50%;
    top: 110px;
  } /* vai para baixo */
  75% {
    left: -20%;
    top: 25%;
  } /* vai para esquerda */
  100% {
    left: 50%;
    top: -30px;
  } /* volta para cima */
}
```

Cada caveirinha segue um **caminho circular** ao redor do título.

### 3. Imagem Girando

```css
@keyframes rotate {
  from {
    transform: rotate(0deg);
  } /* 0 graus */
  to {
    transform: rotate(360deg);
  } /* 360 graus (volta completa) */
}
```

A imagem **gira 360° a cada 3 segundos**, infinitamente.

---

## 📝 Estrutura das Perguntas

Todas as 12 perguntas têm 4 opções, e cada opção corresponde a um perfil:

- ✓ Designer
- ✓ Backend (Arquiteto de Sistemas)
- ✓ Full Stack (Versátil)
- ✓ DevOps (Infraestrutura)

O site conta quantas vezes você escolhe cada opção e determina qual é sua maioria.

---

## 📞 Precisa de Ajuda?

Se algo não funcionar:

1. **Limpe o cache** - Ctrl + Shift + Del
2. **Apague cookies** - Use o botão "Apagar Cache"
3. **Reinicie o servidor** - Pare e inicie o Apache novamente
4. **Verifique se PHP está ativado** - Veja no painel do XAMPP
5. **Tente em outro navegador** - Às vezes o navegador é culpado

---

## 🏆 Versão

**Criado em:** 11 de Março de 2026

Divirta-se descobrindo o seu perfil! 🎉
