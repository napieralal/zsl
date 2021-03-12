#include <iostream>
#include <fstream>
using namespace std;

bool palindrom(string haslo) {
    int d = haslo.size();
    for (int i = 0; i < d / 2; i++)
    {
        if (haslo[i] != haslo[d - i - 1])
        {
            return false;
        }
    }
    return true;
}
bool asci(string haslo) {
    int asci3 = int(haslo[0]) + int(haslo[1]);
    if (asci3!=220)
    {
        return false;
    }
    return true;
}

int main()
{
    int parzyste=0, nieparzyste=0;
    string haslo;
    ifstream wczyt("hasla.txt");
    if (wczyt.good())
    {
        while (wczyt >> haslo)
        {
            
            if (haslo.length() % 2 == 0)
            {
                parzyste++;
            }
            else {
                nieparzyste++;
            }           
            if (palindrom(haslo))
            {
                ofstream zapis2("wynik4b.txt", ios::app);
                zapis2 << haslo << " " << "jest palindromem"<<endl;
            }
            else {
                ofstream zapis2("wynik4b.txt", ios::app);
                zapis2 << haslo << " " << "nie jest palindromem"<<endl;
            }
            if (asci(haslo))
            {
                ofstream zapis3("wynik4c.txt", ios::app);
                zapis3 << haslo << endl;
            }
        }      
        ofstream zapis("wynik4a.txt"); 
            zapis << parzyste << endl << nieparzyste;
        
    }
    
}

