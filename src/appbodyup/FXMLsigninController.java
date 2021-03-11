/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appbodyup;

import Utils.MyConnection;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author Geek
 */
public class FXMLsigninController implements Initializable {

    @FXML
    private AnchorPane anchorpane_parent;
    @FXML
    private Pane pane_top;
    @FXML
    private Label label;
    @FXML
    private AnchorPane anchorpane_center;
    @FXML
    private AnchorPane anchorpane_left;
    @FXML
    private JFXTextField apl_email;
    @FXML
    private JFXTextField apl_pwd;
    @FXML
    private JFXButton btn_confirme;
    @FXML
    private JFXButton btn_signup;
    @FXML
    private ComboBox apl_role;
    @FXML
    private AnchorPane anchorpane_right;

    Connection cnx=null;
    ResultSet rs=null;
    PreparedStatement pst=null;
    
    public void ConfirmepaneShow(){
       btn_confirme.setVisible(true);
       btn_signup.setVisible(false);
    }
        public void SignuppaneShow(){
       btn_confirme.setVisible(false);
       btn_signup.setVisible(true);
    }
    
        
        @FXML
          private void login(ActionEvent event)throws Exception{
              cnx=(Connection) MyConnection.getInstance();
              String sql="Select * from user where email =? and pwd= ?";
              try {
                pst=cnx.prepareStatement(sql);
                pst.setString(1,apl_email.getText());
                pst.setString(1,apl_pwd.getText());
                rs=pst.executeQuery();
                 if(rs.next()){
                     JOptionPane.showMessageDialog(null, "Email and Password Correct");
                     
                     btn_confirme.getScene().getWindow().hide();
                      Parent root = FXMLLoader.load(getClass().getResource("FXMLsignin.fxml"));
                      
                       Stage mainStage =new Stage();
                       Scene scene=new Scene(root);
                      mainStage.show();
                 
                 
                 
                 }else
                     JOptionPane.showMessageDialog(null, "EMail and Password Incorrect");
                 
                
            } catch (Exception e) {
                JOptionPane.showMessageDialog(null,e);
            }
              
          }
    
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        apl_role.getItems().addAll("Admin","User");
       
        
    }    
    
}
