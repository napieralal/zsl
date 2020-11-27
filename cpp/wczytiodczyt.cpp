#include <iostream>
#include <fstream>

using namespace std;

int main()
{
    string imie;
    int wiek;
    string login;
    cin >> imie;
    cin >> wiek;
    ofstream zapis("dane_osobowe.txt", ios::app);
    zapis << imie << " " << wiek << endl;
    zapis.close(); 
    string wiek1;
    ifstream wczyt("dane_osobowe.txt");
    if (wczyt.good()) {
        while (wczyt >> imie >> wiek1) {
            cout << imie << " " << wiek1 << " ";
            login = imie + wiek1;
            cout << login << endl;
        }
    }
    else {
        cout << "Nie udało sie";
    }
    wczyt.close();
    return 0;
}
