# � Skeleton Quiz

Um **quiz interativo e profissional** para descobrir seu perfil de desenvolvedor!

**Data**: 9 de Março de 2026

---

## 📋 Descrição

O **Skeleton Quiz** é uma aplicação web moderna que ajuda desenvolvedores a descobrirem qual é o seu verdadeiro perfil profissional através de um quiz divertido e intuitivo.

A aplicação identifica se você é:

- 🎨 **Web Designer Criativo** - Especialista em interfaces bonitas e responsivas
- 💪 **Arquiteto de Sistemas** - Especialista em lógica e algoritmos robustos
- 🚀 **Full Stack Navigator** - Versátil entre front-end e back-end
- 🔐 **Especialista em Infraestrutura** - Especialista em DevOps e performance

---

## ✨ Funcionalidades

### ✅ Quiz Interativo

- **12 perguntas** estrategicamente criadas para identificar seu perfil
- **Navegação por pergunta individual** - Uma pergunta por vez
- **Botões Anterior e Próximo** para navegar livremente
- **Barra de progresso visual** mostrando quantas perguntas foram respondidas
- **Validação obrigatória** - Não permite avançar sem responder
- **Contador dinâmico** - Exibe "X de 12" perguntas respondidas

### ✅ Interface Profissional e Atraente

- **Design minimalista e moderno** sem muitos emojis
- **Fundo animado** com gradiente em movimento contínuo (15 segundos)
- **Caveirinhas decorativas** flutuando na página inicial
- **Título com caveirinhas em órbita** - 8 caveirinhas orbitando ao redor do título
- **Responsivo** - Funciona em desktop, tablet e mobile
- **Animações suaves** CSS3 para melhor experiência do usuário

### ✅ Gerenciamento de Dados

- **Sistema de cookies** para salvar dados do jogador
- **Contador de jogadas** - Acompanha quantas vezes cada pessoa jogou
- **Mensagem de boas-vindas** ao retornar à página
- **Botão "Apagar Cache"** com modal de confirmação e timer de 5 segundos
- **Reset completo** de nome, jogadas e dados salvos

### ✅ Resultados Personalizados

- **Perfil detalhado** baseado nas respostas do quiz
- **Descrição personalizada** para cada um dos 4 perfis
- **Placar de pontos** mostrando distribuição de respostas (X/12)
- **Opção de jogar novamente** ou voltar à página inicial

---

## 🎯 Como Usar

### 1. **Acessar a Aplicação**

```
http://localhost/quiz_geek/
```

### 2. **Página Inicial**

- Leia a descrição do quiz
- Clique em **"Iniciar Quiz"** para começar
- Ou clique em **"Apagar Cache"** para resetar dados e trocar de nome

### 3. **Completar o Quiz**

- Digite seu nome na primeira tela (obrigatório)
- Responda as 12 perguntas uma por uma
- Use os botões **Anterior (←)** e **Próximo (→)** para navegar
- Acompanhe o progresso pela barra com contador "X de 12" no topo
- Clique em **"Descobrir meu Perfil"** ao final da 12ª pergunta

### 4. **Ver Resultado**

- Veja qual é seu perfil de desenvolvedor
- Leia a descrição personalizada
- Visualize a distribuição de respostas por perfil
- Opções para jogar novamente ou voltar ao início

---

## 🏗️ Estrutura do Projeto

```
quiz_geek/
├── index.php              # Página inicial com animações
├── quiz.php               # Página do quiz com 12 perguntas
├── resultado.php          # Página de resultado personalizado
├── apagar_cache.php       # Script PHP para deletar cookies
├── style.css              # Estilos completos com animações
├── README.md              # Este arquivo
└── img/                   # Pasta para imagens dos perfis
    ├── designer.svg
    ├── backend.svg
    ├── fullstack.svg
    └── devops.svg
```

---

## 🛠️ Tecnologias Utilizadas

### Backend

- **PHP 7.4+** - Processamento de formulários e cookies
- **Cookies HTTP** - Armazenamento de dados do cliente
- **Fetch API** - Requisições AJAX para apagar cache

### Frontend

- **HTML5** - Estrutura semântica
- **CSS3** - Estilos avançados com animações
- **JavaScript Vanilla** - Interatividade sem dependências externas

### Recursos Especiais

- **Animações CSS** - Flutuação de caveirinhas, órbita do título, pulsação
- **CSS Grid & Flexbox** - Layout responsivo
- **Modal customizado** com timer dinâmico
- **LocalStorage & Cookies** - Armazenamento de dados

---

## 📱 Responsividade

A aplicação é totalmente responsiva:

- ✅ **Desktop** (1024px+)
- ✅ **Tablet** (768px - 1023px)
- ✅ **Mobile** (até 767px)

---

## 🎨 Design e Animações

### Elementos Animados

1. **Gradient de Fundo**
   - Cores em movimento contínuo (15 segundos)
   - Transições suaves entre azul escuro e preto

2. **Caveirinhas Flutuantes**
   - 5 caveirinhas fixas na página inicial
   - Opacidade 10% para efeito discreto
   - Flutuam com velocidades diferentes

3. **Título com Órbita**
   - 8 caveirinhas orbitando o título "Skeleton Quiz"
   - Padrões circulares sincronizados
   - Título pulsa enquanto as caveirinhas orbitam

4. **Barra de Progresso**
   - Preenchimento dinâmico com gradiente
   - Contador "X de 12" atualizado em tempo real
   - Animação suave de progresso

5. **Modal de Confirmação**
   - Timer visual de 5 segundos
   - Barra de progresso dentro do modal
   - Botão "Confirmar" habilitado após timer

### Paleta de Cores

| Elemento | Cor       | Uso                            |
| -------- | --------- | ------------------------------ |
| Primária | `#00BCD4` | Títulos, botões, acentos       |
| Dark     | `#0097A7` | Efeitos hover, sombras         |
| Sucesso  | `#4CAF50` | Confirmações, botões positivos |
| Alerta   | `#F44336` | Botão apagar cache, avisos     |
| Fundo    | `#0F1419` | Fundo da página                |
| Texto    | `#E0E0E0` | Texto principal                |
| Muted    | `#9E9E9E` | Texto secundário               |

---

## 🔒 Segurança

### Proteções Implementadas

- ✅ **Sanitização de entrada** - `htmlspecialchars()` para nomes
- ✅ **Validação client-side** - Em tempo real
- ✅ **Validação server-side** - No PHP
- ✅ **Cookies seguros** - Expiração de 30 dias
- ✅ **Headers de Cache** - Previne cache indesejado
- ✅ **Método POST** - Para envio de dados sensíveis

### Dados Armazenados

- `jogador` - Nome do participante (30 dias)
- `visitas` - Contador de acessos à página inicial (30 dias)
- `total_jogadas` - Contador de quizzes completados (30 dias)

---

## 🚀 Funcionalidade: Apagar Cache

O botão **"Apagar Cache"** oferece:

### O que Faz?

1. **Abre Modal de Confirmação** com avisos claros
2. **Timer de 5 Segundos** antes de permitir confirmar
3. **Barra Visual Animada** mostrando tempo restante

### O que Deleta?

- ✓ Resets nome do jogador (permite trocar de nome)
- ✓ Reseta contador de jogadas
- ✓ Apaga todos os dados salvos localmente

### Como Funciona?

1. Clica no botão "Apagar Cache"
2. Modal aparece com explicação clara
3. Aguarda 5 segundos
4. Clica em "Confirmar"
5. JavaScript deleta no cliente
6. PHP deleta no servidor
7. Página recarrega sem cache

---

## 📊 Perfis de Desenvolvedor

### 🎨 Web Designer Criativo

**Pontuações esperadas**: Respostas com "designer"

- Foco em HTML, CSS, JavaScript
- Experiência visual e UX
- Criatividade e design inovador
- Principais ferramentas: Figma, VS Code
- Motiva-se com: Design bonito, interfaces intuitivas

**Descrição**: "_Você é um Criativo Web Designer! Sua paixão está em criar interfaces lindas, intuitivas e responsivas. Você entende que a experiência do usuário é fundamental e se dedica a transformar ideias em visualizações impressionantes._"

### 💪 Arquiteto de Sistemas

**Pontuações esperadas**: Respostas com "backend"

- Foco em algoritmos e estruturas de dados
- Lógica robusta e performance
- Sistemas escaláveis
- Principais linguagens: Python, Java, NodeJS
- Motiva-se com: Sistemas robustos, desafios lógicos

**Descrição**: "_Você é um Arquiteto de Sistemas! Sua mente brilha na lógica, algoritmos e estrutura de dados. Você adora criar APIs robustas, gerenciar bancos de dados e construir a base sólida que as aplicações precisam._"

### 🚀 Full Stack Navigator

**Pontuações esperadas**: Respostas com "fullstack"

- Versátil entre front-end e back-end
- Projeto completo do início ao fim
- Visão holística da aplicação
- Principais ferramentas: GitHub, Docker, VS Code
- Motiva-se com: Fazer tudo funcionar, versatilidade

**Descrição**: "_Você é um Full Stack Navigator! Você é aquele desenvolvedor versátil que consegue transitar entre front-end e back-end com facilidade. Você é capaz de entender a visão completa do projeto e contribuir em qualquer camada._"

### 🔐 Especialista em Infraestrutura

**Pontuações esperadas**: Respostas com "devops"

- Performance e segurança
- DevOps e CI/CD
- Containerização e orquestração
- Principais ferramentas: Docker, Kubernetes, Jenkins
- Motiva-se com: Automação, performance, segurança

**Descrição**: "_Você é um Especialista em Infraestrutura! Você é obsecado com performance, segurança e escalabilidade. Docker, Kubernetes, CI/CD e monitoramento são suas ferramentas favoritas._"

---

## 💾 Instalação

### Pré-requisitos

- **XAMPP**, **WAMP**, **Laragon** ou outro servidor PHP local
- **PHP 7.4** ou superior
- **Navegador moderno** (Chrome, Firefox, Edge, Safari)

### Passo a Passo

1. Baixe os arquivos do projeto
2. Coloque em `C:\xampp\htdocs\quiz_geek\` (ou equivalente)
3. Inicie o servidor local (Apache)
4. No navegador, acesse `http://localhost/quiz_geek/`
5. Pronto! 🎉

---

## 🐛 Resolução de Problemas

### Problema: Cookies não estão sendo salvos

**Solução:**

- Verifique se o navegador aceita cookies
- Limpe o cache e cookies do navegador
- Tente em modo incógnito/privado

### Problema: "Apagar Cache" não funciona

**Solução:**

- Clique no botão e aguarde os 5 segundos completamente
- Após confirmar, aguarde a página recarregar (pode levar alguns segundos)
- Limpe cache do navegador também (Ctrl+Shift+Del)

### Problema: Não consegue preencher o nome

**Solução:**

- Certifique-se de digitar algo no campo
- Use apenas letras, números e espaços
- Não deixe em branco

### Problema: Não consegue avançar no quiz

**Solução:**

- Verifique se respondeu a pergunta atual
- Clique em uma das opções de resposta
- Depois clique no botão "Próximo →"

### Problema: Contador de páginas não funciona

**Solução:**

- O contador atualiza quando você responde uma pergunta
- Certifique-se de marcar a resposta antes de avançar
- Se persistir, limpe cache do navegador

---

## 📝 Detalhes Técnicos

### Fluxo de Dados

```
Usuário Acessa          Modal Apagar      Completa Quiz
   │                         │                  │
   ├─ Índice (PHP)           ├─ apagar_cache.php ├─ Valida todas respostas
   │                         │                   │
   └─ Cookies Verificados    ├─ Deleta Cookies  └─ Segue para resultado.php
                             │
                             └─ Página Recarrega

resultado.php
   │
   ├─ Processa 12 respostas
   ├─ Soma pontos por perfil
   ├─ Define perfil com maior pontuação
   │
   └─ Exibe resultado personalizado
```

### Cookies Utilizados

| Cookie          | Propósito                      | Duração | Valor Inicial |
| --------------- | ------------------------------ | ------- | ------------- |
| `jogador`       | Armazena nome do participante  | 30 dias | Nome digitado |
| `visitas`       | Conta acessos à página inicial | 30 dias | Incrementa +1 |
| `total_jogadas` | Conta quizzes completados      | 30 dias | Incrementa +1 |

### Lógica de Perfis

A contagem é simples:

- Cada pergunta tem 4 opções: designer, backend, fullstack, devops
- A resposta escolhida incrementa +1 no respectivo perfil
- Ao final, o perfil com maior pontuação é o resultado
- Em caso de empate, a verificação segue a ordem: designer > backend > fullstack > devops

---

## 🎓 Aprendizados Demonstrados

Este projeto prática e demonstra:

- ✅ Programação backend com PHP
- ✅ Manipulação avançada de cookies
- ✅ Validação de formulários (client e server)
- ✅ HTML5 semântico
- ✅ CSS3 avançado com animações complexas
- ✅ JavaScript vanilla sem frameworks
- ✅ Design responsivo e mobile-first
- ✅ UX/UI profissional
- ✅ Boas práticas de segurança
- ✅ Organização e estrutura de código
- ✅ Fetch API para requisições AJAX
- ✅ Modal customizado com timer

---

## 🚀 Possíveis Melhorias Futuras

- [ ] Banco de dados (MySQL) para histórico permanente
- [ ] Ranking de perfis mais comuns
- [ ] Compartilhamento de resultados (WhatsApp, Twitter)
- [ ] Modo dark/light automático
- [ ] Múltiplos idiomas
- [ ] Certificado digital em PDF
- [ ] Animações 3D com Three.js
- [ ] Integração com LinkedIn
- [ ] Gráficos de estatísticas
- [ ] Admin dashboard

---

## 📄 Licença

Este projeto é de código aberto e pode ser usado livremente para fins educacionais e pessoais.

---

## 👨‍💻 Desenvolvedor

**Projeto**: Skeleton Quiz  
**Data**: 9 de Março de 2026  
**Tipo**: Projeto educacional de Web Development  
**Status**: ✅ Concluído e funcional

---

## 💬 Observações Finais

O **Skeleton Quiz** foi desenvolvido com foco em:

- **Profissionalismo** - Design limpo e moderno
- **Funcionalidade** - Todas as features funcionando corretamente
- **Performance** - Carregamento rápido e animações suaves
- **Usabilidade** - Interface intuitiva e fácil de usar
- **Responsividade** - Funciona em qualquer dispositivo

**Aproveite o Skeleton Quiz!** 💀✨
