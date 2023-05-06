from django.shortcuts import render

from django.contrib.auth.views import LoginView, LogoutView
from django.urls import reverse_lazy

class MyLoginView(LoginView):
    template_name = 'accounts/login.html'
    success_url = reverse_lazy('home')

class MyLogoutView(LogoutView):
    next_page = reverse_lazy('home')

def home(request):
    return render(request, 'home.html')

# Create your views here.
