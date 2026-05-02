# RotyPHP

Um micro-ORM e Query Builder simples construído em PHP com PDO para banco de dados SQLite.

## Documentação

A documentação completa do projeto e exemplos de uso podem ser encontrados na pasta [doc/orm.md](doc/orm.md).

## To-Do List (Tarefas Futuras)

Abaixo está uma lista de melhorias sugeridas e próximos passos para o projeto:

### Banco de Dados e Query Builder
- [x] Conexão com SQLite via PDO
- [x] Implementar método `select()`
- [x] Implementar método `insert()`
- [x] Implementar cláusula `where()` (igualdade)
- [x] Implementar método `get()` para buscar múltiplos resultados
- [x] Implementar método `first()` para buscar o primeiro resultado
- [ ] Implementar método `update()` para atualizar registros
- [ ] Implementar método `delete()` para remover registros
- [ ] Melhorar o método `where()` para suportar outros operadores (>, <, LIKE, IN, etc.)
- [ ] Implementar método `limit()`
- [ ] Implementar método `orderBy()`
- [ ] Adicionar suporte a relacionamentos (`hasOne`, `hasMany`, etc.)
- [ ] Suporte a outros bancos de dados (MySQL, PostgreSQL) via variável de ambiente

### Arquitetura e Padrões
- [ ] Implementar validação de tipos de dados nos valores do `where` (atualmente tudo é tratado como string com aspas simples)
- [ ] Tratar exceções de banco de dados de forma mais elegante
- [ ] Implementar *Migrations* para criação de tabelas automáticas
- [ ] Substituir banco local por variáveis de ambiente (Dotenv) para credenciais do banco

### Outros
- [ ] Publicar pacote no Packagist
