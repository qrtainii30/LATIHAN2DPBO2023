public class Human {
    private int nik;
    private String nama, jenis_kelamin;

    public Human(){}

    //sett
    public void setNama(String nama){
        this.nama = nama;
    } 
    //get
    public String getNama(){
        return this.nama;
    }

    //sett
    public void setNik(int nik){
        this.nik = nik;
    } 
    //get
    public int getNik(){
        return this.nik;
    }

    //sett
    public void setJK(String jenis_kelamin){
        this.jenis_kelamin = jenis_kelamin;
    } 
    //get
    public String getJK(){
        return this.jenis_kelamin;
    }
}
