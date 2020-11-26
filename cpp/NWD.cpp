#include<iostream>
#include<cstdlib>
using namespace std;

int NWD(int a=35, int b=124)
{
    while(a!=b)
       if(a>b)
           a-=b; //lub a = a - b;
       else
           b-=a; //lub b = b-a
    return a; // lub b - obie zmienne przechowuj¹ wynik NWD(a,b)
}

int main()
{


    cout<<"NWD("<<a<<","<<b<<") = "<<NWD(a,b)<<endl;

    system("pause");
    return 0;
}
