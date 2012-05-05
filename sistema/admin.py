from django.contrib import admin

from models import Agencia
from models import Funcionario
from models import Cliente
from models import Filiado
from models import Saque
from models import Emprestimo
from models import Deposito

admin.site.register(Agencia)
admin.site.register(Funcionario)
admin.site.register(Cliente)
admin.site.register(Filiado)
admin.site.register(Saque)
admin.site.register(Emprestimo)
admin.site.register(Deposito)