# 🐘 RotyPHP

**RotyPHP** é um micro-ORM e Query Builder minimalista, simples e eficiente, construído em PHP para facilitar as interações com bancos de dados SQLite usando PDO. O foco é fornecer uma sintaxe limpa e fluente, abstraindo queries SQL para operações rotineiras.

> **Aviso:** Este projeto ainda está em fase de desenvolvimento (ver *To-Do List*). Não é recomendado para uso em produção crítica no momento.

## Instalação

   ```bash
   git clone https://github.com/silvaleal/rotyphp.git
   cd rotyphp
   composer install
   ```

## Exemplos

Leia a nossa documentação em [/doc](/doc/).

## 📝 To-Do List (Tarefas Futuras)

- [x] Conexão com SQLite via PDO
- [x] Método `select()`
- [x] Método `insert()` e `create()`
- [x] Cláusula `where()` básica
- [x] Retorno com `get()` e `first()`
- [x] Implementar método `update()`
- [ ] Implementar método `delete()`
- [ ] Melhorar `where()` (suporte a `>`, `<`, `LIKE`, etc.)
- [ ] Implementar suporte a `limit()` e `orderBy()`
- [ ] Tratamento avançado de exceções
- [ ] Adicionar suporte ao Dotenv para configurações do DB

**Desenvolvido por:** [silvaleal](https://silvaleal.dev)
