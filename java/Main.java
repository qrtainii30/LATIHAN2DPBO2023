import java.util.Scanner;

public class Main {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.println("Data Kelompok CERIA");
        System.out.println("===================");

        System.out.println("\nJumlah data anggota yang akan di input: ");
        int n = 0;
        n = sc.nextInt();

        Mahasiswa dataMhs = new Mahasiswa();
        int nik = 0, nim = 0;
        String nama = "", fakultas = "", prodi = "", asal_univ = "", email_edu = "", jenis_kelamin = "";
        
        for (int i = 0; i < n; i++) {
            System.out.println("\n Anggota Ke - " + (i+1) + "\n");

            System.out.print("Berapa NIK kamu     : ");
            try{
				nik = sc.nextInt();
			}catch(Exception e){}

            System.out.print("Berapa NIM kamu     : ");
            try{
				nim = sc.nextInt();
			}catch(Exception e){}

            System.out.print("Siapa nama kamu     : ");
            try{
				nama = sc.next();
			}catch(Exception e){}

            System.out.print("Masukkan email kamu : ");
            try{
				email_edu = sc.next();
			}catch(Exception e){}

            System.out.print("Apa jenis kelaminmu : ");
            try{
				jenis_kelamin = sc.next();
			}catch(Exception e){}

            System.out.print("Apa nama Prodi kamu : ");
            try{
				prodi = sc.next();
			}catch(Exception e){}

            System.out.print("Fakultas apatuu     : ");
            try{
				fakultas = sc.next();
			}catch(Exception e){}

            System.out.print("Univ yang mana      : ");
            try{
				asal_univ = sc.next();
			}catch(Exception e){}

            //simpan data
            dataMhs.setNik(nik);
            dataMhs.setNim(nim);
            dataMhs.setNama(nama);
            dataMhs.setJK(jenis_kelamin);
            dataMhs.setFakultas(fakultas);
            dataMhs.setProdi(prodi);
            dataMhs.setAsal_univ(asal_univ);
            dataMhs.setEmail_edu(email_edu);
        }

        System.out.println("DATA YANG TELAH DIINPUT : ");

        for (int j = 0; j < n; j++) {
            System.out.println("\n======= ANGGOTA KE " + (j+1) + "=========");
            System.out.println("| NIK            : " + dataMhs.getNik());
            System.out.println("| NIM            : " + dataMhs.getNim());
            System.out.println("| Email          : " + dataMhs.getEmail_edu());
            System.out.println("| Nama           : " + dataMhs.getNama());
            System.out.println("| Jenis Kelamin  : " + dataMhs.getNim());
            System.out.println("| Program Studi  : " + dataMhs.getProdi());
            System.out.println("| Fakultas       : " + dataMhs.getFakultas());
            System.out.println("| Universitas    : " + dataMhs.getAsal_univ());
        }
        System.out.println(" \nSEMANGAT QERJA RYODII^^");

        //menutup scanner
        sc.close();
    }
}