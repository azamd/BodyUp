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
public class Categories {
 
    private Integer cat_id;
    private String cat_Name;

    public Categories(Integer cat_id, String cat_Name) {
        this.cat_id = cat_id;
        this.cat_Name = cat_Name;
    }

    public Categories() {
       
    }
    
    
    public int getCat_id() {
        return cat_id;
    }

    public void setCat_id(int cat_id) {
        this.cat_id = cat_id;
    }

    public String getCat_Name() {
        return cat_Name;
    }

    public void setCat_Name(String cat_Name) {
        this.cat_Name = cat_Name;
    }

    @Override
    public String toString() {
        return "Categories{" + "cat_id=" + cat_id + ", cat_Name=" + cat_Name + "}\n";
    }

   
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
}
