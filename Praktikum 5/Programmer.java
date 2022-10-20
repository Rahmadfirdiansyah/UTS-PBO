/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package UML_Prak5;

/**
 *
 * @author LENOVO
 */
public class Programmer extends Pegawai{
    private int bonus;
    public Programmer(int bonus, String nama, int gaji) {
        super(nama, gaji);
        this.bonus = bonus;
    }    
     public int infoGaji (){
         return gaji;
     }       
    public int infoBonus (){
        return bonus;
    }
}