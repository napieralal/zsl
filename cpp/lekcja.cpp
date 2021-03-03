#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int plec(int m, int k,string pesel)
{
        if (pesel[9] % 2 == 0)
        {
            k++;
        }
        else m++;
    return m, k;
}
bool czylistopad(string pesel)
{
    if (pesel[2]==49&&pesel[3]==49||pesel[2]==51&&pesel[3]==49)
    {
        return true;
    }
    return false;
}
bool czybledny(string pesel)
{
    int licz= 1 * pesel[0] + 3 * pesel[1] + 7 * pesel[2] + 9 * pesel[3] + 1 * pesel[4] + 3 * pesel[5] + 7 * pesel[6] + 9 * pesel[7] + 1 * pesel[8] + 3 * pesel[9] + pesel[10];
    if (licz%10==0)
    {
        return true;
    }
    return false;
}


int main()
{
    int m = 0, k = 0, listopad = 0;
    string pesel;
    ofstream zapis("wynik6.txt", ios::app);
    ifstream wczyt("dane.txt");
    if (wczyt.good())
    {
        while (wczyt >> pesel)
        {

            if (pesel[9] % 2 == 0)
            {
                k++;
            }
            else  m++;
            if (czylistopad(pesel))
            {
                listopad++;
            }
            if (czybledny(pesel) == false)
            {
                zapis << pesel << " jest fa³szywy" << endl;;
            }
        }
    }
    zapis << "Zadanie 6.1" << endl;
    zapis << "Ilosc kobiet " << k << " " << "Ilosc mezczyzn " << m << endl;
    zapis << "Zadanie 6.2" << endl << "Listopad: " << listopad << endl;
    zapis << "Zadanie 6.3"<<endl;
}

