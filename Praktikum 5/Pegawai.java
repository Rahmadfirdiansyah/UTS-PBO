/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package UML_Prak5;

/**
 *
 * @author LENOVO
 */
public class Pegawai {
    protected String nama;
protected int gaji;

    public Pegawai(String nama, int gaji) {
        this.nama = nama;
        this.gaji = gaji;
    }
    public int infoGaji(){
        return gaji;
    }
}
