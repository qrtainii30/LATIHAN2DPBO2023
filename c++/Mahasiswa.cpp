#include "SivitasAkademik.cpp"

class Mahasiswa : public SivitasAkademik{
    private:
        int nim;
        string fakultas, prodi;

    public:
        Mahasiswa(){

        }

        void setNim(int nim){
            this->nim = nim;
        }
        int getNim(){
            return this->nim;
        }

        void setFakultas(string fakultas){
            this->fakultas = fakultas;
        }
        string getFakultas(){
            return this->fakultas;
        }

        void setProdi(string prodi){
            this->prodi = prodi;
        }
        string getProdi(){
            return this->prodi;
        }

        ~Mahasiswa(){}
};