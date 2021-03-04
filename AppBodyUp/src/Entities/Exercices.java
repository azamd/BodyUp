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
public class Exercices {
  private String ex_id;  
  private String cat_id;  
  private String pkg_id; 
  private String name;  
  private String label;  
  private String duration;  
  private String level;
 
    //Constructor  
    public Exercices(String ex_id, String cat_id, String pkg_id, String name, String label, String duration, String level) {
        this.ex_id = ex_id;
        this.cat_id = cat_id;
        this.pkg_id = pkg_id;
        this.name = name;
        this.label = label;
        this.duration = duration;
        this.level = level;
    }

    public Exercices() {
       
    }

    //Getters
    public String getEx_id() {
        return ex_id;
    }

    public String getCat_id() {
        return cat_id;
    }

    public String getPkg_id() {
        return pkg_id;
    }

    public String getName() {
        return name;
    }

    public String getLabel() {
        return label;
    }

    public String getDuration() {
        return duration;
    }

    public String getLevel() {
        return level;
    }
     
    //Setters
    public void setEx_id(String ex_id) {
        this.ex_id = ex_id;
    }

    public void setCat_id(String cat_id) {
        this.cat_id = cat_id;
    }

    public void setPkg_id(String pkg_id) {
        this.pkg_id = pkg_id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setLabel(String label) {
        this.label = label;
    }

    public void setDuration(String duration) {
        this.duration = duration;
    }

    public void setLevel(String level) {
        this.level = level;
    }

    @Override
    public String toString() {
        return "Exercices{" + "ex_id=" + ex_id + ", cat_id=" + cat_id + ", pkg_id=" + pkg_id + ", name=" + name + ", label=" + label + ", duration=" + duration + ", level=" + level + "}\n";
    }

    


  

  
}
