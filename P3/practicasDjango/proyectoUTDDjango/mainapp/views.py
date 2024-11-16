from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request,'mainapp/index.html',{
        'title':'Inicio',
        'content':'Bienvenido a la pagina pricipal'
    })

def about(request):
    return render(request,'mainapp/about.html',{
        'title':'Acerca de nosotros',
        'content':'Somos un equipo de desarrollo de software'
    })

def mision(request):
    return render(request,'mainapp/mision.html',{
        'title':'Misión',
        'content':'La misión de la empresa'
    })

def vision(request):
    return render(request,'mainapp/vision.html',{
        'title':'Visión',
        'content':'La visión de la empresa'
    })