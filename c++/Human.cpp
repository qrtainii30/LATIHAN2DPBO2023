#include<string>
#include<iostream>

using namespace std;

class Human{
    private:
        int nik;
        string nama, jenis_kelamin;
    
    public:
        Human(){

        }

        void setNik(int nik){
            this->nik = nik;
        }
        int getNik(){
            return this->nik;
        }

        void setNama(string nama){
            this->nama = nama;
        }
        string getNama(){
            return this->nama;
        }

        void setJenisKelamin(string jenis_kelamin){
            this->jenis_kelamin = jenis_kelamin;
        }
        string getJenisKelamin(){
            return this->jenis_kelamin;
        }

        ~Human(){
            
        }
};