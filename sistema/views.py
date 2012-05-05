from django.shortcuts import render_to_response
from sistema.models import Cliente
def index(request):
    return render_to_response('sistema/index.html')

def saque(request):
    clientes_list = Cliente.objects.all()
    return render_to_response('sistema/saque.html', {'clientes_list' : clientes_list})