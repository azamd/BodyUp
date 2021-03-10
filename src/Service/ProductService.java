/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Product;
import Services.IServiceProduct;
import Tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.jar.Attributes.Name;

/**
 *
 * @author Shayma CHAIBI
 */
public class ProductService {
     Connection cnx;
    
    public ProductService() {
        cnx = MyConnection.getInstance().getCnx();
        
    }  
        public void AddProduct(Product p) {
        try {
            String query="INSERT INTO product(IdProd,Name,CatProd,Description,Img,Price VALUES(?,?,?,?,?,?)";
            PreparedStatement pre=cnx.prepareStatement(query);
            pre.setLong(1, p.getIdProd());
            pre.setString(2, p.getName());
            pre.setString(3, p.getCatProd());            
            pre.setString(4, p.getDescription());
            pre.setString(5, p.getImg());
            pre.setLong(6, (long) p.getPrice());
            pre.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
    
    
    public ArrayList<Product> GetProduct(){
        ArrayList<Product> Products = new ArrayList<>();
        try {
            String request="SELECT * FROM product";
            Statement ste=cnx.createStatement();
            ResultSet result = ste.executeQuery(request);
            while (result.next()) {
                Product p = new Product();
                p.setIdProd((int) result.getLong("IdProd"));
                p.setName(result.getString("Name"));
                p.setCatProd(result.getString("lieu"));
                p.setDescription(result.getString("Description"));
                p.setImg(result.getString("Img"));
                p.setPrice(result.getLong("Price"));
                Products.add(p);
            }
        } catch(SQLException ex) {
            System.out.println(ex);
        }
        return Products;
    }
    
    
    
    
    public boolean DeleteProduct(Product P) {
        try {
     
            String requeteInsert = "DELETE FROM product WHERE Name=" + P.getName();
            PreparedStatement pre = cnx.prepareStatement(requeteInsert);

            pre.executeUpdate();
            return true;

        } catch (SQLException ex) {

            System.out.println("erruer delete");
            return false;
    }
    }
    
    
    public boolean UpdateProduct(Product P) {
        try {
            
            String requeteInsert = "UPDATE product set IdProd=?, Name=? ,  Description=?, CatProd=?, Price=?, Img=?  where IdProd=?";
            PreparedStatement pre = cnx.prepareStatement(requeteInsert);

            pre.setLong(1, P.getIdProd());
            pre.setString(2, P.getName());
            pre.setString(3, P.getCatProd());            
            pre.setString(4, P.getDescription());
            pre.setString(5, P.getImg());
            pre.setLong(6, (long) P.getPrice());

            pre.executeUpdate();
            return true;

        } catch (SQLException ex) {

            System.out.println("erruer update");
            return false;
        }

    }

    public List<Product> readAll() {
        List<Product> arr = new ArrayList();
        Connection conn = MyConnection.getInstance().getCnx();
        try {
            //*********
            PreparedStatement ps = conn.prepareStatement("select * from product order by Name");
            /*CategorieService pservice = new CategorieService();*/
            ResultSet result = ps.executeQuery();
            while (result.next()) {
                Product p = new Product();
                p.setIdProd((int) result.getLong("IdProd"));
                p.setName(result.getString("Name"));
                p.setCatProd(result.getString("lieu"));
                p.setDescription(result.getString("Description"));
                p.setImg(result.getString("Img"));
                p.setPrice(result.getLong("Price"));
                arr.add(p);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return arr;
    }
}

