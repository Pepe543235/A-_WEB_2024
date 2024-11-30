from django.shortcuts import render, HttpResponse, redirect
#from django.contrib.auth.forms import RegisterForm
from mainapp.forms import RegisterForm
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.decorators import login_required

#logia de las vistas
# Create your views here.
def index(request):
    return render(request,"mainapp/index.html", {
        'title':'Inicio',
        'content':'Pagina de inicio',
    })
    
@login_required(login_url='inicio')
def about(request):
    return render(request, "mainapp/about.html", {
        'title':'Acerca de nosotros',
        'content':'Somos un equipo de desarrollo de software'
    })
    
@login_required(login_url='inicio')
def mision(request):
    return render(request, "mainapp/mision.html", {
        'title':'Mision',
        'content':'Somos un equipo de desarrollo de software'
    })
    
@login_required(login_url='inicio')
def vision(request):
    return render(request, "mainapp/vision.html",{
        'title':'Vision',
        'content':'Somos un equipo de desarrollo de software'
    })
    
def nav(request):
    return render(request,"mainapp/nav.html",{
        'title':'Navegacion',
        'content':'Desarrollo de software'
    })
    
def registro(request):
    if request.user.is_authenticated:
        return redirect('inicio')
    else:
        register_form=RegisterForm()
        
        if request.method == "POST":
            register_form=RegisterForm(request.POST)
            
            if register_form.is_valid():
                register_form.save()
                messages.success(request, "Registro con exito!")
                return redirect('inicio')
    
        return render(request,"usuarios/registro.html",{
            'title':'Registro de usuarios',
            'register_form':register_form
        })

def inicio_sesion(request):
    if request.user.is_authenticated:
        return redirect('inicio')
    else:
        if request.method == "POST":
            username=request.POST.get('username')
            password=request.POST.get('password')
            
            user=authenticate(request, username=username, password=password)
            
            if user is not None:
                login(request, user)
                messages.success(request, "BIENVENIDO!..")
                return redirect('inicio')
            else:
                messages.warning(request, "No es posible el acceso, verifique las credenciales, credenciales.correctas")
    
        return render(request,"usuarios/inicio_sesion.html",{
            'title':'Inicio de sesion',
            'content':'Formulario de Inicio de Sesion'
        })
    
def logout_user(request):
    logout(request)
    return redirect('inicio')