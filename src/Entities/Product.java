/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;


/**
 *
 * @author Shayma CHAIBI
 */
public class Product {
    
    private int IdProd;
    private String Name;
    private String CatProd;
    private String Description;
    private String Img;
    private float Price;

    public Product() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Product(String string, String string0, String string1, String string2) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   
    
    public String toString() {
        return "Product{" + "IdProd=" + IdProd + ", nom=" + Name + ", description=" + Description + ", prix=" + Price + '}';
    }
    
    public Product(int IdProd, String Name, String CatProd, String Description, String Img, float Price) {
        this.IdProd = IdProd;
        this.Name = Name;
        this.CatProd = CatProd;
        this.Description = Description;
        this.Img = Img;
        this.Price = Price;
    }

    public int getIdProd() {
        return IdProd;
    }

    public String getName() {
        return Name;
    }

    public String getCatProd() {
        return CatProd;
    }

    public String getDescription() {
        return Description;
    }

    public String getImg() {
        return Img;
    }

    public float getPrice() {
        return Price;
    }

    public void setIdProd(int IdProd) {
        this.IdProd = IdProd;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public void setCatProd(String CatProd) {
        this.CatProd = CatProd;
    }

    public void setDescription(String Description) {
        this.Description = Description;
    }

    public void setImg(String Img) {
        this.Img = Img;
    }

    public void setPrice(float Price) {
        this.Price = Price;
    }
    
}


