# 💻 Desafio PHP — Versão 1.1

Este projeto é um sistema bancário simples feito em PHP, com interação via terminal. A versão 1.1 traz melhorias na autenticação, separação de funções e organização em pastas.

---

📁 V1.1 DESAFIO PHP/
├── app/
│   └── 1.1-desafio.php       → Código principal
├── src/
│   ├── funcoes/              → Funções reutilizáveis
│   └── users.txt             → Base de dados de usuários

---

## 🚀 Funcionalidades

- ✅ Criar conta com nome e senha
- ✅ Login com verificação via arquivo
- ✅ Menu bancário com:
  - Consulta de saldo
  - Saque com verificação
  - Depósito
  - Encerramento da sessão

---

## ▶️ Como executar

1. Certifique-se de ter PHP instalado
2. No terminal, navegue até a pasta `app`
3. Execute o script principal:

php 1.1-desafio.php

---

## 🧠 Lógica
- Os dados são salvos em users.txt
- O sistema verifica nome e senha antes de liberar acesso
- O saldo é inicializado em R$1000 e manipulado durante a sessão
- As funções estão separadas em src/funcoes/ para melhor organização

---

## 📌 Observações
Este projeto é parte de um desafio pessoal para praticar lógica de programação e manipulação de arquivos em PHP. Futuras versões podem incluir:
- Saldo por usuário
- Histórico de transações
- Interface web com HTML e PHP

---

## 🙋‍♂️ Autor

**André Luiz Blazius**  
Estudante de desenvolvimento Backend | Auxiliar de PCP  
📧 al2981085@gmail.com  
📍 Ibirama, SC – Brasil

## 🤝 Colaboração

Este projeto foi desenvolvido por **André Luiz Blazius** com apoio do Microsoft Copilot, que auxiliou na estruturação da lógica, organização do código e documentação.
