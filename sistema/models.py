from django.db import models

class Agencia(models.Model):
    numero_agencia = models.IntegerField()
    endereco = models.TextField()
    
    def __unicode__(self):
        return str(self.numero_agencia)
    
class Funcionario(models.Model):
    cpf = models.CharField(max_length=15)
    nome = models.CharField(max_length=100)
    endereco = models.TextField()
    telefone = models.CharField(max_length=20)
    data_de_admissao = models.DateField()
    salario = models.FloatField()
    observacao = models.TextField()
    agencia = models.ForeignKey(Agencia)
    login = models.CharField(max_length=20)
    senha = models.CharField(max_length=20)
    funcao = models.CharField(max_length=20)
    
    def __unicode__(self):
        return self.nome
    
class Cliente(models.Model):
    cpf = models.CharField(max_length=15)
    nome = models.CharField(max_length=100)
    endereco = models.TextField()
    telefone = models.CharField(max_length=20)
    saldo = models.FloatField()
    agencia = models.ForeignKey(Agencia)
    
    def __unicode__(self):
        return self.nome
    
class Filiado(models.Model):
    cpf_responsavel_instituicao = models.CharField(max_length=15)
    nome_responsavel_instituicao = models.CharField(max_length=100)
    tipo_instituicao = models.CharField(max_length=100)
    endereco_instituicao = models.TextField()
    telefone_instituicao = models.CharField(max_length=20)
    
    def __unicode__(self):
        return self.nome_responsavel_instituicao
    
class Emprestimo(models.Model):
    valor = models.FloatField()
    data = models.DateField()
    funcionario = models.ForeignKey(Funcionario)
    cliente = models.ForeignKey(Cliente)
    def __unicode__(self):
        return self.pk

class Saque(models.Model):
    valor = models.FloatField()
    data = models.DateField()
    cliente = models.ForeignKey(Cliente)
    
    def __unicode__(self):
        return self.pk
    
class Deposito(models.Model):
    valor = models.FloatField()
    data = models.DateField()
    cliente = models.ForeignKey(Cliente)
    
    def __unicode__(self):
        return self.pk
    
#class Transferencia(models.Model):
#    valor = models.FloatField()
#    data = models.DateField()
#    cliente_concedente = models.ForeignKey(Cliente, 'cpf', OneToOneField)
#    cliente_beneficiado = models.ForeignKey(Cliente, 'cpf', OneToOneField)
