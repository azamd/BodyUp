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
public class Diets {
    
     private int dt_id;
    private int pkg_id;
    private String description;
    private String name;
    private int calories;

    public Diets(int dt_id, int pkg_id, String description, String name, int calories) {
        this.dt_id = dt_id;
        this.pkg_id = pkg_id;
        this.description = description;
        this.name = name;
        this.calories = calories;
    }

    public Diets() {
    }

    
    
    
    
    
    
    
    
    
    public int getDt_id() {
        return dt_id;
    }

    public void setDt_id(int dt_id) {
        this.dt_id = dt_id;
    }

    public int getPkg_id() {
        return pkg_id;
    }

    public void setPkg_id(int pkg_id) {
        this.pkg_id = pkg_id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getCalories() {
        return calories;
    }

    public void setCalories(int calories) {
        this.calories = calories;
    }

    @Override
    public String toString() {
        return "Diets{" + "dt_id=" + dt_id + ", pkg_id=" + pkg_id + ", description=" + description + ", name=" + name + ", calories=" + calories + '}';
    }
    
    
    
    
}
