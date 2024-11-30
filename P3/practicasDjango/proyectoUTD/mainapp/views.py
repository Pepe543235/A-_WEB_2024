from django.shortcuts import render
#logia de las vistas
# Create your views here.
def index(request):
    mensaje = 'hola'
    return render(request,"mainapp/index.html", {
        'title':'Inicio',
        'content':'.:: Bienvenido a la pagina principal ::.',
        'mensaje':mensaje   
    })
    
def about(request):
    return render(request, "mainapp/about.html", {
        'title':'Acerca de nosotros',
        'content':'Somos un equipo de desarrollo de software'
    })
    
def mision(request):
    return render(request, "mainapp/mision.html", {
        'title':'Mision',
        'content':'En la Universidad Tecnológica de Durango nuestra misión es: Formar seres humanos íntegros, profesionalmente calificados que sean agentes de cambio para el desarrollo económico, tecnológico y cultural que beneficien a la sociedad.'
    })
    
def vision(request):
    return render(request, "mainapp/vision.html",{
        'title':'Vision',
        'content':'Para el año 2030 ser la primera opción de ingreso en educación superior, por tener el 100% de sus carreras acreditadas, cuerpos académicos consolidados, oferta académica de posgrados y el 70% de sus egresados desempeñándose profesionalmente.'
    })
    
def nav(request):
    return render(request,"mainapp/nav.html",{
        'title':'Navegacion',
        'content':'URLS'
    })