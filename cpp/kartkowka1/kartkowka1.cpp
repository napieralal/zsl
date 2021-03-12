#include <iostream>
#include <fstream>
using namespace std;

int main()
{
    int liczba,potega=0;
    ifstream load("liczby.txt");
    if (load.good())
    {
        while (load >> liczba)
        {
            if (liczba % 3 == 0||liczba==1)
            {
                potega++;
            }          
        }
    }
    ofstream zapis("wynik4.txt", ios::app);
    zapis << "Zadanie 4.1" << endl << potega;
    zapis.close();
    int l1=0,l2=0,l3=0,l4=0,l5=0; 
    ofstream zapis1("wynik4.txt", ios::app);
    zapis1 << "Zadanie 4.2" << endl;
    for (int i = 0; i <= 500; i++)
    {
        ifstream load1("liczby.txt");
        if (load1.good())
        {
            while (load1 >> liczba)
            {
                while (liczba > 0)
                {
                    int a = liczba;
                    l1 = liczba % 10;
                    int k1 = l1;
                    for (int i = 1; i < k1; i++)
                    {
                        l1 *= i;
                    }
                    l2 = liczba % 10;
                    int k2 = l2;
                    for (int i = 1; i < k2; i++)
                    {
                        l2 *= i;
                    }
                    l3 = liczba % 10;
                    int k3 = l3;
                    for (int i = 1; i < k3; i++)
                    {
                        l3 *= i;
                    }
                    l4 = liczba % 10;
                    int k4 = l4;
                    for (int i = 1; i < k4; i++)
                    {
                        l4 *= i;
                    }
                    l5 = liczba % 10;
                    int k5 = l5;
                    for (int i = 1; i < k5; i++)
                    {
                        l5 *= i;
                    }
                    int b = l1 + l2 + l3 + l4 + l5;
                    if (b == liczba)
                    {
                        zapis1 << liczba << endl;
                    }
                }
            }
        }
    }
}
