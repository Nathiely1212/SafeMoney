# SafeMoney — Um novo jeito de investir

## Objetivo

Esta versão transforma o protótipo gerado pelo Stitch em uma base PHP organizada, reutilizável e preparada para evolução.

### Principais decisões

- PHP é a base das páginas.
- Header e Footer são componentes compartilhados.
- Cada página possui HTML/PHP próprio e CSS específico.
- O CSS global concentra tokens de design, reset, tipografia, layout e componentes compartilhados.
- O CSS de página contém somente regras específicas da página.
- JavaScript compartilhado controla apenas a navegação mobile.
- Materiais possuem páginas individuais reais em `pages/materiais/`.
- O InvestmentTracker possui uma página inicial funcional como placeholder enquanto a integração de dados é desenvolvida.
- Não foi utilizado Tailwind no código final.
- Os caminhos são tratados por `$basePath` para que componentes funcionem tanto em páginas de primeiro nível quanto nas páginas aninhadas de materiais.

## Estrutura

```text
SafeMoney/
├── index.php
├── components/
│   ├── header.php
│   └── footer.php
├── pages/
│   ├── index.php
│   ├── sobre.php
│   ├── objetivos.php
│   ├── materiais.php
│   ├── tracker.php
│   └── materiais/
│       ├── o-que-e-investir.php
│       ├── por-que-investir.php
│       ├── historia-dos-investimentos.php
│       ├── tipos-de-investimentos.php
│       ├── renda-fixa.php
│       ├── renda-variavel.php
│       ├── criptomoedas.php
│       ├── riscos-dos-investimentos.php
│       ├── seguranca-ao-investir.php
│       ├── como-comecar-a-investir.php
│       ├── como-analisar-um-investimento.php
│       ├── como-utilizar-o-investment-tracker.php
│       └── glossario-financeiro.php
├── css/
│   ├── global.css
│   ├── home.css
│   ├── sobre.css
│   ├── objetivos.css
│   ├── materiais.css
│   ├── material.css
│   └── tracker.css
├── js/
│   └── global.js
└── assets/
    └── images/
```

## Como executar

O projeto precisa de um servidor PHP. A partir da pasta raiz:

```bash
php -S localhost:8000
```

Depois abra:

```text
http://localhost:8000/
```

## Próximos passos recomendados

1. Substituir imagens externas por arquivos locais em `assets/images/`.
2. Desenvolver os conteúdos restantes dos materiais.
3. Implementar o InvestmentTracker em módulos separados.
4. Integrar a API de ativos.
5. Adicionar testes e validações para o backend quando a lógica PHP for introduzida.
