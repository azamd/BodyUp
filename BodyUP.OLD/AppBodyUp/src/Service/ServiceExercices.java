/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Exercices;
import Services.IServiceExercices;
import Tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author aziz
 */
public class ServiceExercices implements IServiceExercices {

    Connection ctn;

    public ServiceExercices() {
       ctn = MyConnection.getInstance().getCnx();
    }
          
    
    
     
    //public void displayExercices() {
     //ObservableList<Exercices> List = getExList();
    //}
    
    
    @Override
    public void addExercices(Exercices E) {
     try {
            String query= "INSERT INTO `exercices`(`ex_id`, `pkg_id`, `cat_id`, `name`, `label`, `duration`, `level`) VALUES ('"+E.getEx_id()+"','"+E.getPkg_id()+"','"+E.getCat_id()+"','"+E.getName()+"','"+E.getLabel()+"','"+E.getDuration()+"','"+E.getLevel()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
           // pst.setString(0, E.getEx_id());
           // pst.setString(1, E.getCat_id());
            //pst.setString(2, E.getPkg_id());
           // pst.setString(3,E.getName());
            //pst.setString(4,E.getLabel());
            //pst.setString(5,E.getDuration());
            //pst.setString(6,E.getLevel());
            
            pst.executeUpdate();
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }

    @Override
    public void updateExercices(Exercices E) {
       try {
            String query = "UPDATE `exercices` SET `pkg_id`='"+E.getPkg_id()+"',`cat_id`='"+E.getCat_id()+"',`name`='"+E.getName()+"',`label`='"+E.getLabel()+"',`duration`='"+E.getDuration()+"',`level`='"+E.getLevel()+"' WHERE ex_id='"+E.getEx_id()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
           // pst.setString(1, E.getEx_id());
            //pst.setString(2, E.getCat_id());
            //pst.setString(3, E.getPkg_id());
           // pst.setString(4, E.getName());
           // pst.setString(5, E.getLabel());
           // pst.setString(6, E.getDuration());
           // pst.setString(7, E.getLevel());
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    @Override
    public void deleteExercices(Exercices E) {
      try {
            String query = "DELETE FROM `exercices` WHERE ex_id='"+E.getEx_id()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            //pst.setString(1, E.getEx_id());
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
    }

  

    
    
   
    
    
    
    }
    

