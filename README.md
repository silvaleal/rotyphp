# 🐘 RotyPHP



**RotyPHP** é um micro-ORM e Query Builder minimalista, simples e eficiente, construído em PHP para facilitar as interações com bancos de dados SQLite usando PDO. O foco é fornecer uma sintaxe limpa e fluente, abstraindo queries SQL para operações rotineiras.

> ⚠️ **Aviso:** Este projeto ainda está em fase de desenvolvimento (ver *To-Do List*). Não é recomendado para uso em produção crítica no momento.

---

## 🚀 Instalação

1. Clone o repositório para o seu ambiente:
   ```bash
   git clone https://github.com/silvaleal/rotyphp.git
   cd rotyphp
   ```

2. Gere o autoload do Composer para carregar as classes via PSR-4:
   ```bash
   composer dump-autoload
   ```

3. Pronto! O banco de dados SQLite (`database.db`) será utilizado ou gerado automaticamente na raiz do projeto na primeira interação.

---

## 💡 Exemplos

Leia a nossa documentação em [/doc](/doc/).

---

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

---

**Desenvolvido por:** [silvaleal](https://silvaleal.dev)
