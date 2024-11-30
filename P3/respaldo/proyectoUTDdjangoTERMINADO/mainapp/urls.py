from django.contrib import admin
from django.urls import path
from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='inicio'),
    path('inicio/', views.index, name='inicio'),
    path('about/', views.about, name='about'),
    path('mision/', views.mision, name='mision'),
    path('vision/', views.vision, name='vision'),
    path('registro/', views.registro, name='registro'),
    path('login/', views.inicio_sesion, name='inicio_sesion'),
    path('logout/', views.logout_user, name='logout'),
]
