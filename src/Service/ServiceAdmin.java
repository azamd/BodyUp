/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.User;
import Entities.Admin;
import Services.IserviceAdmin;
import Utils.MyConnection;
import static java.awt.PageAttributes.MediaType.C;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author Nasr
 */
public class ServiceAdmin implements IserviceAdmin {

    public void addUser(User U) {
        try {
            String query= "INSERT INTO `user`(`user_id`, `user_name`) VALUES ('"+U.getFirstname()+"','"+U.getSurname()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
          
            pst.executeUpdate();
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public void updateUser(User U) {
        try {
            String query = "UPDATE `user` SET `User_name`='"+U.getFirstname()+"' WHERE user_id='"+U.getid()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
          
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public void deleteUser(User U) {
       try {
            String query = "DELETE FROM `user` WHERE id='"+U.getid()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public ObservableList<User> getUserList() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public List<User> displayUser() throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
