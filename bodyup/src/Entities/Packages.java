/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author aziz
 */
public class Packages {
   
    private String name;  
  private String pic;  
  private String detail;  

    public Packages(String name, String pic, String detail) {
        this.name = name;
        this.pic = pic;
        this.detail = detail;
    }

    public Packages() {
        
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getPic() {
        return pic;
    }

    public void setPic(String pic) {
        this.pic = pic;
    }

    public String getDetail() {
        return detail;
    }

    public void setDetail(String detail) {
        this.detail = detail;
    }
  
    
    
    
    
}
