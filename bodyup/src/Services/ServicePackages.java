/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Packages;
import Interfaces.IServicePackages;
import Utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

/**
 *
 * @author aziz
 */
public class ServicePackages implements IServicePackages {
    
    
Connection ctn;

    public ServicePackages() {
     ctn = MyConnection.getInstance().getCnx();
    }

    @Override
    public void addPacks(Packages P) {
       try {
            String query= "INSERT INTO `package`(`name`, `picture`, `detail`) VALUES ('"+P.getName()+"','"+P.getPic()+"','"+P.getDetail()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
           
            
            pst.executeUpdate();
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }

    @Override
    public void updatePacks(Packages P) {
       try {
            String query = "UPDATE `package` SET `name`='"+P.getName()+"',`picture`='"+P.getPic()+"',`detail`='"+P.getDetail()+"' WHERE name='"+P.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
          
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    @Override
    public void deletePacks(Packages P) {
       
         try {
            String query = "DELETE FROM `package` WHERE name='"+P.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
    }
    
}
