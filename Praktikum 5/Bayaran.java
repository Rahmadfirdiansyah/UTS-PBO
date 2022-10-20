/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package UML_Prak5;

/**
 *
 * @author LENOVO
 */
public class Bayaran {
    public int hitungbayaran(Pegawai peg){
int uang = peg.infoGaji();
if (peg instanceof Manajer)
    uang += ((Manajer) peg).infoTunjangan();
else if (peg instanceof Programmer)
    uang += ((Programmer) peg).infoBonus();
return uang;
}
public static void main(String args[]){
Manajer man = new Manajer(7000000, "Agus", 500000);
Programmer prog = new Programmer(6000000,"Budi", 350000);
Bayaran hr = new Bayaran();
System.out.println("Bayaran untuk Manajer : " +
hr.hitungbayaran(man));
System.out.println("Bayaran untuk Programmer : " +
hr.hitungbayaran(prog));
}
}
