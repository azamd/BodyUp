/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Categories;
import Services.IServiceCategories;
import Tools.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author aziz
 */
public class ServiceCategories implements IServiceCategories {

    @Override
    public void addCategories(Categories C) {
     try {
            String query= "INSERT INTO `categories`(`cat_id`, `cat_name`) VALUES ('"+C.getCat_id()+"','"+C.getCat_Name()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
          
            pst.executeUpdate();
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }     
    }

    @Override
    public void updateCategories(Categories C) {
       try {
            String query = "UPDATE `categories` SET `cat_name`='"+C.getCat_Name()+"' WHERE cat_id='"+C.getCat_id()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
          
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
    }

    @Override
    public void deleteCategories(Categories C) {
        try {
            String query = "DELETE FROM `categories` WHERE cat_id='"+C.getCat_id()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            //pst.setString(1, E.getEx_id());
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }    
    }

    /**
     *
     * @return
     * @throws SQLException
     */
    public List<Categories> displayCategories() throws SQLException {
         
        List<Categories> Cats = new ArrayList<>();
            Statement st =MyConnection.getInstance().getCnx().createStatement();
        String query="SELECT * FROM `categories`";
        ResultSet rs= st.executeQuery(query);
        
       
        while(rs.next()){
        Categories C = new Categories();
        C.setCat_id(rs.getString("cat_id"));
        C.setCat_Name(rs.getString("cat_name"));
        Cats.add(C);
        
        
        
        
    }return Cats;

    
    
}


}