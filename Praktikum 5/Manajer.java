/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package UML_Prak5;

/**
 *
 * @author LENOVO
 */
public class Manajer extends Pegawai{
    private int tunjangan;
    
    public Manajer(int tunjangan, String nama, int gaji) {
        super(nama, gaji);
        this.tunjangan = tunjangan;
    }

   
    public int infoGaji (){
        return gaji;
    }
    public  int infoTunjangan (){
        return tunjangan;
    }
}
