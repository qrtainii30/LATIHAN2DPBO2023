#include "Human.cpp"

class SivitasAkademik : public Human{
    private:
        string asal_univ, email_edu;

    public:
        SivitasAkademik(){

        }

        void setAsalUniv(string asal_univ){
            this->asal_univ = asal_univ;
        }
        string getAsalUniv(){
            return this->asal_univ;
        }

        void setEmailEdu(string email_edu){
            this->email_edu = email_edu;
        }
        string getEmailEdu(){
            return this->email_edu;
        }

        ~SivitasAkademik(){}
};