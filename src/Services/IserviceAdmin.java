/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.User;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author Geek
 */
public interface IserviceAdmin {
    public void addUser(User U);
    public void updateUser(User U);
    public void deleteUser(User U);
    public ObservableList<User> getUserList();
    public List<User> displayUser()throws SQLException;

}
