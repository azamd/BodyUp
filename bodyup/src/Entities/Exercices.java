/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import javafx.scene.image.ImageView;
import javafx.scene.media.MediaView;

/**
 *
 * @author aziz
 */
public class Exercices {
  private int ex_id;  
  private int cat_id; 
  private int pkg_id; 
  private String name;  
  private String label;  
  private int duration;  
  private String level;
  private ImageView imageShow;
  private MediaView VideoShow;
  private String image;
  private String video;
  private float price;
 
    //Constructor  
    public Exercices(int ex_id, int cat_id, int pkg_id, String name, String label, int duration, String level, ImageView imageShow, MediaView VideoShow, String image, String video, float price) {
        this.ex_id = ex_id;
        this.cat_id = cat_id;
        this.pkg_id = pkg_id;
        this.name = name;
        this.label = label;
        this.duration = duration;
        this.level = level;
        this.imageShow= imageShow;
        this.VideoShow= VideoShow;
        this.image= image;
        this.video=video;
        this.price=price;
    }
    
    public Exercices( String name, String label, int duration, String level, ImageView imageShow, float price) {
       
        this.name = name;
        this.label = label;
        this.duration = duration;
        this.level = level;
        this.imageShow= imageShow;
       
       
        this.price=price;
    }

    public Exercices() {
       
    }

    //Getters
    public int getEx_id() {
        return ex_id;
    }

    public int getCat_id() {
        return cat_id;
    }

    public int getPkg_id() {
        return pkg_id;
    }

    public String getName() {
        return name;
    }

    public String getLabel() {
        return label;
    }

    public int getDuration() {
        return duration;
    }

    public String getLevel() {
        return level;
    }
     
     public ImageView getImageShow() {
        return imageShow;
    }
    public MediaView getVidShow() {
        return VideoShow;
    }
      public String getImage() {
        return image;
    }
       public String getVideo() {
        return video;
    }
        public float getPrice() {
        return price;
    }
    //Setters
    public void setEx_id(int ex_id) {
        this.ex_id = ex_id;
    }

    public void setCat_id(int cat_id) {
        this.cat_id = cat_id;
    }

    public void setPkg_id(int pkg_id) {
        this.pkg_id = pkg_id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setLabel(String label) {
        this.label = label;
    }

    public void setDuration(int duration) {
        this.duration = duration;
    }

    public void setLevel(String level) {
        this.level = level;
    }
    
    
    public void setImage(String image) {
        this.image = image;
    }
    
    
    public void setImgShow(ImageView imageShow) {
        this.imageShow = imageShow;
    }
    
    public void setVidShow(MediaView VideoShow) {
        this.VideoShow = VideoShow;
    }
    
    public void setVideo(String video) {
        this.video = video;
    }
    
    
    public void setPrice(float price) {
        this.price = price;
    }

    @Override
    public String toString() {
        return "Exercices{" + "ex_id=" + ex_id + ", cat_id=" + cat_id + ", pkg_id=" + pkg_id + ", name=" + name + ", label=" + label + ", duration=" + duration + ", level=" + level + ", imageShow=" + imageShow + ", VideoShow=" + VideoShow + ", image=" + image + ", video=" + video + ", price=" + price + '}';
    }

 

    


  

  
}
