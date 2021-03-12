#include <iostream>
#include <fstream>


using namespace std;

bool palindrom(string slowo)
{
	int d = slowo.size();
	for (int i = 0; i < d/2 ; i++)
	{
		if(slowo[i]!=slowo[d-i-1])
		{
			return false;
		}
	}
	return true;
}

int main() {
	string slowo;
	cin >> slowo;
	if (palindrom(slowo))
		cout << "Wyraz " << slowo << " jest palindromem" << endl;
	else
		cout << "Wyraz " << slowo << " nie jest palindromem" << endl;
	return 0;
}