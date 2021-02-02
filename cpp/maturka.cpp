#include <iostream>
#include <fstream>

using namespace std;

int main()
{
     cout << "Zadanie 5.1"<<endl;
     for (int i = 1; i <= 12; i++) //petla 12 liczb
     {
         ifstream wczyt("slowa.txt");
         int x,y=0;
         if (wczyt.good())
         {
             string slowo;
             while (wczyt >> slowo) //wczytanie slowa
             {
                 x = slowo.length();
                 if (x == i)
                 {
                     y++;

                 }
             }
         }
         ofstream zapis("wynik5.txt", ios::app);
         if (i == 1)
         {
             zapis << "Zadanie 5.1" << endl;
         }
         zapis << i << " " << y << endl;
         zapis.close();
         cout << i << " " << "-" << " " << y<<endl;
     }
     
    cout << "Zadanie 5.2" << endl;
    int i = 1;
        ifstream wczyt("nowe.txt");
        if (wczyt.good())
        {
            string slowo1;
            string slowo2="";
            while (wczyt >> slowo1) //wczytanie slowa
            {               
                int c = slowo1.length();
                int b = 0;
                for (int j = 0; j <= slowo1.length(); j++)
                {
                    slowo2 += slowo1[c];
                    c--;
                }             
                ifstream wczyt("slowa.txt");
                int x, y = 0;
                if (wczyt.good())
                {
                    
                    string slowo;
                    while (wczyt >> slowo) //wczytanie slowa
                    {
                        if (slowo == slowo1)
                        {
                            y++;
                        }
                        if (slowo==slowo2)
                        {
                            b++;
                        }
                    }
                    
                    ofstream zapis("wynik5.txt", ios::app);
                    if (i == 1)
                    {
                        zapis << "Zadanie 5.2" << endl;
                        i++;
                    }
                    zapis << slowo1 << " " << y <<" " << b << endl;
                    zapis.close();                 
                    cout << slowo1 << " " << y << " " << b<<endl;
                }
            }
        }
    
}