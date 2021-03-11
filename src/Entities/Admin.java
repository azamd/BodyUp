/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.util.Date;

/**
 *
 * @author Nasr
 */
public class Admin {
    private int Phone;
    private String Firstname,Surname,email,adress;
    private Date Birthday;
         public Admin(){
                          }
  public String getFirstname(){
 return Firstname;
  }
  public void setSurname(String Surname){
 this.Surname=Surname;
  }
  public String getemail(){
 return email;
  }
  public void setemail(String email){
 this.email=email;
  }
  public String getadress(){
 return adress;
  }
  public void setadress(String adress){
 this.adress=adress;
  } 
}
