#include <fstream>
#include <string>
#include <iostream>
#include <math.h>
#include <fstream>
using namespace std;
int silnia(int n) {
    if(n==0){ 
        return 1;
    }
    return silnia(n-1)*n;
}

int main()
{
  string linia; 
  ifstream liczby("liczby.txt");
  int licznik = 0; 
  int licznik2 = 0;
  if(liczby.is_open()){ 
    while (getline (liczby,linia)){ 
      int liczba = stoi(linia);
      float l = log(liczba)/log(3); 
      int tmp = l;
      if(l == tmp){ 
        licznik++; 
      }
      int i = 10;
      int suma = 0;
      int tmp2 = liczba;
      while (liczba > 0) {
        int t = liczba%i;
        liczba /= i;
        suma += silnia(t);
      }
      if (tmp2 == suma) {
        ++licznik2;
      }
    }    
    liczby.close(); 
  }
  ofstream save1("wynik4.txt");
  save1<<"Ilosc poteg liczby 3 " << licznik << endl;
  save1<<"Ilosc liczb z sumie silń z cyfr liczby " << licznik2 << endl;
  save1.close();
  return 0;
}
