/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycomany.entities;


public class Gym
{
   
    private int id;

  
    private  String name;

    private  int Duration;

    private double Price;

   
    private String image;

  
    private String Description;

    
    public Gym() {
        
    }
    public Gym(String name, int Duration, double Price, String image, String Description) {
        this.name = name;
        this.Duration = Duration;
        this.Price = Price;
        this.image = image;
        this.Description = Description;
    }

    public Gym( String name, int Duration, double Price, String Description) {
        this.name = name;
        this.Duration = Duration;
        this.Price = Price;
        this.Description = Description;
    }
    
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getDuration() {
        return Duration;
    }

    public void setDuration(int Duration) {
        this.Duration = Duration;
    }

    public double getPrice() {
        return Price;
    }

    public void setPrice(double Price) {
        this.Price = Price;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getDescription() {
        return Description;
    }

    public void setDescription(String Description) {
        this.Description = Description;
    }

    
    
  
}