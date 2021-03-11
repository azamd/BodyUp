/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Exercices;
import Interfaces.IServiceExercices;
import Utils.MyConnection;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

/**
 *
 * @author aziz
 */
public class ServiceExercices implements IServiceExercices {

    Connection ctn;

    public ServiceExercices() {
       ctn = MyConnection.getInstance().getCnx();
    }
          
    
    public List<Exercices> getExList() {
        
        List<Exercices> exList = new ArrayList();
 
        try{
            
                   String query="SELECT * FROM exercices";
        Statement st;
        ResultSet rs;
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         
         
         while(rs.next()){
          Exercices E = new Exercices();
         ImageView img = new ImageView();
               Image image;
               try {
                    image = new Image(new FileInputStream((rs.getString("image"))));
                      img.setImage(image);
                  img.setPreserveRatio(true);
                 
                  
                  
                } catch (FileNotFoundException ex) {
                    Logger.getLogger(ServiceExercices.class.getName()).log(Level.SEVERE, null, ex);
                }
               
           
               
           
                E.setName(rs.getString("name"));
                E.setDuration(rs.getInt("duration"));
                E.setPrice(rs.getFloat("price"));
                E.setLabel(rs.getString("label"));
                E.setImgShow(img);
                E.setLevel(rs.getString("level"));
                
                
               
               
               
            exList.add(E);
               
         }
        
        }
        catch(SQLException e){
        
       System.out.println(e.getMessage());
        
        }
         return exList;
    
    }
     
    
    
    @Override
    public void addExercices(Exercices E) {
     try {
            String query= "INSERT INTO `exercices`(`cat_id`, `pkg_id`, `name`, `image`, `video`, `label`, `duration`, `level`, `price`) VALUES (?,?,?,?,?,?,?,?,?)";
            //String query= "INSERT INTO `exercices`(`cat_id`, `name`, `image`, `video`, `label`, `duration`, `level`, `price`) VALUES ('"+E.getCat_id()+"','"+E.getName()+"','"+E.getImage()+"','"+E.getVideo()+"','"+E.getLabel()+"','"+E.getDuration()+"','"+E.getLevel()+"','"+E.getPrice()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
           // pst.setString(0, E.getEx_id());
           
           pst.setInt(1, E.getPkg_id());
           pst.setInt(2, E.getCat_id());
           pst.setString(3,E.getName());
           pst.setString(4,E.getImage());
           pst.setString(5,E.getVideo()); 
           pst.setString(6,E.getLabel());
           pst.setInt(7,E.getDuration());
           pst.setString(8,E.getLevel());
           pst.setFloat(9,E.getPrice());
           
           
            pst.executeUpdate();
            System.out.println("Exercice inserted successfully.");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }

    @Override
    public void updateExercices(Exercices E) {
       try {
            String query = "UPDATE `exercices` SET `name`='"+E.getName()+"',`label`='"+E.getLabel()+"',`duration`='"+E.getDuration()+"',`level`='"+E.getLevel()+"',`image`='"+E.getImage()+"',`video`='"+E.getVideo()+"',`price`='"+E.getPrice()+"' WHERE name='"+E.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
           
            /* pst.setInt(1, E.getPkg_id());
           pst.setInt(2, E.getCat_id());
           pst.setString(3,E.getName());
           pst.setString(4,E.getImage());
           pst.setString(5,E.getVideo()); 
           pst.setString(6,E.getLabel());
           pst.setString(7,E.getDuration());
           pst.setString(8,E.getLevel());
           pst.setFloat(9,E.getPrice());*/
            
            
            
            pst.executeUpdate();
             System.out.println("Exercice updated successfully.");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    @Override
    public void deleteExercices(Exercices E) {
      try {
            String query = "DELETE FROM `exercices` WHERE name='"+E.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
           
            pst.executeUpdate();
             System.out.println("Exercice removed successfully.");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
    }

  

    
    
   
    
    
    
    }
    

