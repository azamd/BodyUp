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
public class User {
    private int id,Phone;
    private String Firstname,Surname,email,adress,gender,level,State,City,Zip;
    private Float weight,height;
    private Date Birthday;
         public User(){}

    public User(String string, String string0) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public User(String string, String string0, String string1, String string2, String string3, String string4) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
  public int getPhone(){
  return Phone;
  } 
  public void setPhone(int Phone){
  this.Phone=Phone;
  
  }
  
  public int getid(){
  return id;
  } 
  public void setid(int id){
  this.id=id;
  
  }
  public String getFirstname(){
 return Firstname;
  }
  
  public void setFirstname(String Surname){
 this.Firstname=Firstname;
  }
  
  public String getSurname(){
 return Surname;
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
  
  public String getgender(){
 return gender;
  }
  public void setgender(String gender){
 this.gender=gender;
  }
  
  public String getadress(){
 return adress;
  }
  public void setadress(String adress){
 this.adress=adress;
  } 
  public String getlevel(){
 return level;
  }
  public void setlevel(String level){
 this.level=level;
  }
  public String getState(){
 return State;
  }
  public void setState(String State){
 this.State=State;
  }
  public String getCity(){
 return City;
  }
  public void setCity(String City){
 this.City=City;
  }
  public void City(String City){
 this.City=City;
  }
  public String getZip(){
 return Zip;
  }
  public void Zip(String Zip){
 this.Zip=Zip;
  }
  
  
  
  
  
  
  public String toString(){
  return "Personne("+"Surname="+ Surname +",First Name+"+ Firstname +",email" +email+  ")";
  
  }
}

