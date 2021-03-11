/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.User;
import Services.IserviceUser;
import Utils.MyConnection;
import java.awt.PageAttributes;
import static java.awt.PageAttributes.MediaType.C;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author Geek
 */
public class ServiceUser implements IserviceUser {

    @Override
    public void updateUser(User U) {
        try {
            String query = "UPDATE `User` SET `User_nam`='"+U.getFirstname()+"' WHERE id='"+U.getSurname()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
          
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   

    public void updatedatilsUser(PageAttributes.MediaType E) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void showdetailsUser(User U) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public ObservableList<User> getCatList() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
}
