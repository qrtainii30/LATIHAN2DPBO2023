#include <string>
#include <iostream>

using namespace std;

#include"Mahasiswa.cpp"

int main()
{
    int nik, nim;
    string nama, fakultas, prodi, asal_univ, email_edu, jenis_kelamin;

    int n;

    cout << "\nData Kelompok CERIA" << endl;
    cout << "===================" << endl;

    cout<< "Banyaknya data anggota kamu : " << endl;
    cin >> n;

    Mahasiswa mhs[n];
    
        for (int i = 0; i < n; i++)
            {
                cout << endl << "No. "  << i+1 << endl;
                cout << "Berapa NIK kamu     : ";
                cin >> nik;
                cout << "Berapa NIM kamu     : ";
                cin >> nim;
                cout << "Siapa nama kamu     : ";
                cin >> nama;
                cout << "Masukkan email kamu : ";
                cin >> email_edu;
                cout << "Apa jenis kelaminmu : ";
                cin >> jenis_kelamin;
                cout << "Apa nama Prodinya   : ";
                cin >> prodi;
                cout << "Fakultas apatuu     : ";
                cin >> fakultas;
                cout << "Dari Univ mana      : ";
                cin >> asal_univ;

                //mengisi nilai variabel dari masukan
                mhs[i].setNik(nik);
                mhs[i].setNim(nim);
                mhs[i].setNama(nama);
                mhs[i].setEmailEdu(email_edu);
                mhs[i].setJenisKelamin(jenis_kelamin);
                mhs[i].setProdi(prodi);
                mhs[i].setFakultas(fakultas);
                mhs[i].setAsalUniv(asal_univ);
                cout << "\nOkey, data sudah dibuat" << endl;
            }

    /*OUTPUT*/
    cout << endl << "BERIKUT DATA YANG TELAH DIMASUKKAN :" << endl;

    for(int i = 0; i < n; i++){
        cout << endl << "======= ANGGOTA KE " << i+1 << " =========" << endl;
        cout << "| EMAIL          : " << mhs[i].getEmailEdu() <<endl;
        cout << "| NIK            : " << mhs[i].getNik() <<endl;
        cout << "| NIM            : " << mhs[i].getNim() <<endl;
        cout << "| Nama           : " << mhs[i].getNama() <<endl;
        cout << "| Jenis Kelamin  : " << mhs[i].getJenisKelamin() <<endl;
        cout << "| Program Studi  : " << mhs[i].getProdi() <<endl;
        cout << "| Fakultas       : " << mhs[i].getFakultas() <<endl;
        cout << "| Universitas    : " << mhs[i].getAsalUniv() <<endl;
    }
    cout << endl << " SEMANGAT QERJA RYODI^^" << endl;
    return 0;
}
