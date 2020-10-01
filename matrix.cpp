#include <iostream>
using namespace std;
int main ()
{
	int a,b,c,d;
	cout<<"enter the matrix one order";
	cin>>a>>b;	

	cout<<"enter the matrix two order";
	cin>>c>>d;

	int mat1[a][b], mat2[c][d],mat3[a][d];
	for (int i=0;i<a;i++)
	{
		for(int j=0;j<b;j++)
		{
			cin>>mat1[i][j];
		}
	}

	for (int i=0;i<c;i++)
	{
		for(int j=0;j<d;j++)
		{
			cin>>mat2[i][j];
		}
	}

	for (int i=0;i<a;i++)
	{
		for(int j=0;j<d;j++)
		{
			mat3[i][j] = 0;
		}
	}

	for(int i=0;i<a;i++)
	{
		for(int j=0;j<d;j++)
		{
			for(int k=0;k<b;k++)
			{
				mat3[i][j] = mat3[i][j]+mat1[i][k]*mat2[k][j];
			}
		}
	}

	for (int i=0;i<a;i++)
	{
		for(int j=0;j<d;j++)
		{
			cout<<mat3[i][j];
		}
		cout<<"\n";
	}


}