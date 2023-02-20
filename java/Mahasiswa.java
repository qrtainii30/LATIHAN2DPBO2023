public class Mahasiswa extends SiviAk{
    private int nim;
    private String nama, jenis_kelamin, fakultas, prodi;

    public Mahasiswa(){

    }

    //sett
    public void setNama(String nama){
        this.nama = nama;
    } 
    //get
    public String getNama(){
        return this.nama;
    }

    //sett
    public void setNim(int nim){
        this.nim = nim;
    } 
    //get
    public int getNim(){
        return this.nim;
    }

    //sett
    public void setJK(String jenis_kelamin){
        this.jenis_kelamin = jenis_kelamin;
    } 
    //get
    public String getJK(){
        return this.jenis_kelamin;
    }

    //sett
    public void setFakultas(String fakultas){
        this.fakultas = fakultas;
    } 
    //get
    public String getFakultas(){
        return this.fakultas;
    }

    //sett
    public void setProdi(String prodi){
        this.prodi = prodi;
    } 
    //get
    public String getProdi(){
        return this.prodi;
    }
}