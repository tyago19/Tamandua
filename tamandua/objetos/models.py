from django.db import models

class Agencia(models.Model):
	numero_agencia = models.CharField(max_length=100)
	endereco = models.TextField()
	
class Funcionario(models.Model):
	cpf = models.CharField(max_length=15)
	nome = models.CharField(max_length=100)
	endereco = models.TextField()
	telefone = models.CharField(max_length=20)
	data_de_admissao = models.DateTimeField()
	salario = models.CharField(max_length=15)
	observacao = models.TextField()
	login = models.CharField(max_length=20)
	senha = models.CharField(max_length=20)
	funcao = models.CharField(max_length=20)
	
class Cliente(models.Model):
	cpf = models.CharField(max_length=15)
	nome = models.CharField(max_length=100)
	endereco = models.TextField()
	telefone = models.CharField(max_length=20)
	saldo = models.CharField(max_length=15)
	
class Filiado(models.Model):
	cpf_responsavel_instituicao = models.CharField(max_length=15)
	nome_responsavel_instituicao = models.CharField(max_length=100)
	tipo_instituicao = models.CharField(max_length=100)
	endereco_instituicao = models.TextField()
	telefone_instituicao = models.CharField(max_length=20)
